<?php
//Ä caracter para forçar detecção UTF8
if (!$isinside)
	die('Permiss&atilde;o negada.');

define('DUPLICATE_ENTRY',1062);

function dbOpen($timeout = 5, $transacao = FALSE) {
	$dbhost = 'localhost';
	$dbuser = 'orah';
	$dbpass = 'ORAHbanco';
	$dbname = 'orah_banco';

	/*
	$newconnection = mysqli_init();
	$newconnection->options(MYSQLI_OPT_CONNECT_TIMEOUT, $timeout);
	$newconnection->real_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(mysqli_connect_errno()) {
		printf("BD: Erro de Conex&atilde;o: %s", mysqli_connect_error());
		die();
	}

	$newconnection->set_charset("utf8");
	if($transacao)
		$newconnection->autocommit(FALSE);

	return($newconnection);
	*/

//	$newconnection = pg_pconnect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");
	return new PDO("pgsql:dbname=$dbname host=$dbhost", $dbuser, $dbpass);
}

function dbClose($conexao) {
	//mysqli_close($conexao);
}

function refValues($arr){
	//Only PHP 5.3+ work with reference
	if (strnatcmp(phpversion(),'5.3') >= 0) {
		$refs = array();
		foreach($arr as $key => $value)
			$refs[$key] = &$arr[$key];
		return $refs;
	}
	return $arr;
}

function escape_display($str) {
	return htmlspecialchars($str, ENT_QUOTES);
}

function debug($tipo = '', $errorCode = 0, $errorInfo = array()) {
	global $orah_debug;
	if ($_SESSION['orah_debug'] == 1 or $orah_debug == 1) {
		echo "<pre>";
		debug_print_backtrace();
		echo "</pre>";
		if ($tipo == 'banco')
			die('<pre>BD: Erro no processamento da Query.<br>Error: #'.$errorCode.' '.$errorInfo[2].'</pre>');
	}
	else {
		if ($tipo == 'banco')
			die('<pre>BD: Erro no processamento da Query.</pre>');
	}
}

class selectQuery extends executeQuery {
	function __construct($tabela, $campos, $extra = '', $noEscape = FALSE) {
		parent::__construct("SELECT $campos FROM $tabela $extra", $noEscape);
	}
}

class deleteQuery extends executeQuery {
	function __construct($tabela, $extra='') {
		parent::__construct("DELETE FROM $tabela $extra");
	}
}

class insertQuery extends executeQuery {
	function __construct($tabela, $nro_campos, $auto_increment = FALSE, $ignore = FALSE) {
		$campos = '';
		if ($auto_increment)
			$campos .= "NEXTVAL('{$tabela}_seq'),";

		for ($i=0; $i<$nro_campos; $i++) {
			if ($i) $campos .= ',';
			$campos .= '?';
		}

		if ($ignore)
			parent::__construct("INSERT IGNORE INTO $tabela VALUES ($campos)");
		else
			parent::__construct("INSERT INTO $tabela VALUES ($campos)");
	}
}

class insertUpdateQuery extends executeQuery {
	function __construct($tabela, $nro_campos, $extra) {
		$campos = '';

		for ($i=0; $i<$nro_campos; $i++) {
			if ($i) $campos .= ',';
			$campos .= '?';
		}

		parent::__construct("INSERT INTO $tabela VALUES ($campos) ON DUPLICATE KEY UPDATE $extra");
	}
}


class updateQuery extends executeQuery {
	function __construct($tabela, $campos, $extra='') {
		parent::__construct("UPDATE $tabela SET $campos $extra");
	}
}

class executeQuery {
	protected $query;
	protected $nro_campos;

	protected $stmt;
	protected $result_metadata;
	protected $row;

	protected $tipos = array();
	protected $valores = array();
	protected $error = array();
	protected $noEscape = FALSE;

	protected $dbconn;

	function __construct($query, $noEscape = FALSE) {
		$this->noEscape = $noEscape;

		if (!is_string($query))
			die("BD: Query inv&aacute;lida!");

		$this->query = $query;
		$this->nro_campos = substr_count($query, '?');
	}

	private function campo($tipo,$valor) {
		if (count($this->valores) < $this->nro_campos) {
			$this->tipos[] = $tipo;
			$this->valores[] = $valor;
		}
		else{
			debug();
			die("BD: N&uacute;mero de campos inv&aacute;lidos com a query!");
		}
	}

	function setError($cod, $msg) {
		$this->error[$cod] = $msg;
	}

	function inInt($valor) {
		$this->campo(PDO::PARAM_INT,$valor);
	}

	function inFloat($valor) {
		$this->campo(PDO::PARAM_STR,$valor);
	}

	function inBlob($valor) {
		$this->campo(PDO::PARAM_BOOL,$valor);
	}

	function inStr($valor) {
		$this->campo(PDO::PARAM_STR,$valor);
	}

	function inNull() {
		$ignora = count($this->valores);
		$i=0;
		$pos=0;
		while($i<=$ignora) {
			$pos = strpos($this->query,"?",$pos+1);
			$i++;
		}
		if($pos === FALSE){
			debug();
			die("BD: N&uacute;mero de campos inv&aacute;lidos com a query!");
		}
		$this->query = substr_replace($this->query,'NULL',$pos,1);
		$this->nro_campos--;
	}

	function getQuery($onlyQuery = false, $fillQuery = false) {
		if ($onlyQuery) {
			if (!$fillQuery) {
				return $this->query;
			}
			else {
				$tmp = $this->query;

				foreach ($this->valores as $n=>$chave) {
					if ($this->tipos[$n] == PDO::PARAM_STR)
						$tmp = preg_replace('/\?/', "&#039;$chave&#039;", $tmp, 1);
					else
						$tmp = preg_replace('/\?/', $chave, $tmp, 1);
				}

				return $tmp;
			}
		}
		else {
			$tmp = $this->query.'<br>';

			foreach ($this->valores as $n=>$chave)
				$tmp .= 'Param '.$n.': '.$chave.'<br>';

			return $tmp;
		}
	}

	function execute() {
		if (count($this->valores) != $this->nro_campos) {
			debug();
			die("BD: N&uacute;mero de campos inv&aacute;lidos com a query!");
		}

		$this->dbconn = dbOpen();
		$this->stmt = $this->dbconn->prepare($this->query);

		if ($this->dbconn->errorCode() != 0) {
			if ($this->error[$this->dbconn->errorCode()])
				die($this->error[$this->dbconn->errorCode()]);
			else
				debug('banco', $this->dbconn->errorCode(), $this->dbconn->errorInfo());
		}

		if ($this->nro_campos > 0) {
			for ($i=0;$i<count($this->valores);$i++)
				$this->stmt->bindValue($i+1, $this->valores[$i], $this->tipos[$i]);
		}

		$this->stmt->execute();

		if ($this->stmt->errorCode() != 0) {
			if ($this->error[$this->stmt->errorCode()])
				die($this->error[$this->stmt->errorCode()]);
			else
				debug('banco', $this->stmt->errorCode(), $this->stmt->errorInfo());
		}

		//if (get_class($this) == 'selectQuery')
		return $this->stmt->rowCount();
	}

	function resNroCampos() {
		return $this->result_metadata->field_count;
	}

	function resNroRows() {
		return $this->stmt->rowCount();
	}

	function resGetRow($mode = PDO::FETCH_NUM) {
		if ($row = $this->stmt->fetch($mode)) {
			foreach ($row as $key => $val) {
				if ($this->noEscape)
					$result[$key] = $val;
				else
					$result[$key] = escape_display($val);
			}
			return $result;
		}
		else
			return false;
	}

	function resGetRowAssoc() {
		return $this->resGetRow(PDO::FETCH_ASSOC);
	}

	function resMatriz() {
		$this->stmt->data_seek(0);

		$result = array();

		while ($this->stmt->fetch()) {
			foreach ($this->row as $key => $val) {
				if ($this->noEscape)
					$resultRow[$key] = $val;
				else
					$resultRow[$key] = escape_display($val);
			}
			$result[] = $resultRow;
		}

		return $result;
	}

	function resPosition($pos) {
		if ($pos >= 0 && $pos < $this->stmt->num_rows)
			$this->stmt->data_seek($pos);
	}

	function resEnd() {
		if($this->result_metadata){
			$this->result_metadata->close();
			//$this->stmt->close();
		}
		dbClose($this->dbconn);
	}
}

class transaction {
	protected $query;
	protected $nro_campos;

	protected $stmt;
	protected $result_metadata;
	protected $row;

	protected $tipos;
	protected $valores;
	protected $error;
	protected $noEscape;

	protected $dbconn;
	protected $data;

	function __construct() {
		$this->dbconn = dbOpen(10,true);
		$this->data = time();
		$this->dbconn->beginTransaction();
	}

	function novaQuery($query) {
		if (!is_string($query))
			$this->rollback("BD: Query inv&aacute;lida.");

		$this->query = $query;
		$this->nro_campos = substr_count($query,'?');

		$this->stmt = NULL;
		$this->result_metadata = NULL;
		$this->row = NULL;

		$this->tipos = array();
		$this->valores = array();
		$this->error = array();
		$this->noEscape = FALSE;
	}

	function selectQuery($tabela, $campos, $extra = '', $noEscape = FALSE) {
		$this->novaQuery("SELECT $campos FROM $tabela $extra");
		$this->noEscape = $noEscape;
	}

	function deleteQuery($tabela, $extra='') {
		$this->novaQuery("DELETE FROM $tabela $extra");
	}

	function insertQuery($tabela, $nro_campos, $auto_increment=FALSE, $ignore=FALSE) {
		$campos = '';
		if ($auto_increment)
			$campos .= "NEXTVAL('{$tabela}_seq'),";

		for ($i=0; $i<$nro_campos; $i++) {
			if ($i) $campos .= ',';
			$campos .= '?';
		}

		if ($ignore)
			$this->novaQuery("INSERT IGNORE INTO $tabela VALUES ($campos)");
		else
			$this->novaQuery("INSERT INTO $tabela VALUES ($campos)");
	}

	function insertUpdateQuery($tabela, $nro_campos, $extra) {
		$campos = '';

		for ($i=0; $i<$nro_campos; $i++) {
			if ($i) $campos .= ',';
			$campos .= '?';
		}

		$this->novaQuery("INSERT INTO $tabela VALUES ($campos) ON DUPLICATE KEY UPDATE $extra");
	}

	function updateQuery($tabela, $campos, $extra='') {
		$this->novaQuery("UPDATE $tabela SET $campos $extra");
	}

	private function campo($tipo,$valor) {
		if (count($this->valores) < $this->nro_campos) {
			$this->tipos[] = $tipo;
			$this->valores[] = $valor;
		}
		else{
			debug();
			$this->rollback("BD: N&uacute;mero de campos inv&aacute;lidos com a query!");
		}
	}

	function setError($cod, $msg) {
		$this->error[$cod] = $msg;
	}

	function inInt($valor) {
		$this->campo(PDO::PARAM_INT,$valor);
	}

	function inFloat($valor) {
		$this->campo(PDO::PARAM_STR,$valor);
	}

	function inBlob($valor) {
		$this->campo(PDO::PARAM_BOOL,$valor);
	}

	function inStr($valor) {
		$this->campo(PDO::PARAM_STR,$valor);
	}

	function inNull() {
		$ignora = count($this->valores);
		$i=0;
		$pos=0;
		while($i<=$ignora) {
			$pos = strpos($this->query,"?",$pos+1);
			$i++;
		}
		if($pos === FALSE){
			debug();
			$this->rollback("BD: N&uacute;mero de campos inv&aacute;lidos com a query!");
		}
		$this->query = substr_replace($this->query,'NULL',$pos,1);
		$this->nro_campos--;
	}

	function getQuery($onlyQuery = false) {
		if ($onlyQuery)
			return $this->query;
		else {
			$tmp = $this->query.'<br>';

			foreach ($this->valores as $n=>$chave)
				if($n!=0)
					$tmp .= 'Param '.$n.': '.$chave.'<br>';

			return $tmp;
		}
	}

	function execute() {
		if (count($this->valores) != $this->nro_campos){
			debug();
			$this->rollback("BD: N&uacute;mero de campos inv&aacute;lidos com a query!");
		}

		$this->stmt = $this->dbconn->prepare($this->query);

		if ($this->dbconn->errorCode() != 0) {
			if ($this->error[$this->dbconn->errorCode()]) {
				$this->rollback();
				die($this->error[$this->dbconn->errorCode()]);
			}
			else {
				$this->rollback();
				debug('banco', $this->dbconn->errorCode(), $this->dbconn->errorInfo());
			}
		}

		if ($this->nro_campos > 0) {
			for ($i=0;$i<count($this->valores);$i++)
				$this->stmt->bindValue($i+1, $this->valores[$i], $this->tipos[$i]);
		}

		$this->stmt->execute();

		if ($this->stmt->errorCode() != 0) {
			if ($this->error[$this->stmt->errorCode()]) {
				$this->rollback();
				die($this->error[$this->stmt->errorCode()]);
			}
			else {
				$this->rollback();
				debug('banco', $this->stmt->errorCode(), $this->stmt->errorInfo());
			}
		}

		return $this->stmt->rowCount();
	}

	function resNroCampos() {
		return $this->result_metadata->field_count;
	}

	function resNroRows() {
		return $this->stmt->rowCount();
	}

	function resPosition($pos) {
		if ($pos >= 0 && $pos < $this->stmt->num_rows)
			$this->stmt->data_seek($pos);
	}

	function resGetRow($mode = PDO::FETCH_NUM) {
		if ($row = $this->stmt->fetch($mode)) {
			foreach ($row as $key => $val) {
				if ($this->noEscape)
					$result[$key] = $val;
				else
					$result[$key] = escape_display($val);
			}
			return $result;
		}
		else
			return false;
	}

	function resGetRowAssoc() {
		return $this->resGetRow(PDO::FETCH_ASSOC);
	}

	function resMatriz() {
		$this->stmt->data_seek(0);

		$result = array();

		while ($this->stmt->fetch()) {
			foreach ($this->row as $key => $val) {
				if ($this->noEscape)
					$resultRow[$key] = $val;
				else
					$resultRow[$key] = escape_display($val);
			}
			$result[] = $resultRow;
		}

		return $result;
	}

	function resEnd() {
		$this->result_metadata->close();
		$this->stmt->close();
	}

	function rollback($mensagem = NULL){
		$this->dbconn->rollback();
		dbClose($this->dbconn);
		if($mensagem)
			die($mensagem);
	}

	function commit(){
		$this->dbconn->commit();
		dbClose($this->dbconn);
	}

}
?>