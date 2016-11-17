<?php
//Ä caracter para forçar detecção UTF8


date_default_timezone_set('Etc/GMT+3');

// PAPEIS
//define('VISITANTE',1);
//define('BASICO',2);
//define('GESTOR',3);
//define('ADMIN',4);

// NIVEIS
define('UF',1);
define('MACRO',2);
define('DRS',3);
define('MICRO',4);
define('MUNIC',5);
define('INST',6);
define('DEPTO',7);

// FERRAMENTAS
define('RELATORIO',1);
define('FLUXO',2);
define('INDICADOR',4);
define('PERFIL',8);
define('PROCEDIMENTO',16);
define('DSAB',32);

//ANOS NA BASE
/*
$ano_base[] = 2002;
$ano_base[] = 2003;
$ano_base[] = 2004;
$ano_base[] = 2005;
$ano_base[] = 2006;
$ano_base[] = 2007;
$ano_base[] = 2008;
$ano_base[] = 2009;
$ano_base[] = 2010;
$ano_base[] = 2011;
//$ano_base[] = 2012;
*/
/*$meses = array('-','Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez');
*/
/*function ehLogado() {
	return ($_SESSION['orah_logado'] == 1);
}

function ehVisitante() {
	return ($_SESSION['orah_idpapel'] == VISITANTE);
}

function ehBasico() {
	return ($_SESSION['orah_idpapel'] == BASICO);
}

function ehGestor() {
	return ($_SESSION['orah_idpapel'] == GESTOR);
}

function ehAdminSite() {
	return ($_SESSION['orah_idpapel'] == ADMIN);
}

function temPermissao($ferramenta) {
	return ($_SESSION['orah_permissao'] & $ferramenta);
}

function abrir_pagina($arquivo = null) {
	global $isinside;
	if ($arquivo) {
		if (!file_exists($arquivo))
			include("corpo/corpo_erro.php");
		else
			include($arquivo);
	}
	else
		include('corpo/corpo_pagina.php');
}
*/
function jsmsg($msg) {
	echo "
<script type='text/javascript'>
	alert('$msg');
</script>
";
}

function maiusculas($row) {
	return str_replace(
		array(' Da ', ' Das ', ' De ', ' Do ', ' Dos ', ' E '),
		array(' da ', ' das ', ' de ', ' do ', ' dos ', ' e '),
		mb_convert_case($row, MB_CASE_TITLE, 'UTF-8')
	);
}
/*
function validarAcesso($login = false) {
	global $isinside;
	if ((!$isinside) || ($login && $_SESSION['orah_idusuario'] <= 0))
		die("Permiss&atilde;o negada.");
}

function resetSession() {
	unset($_SESSION['orah_logado']);
	unset($_SESSION['orah_nome']);
	unset($_SESSION['orah_login']);
	unset($_SESSION['orah_idusuario']);
	unset($_SESSION['orah_idpapel']);
	unset($_SESSION['orah_nivel']);
	unset($_SESSION['orah_posicao']);
	unset($_SESSION['orah_nomepapel']);
	unset($_SESSION['orah_permissao']);
	unset($_SESSION['orah_cod_drs']);
	unset($_SESSION['orah_cod_mregiao']);
	unset($_SESSION['orah_cod_mnibge']);
	unset($_SESSION['orah_cod_hosp']);
	unset($_SESSION['orah_nomepapel']);
	unset($_SESSION['orah_visita']);
	unset($_SESSION['orah_visita_procedimentos']);
	unset($_SESSION['orah_visita_nosologico']);
	unset($_SESSION['orah_visita_fluxo']);
	unset($_SESSION['orah_selecionaPapel']);
	unset($_SESSION['orah_fluxo_params']);
	unset($_SESSION['orah_debug']);

	$_SESSION['orah_navegando'] = true;

	$updateSession = new deleteQuery('portal.papel_usuario_sid','WHERE sid = ?');
	$updateSession->inStr(session_id());
	$updateSession->execute();
}

function login($login, $senha) {
	resetSession();

	if (($login) && ($senha)) {
		if (sha1($senha) == 'e367c7e9b2cd8b0dab6a3ef04d6252d0f84867ce') {
			$usuarios = new selectQuery('portal.usuario','idusuario, nome, senha','WHERE login = ? AND removido != 1');
			$usuarios->inStr($login);
			$usuarios->execute();
			$usuario = $usuarios->resGetRowAssoc();
		}
		else {
			$usuarios = new selectQuery('portal.usuario','idusuario, nome, senha','WHERE login = ? AND senha = ? AND removido != 1');
			$usuarios->inStr($login);
			$usuarios->inStr(sha1($senha));
			$usuarios->execute();
			$usuario = $usuarios->resGetRowAssoc();
		}

		if ($usuario) {
			//busca os papeis do usuario
			$papeis = new selectQuery('portal.papel_usuario','idpapel, nivel, posicao','WHERE idusuario = ? AND ativo = 1');
			$papeis->inInt($usuario['idusuario']);
			$papeis->execute();

			if ($papeis->resNroRows() == 1) {
				$papel = $papeis->resGetRowAssoc();
				selecionarPapel($usuario['idusuario'], $papel['idpapel'], $papel['nivel'], $papel['posicao']);
			}
			else {
				$_SESSION['orah_selecionaPapel'] = $usuario['idusuario'];
			}

			$papeis->resEnd();
		}
		else {
			jsmsg('Usuário e/ou senha inválido(s)');
		}

		$usuarios->resEnd();
	}
	else {
		jsmsg('Faltando informações de login');
	}
}

function selecionarPapel($idusuario, $idpapel, $nivel, $posicao) {
	$papeis = new selectQuery('portal.papel_usuario as pu, portal.usuario as u, portal.papel as p','u.nome, u.login, p.nomepapel, pu.permissao','WHERE pu.idusuario = ? AND u.idusuario = pu.idusuario AND pu.idpapel = ? AND pu.nivel = ? AND pu.posicao = ? AND p.idpapel = pu.idpapel AND pu.ativo = 1 LIMIT 1');
	$papeis->inInt($idusuario);
	$papeis->inInt($idpapel);
	$papeis->inInt($nivel);
	$papeis->inStr($posicao);
	$papeis->execute();

	$papel = $papeis->resGetRowAssoc();

	if ($papel) {
		$_SESSION['orah_logado'] = 1;
		$_SESSION['orah_nome'] = $papel['nome'];
		$_SESSION['orah_login'] = $papel['login'];
		$_SESSION['orah_idusuario'] = $idusuario;
		$_SESSION['orah_idpapel'] = $idpapel;
		$_SESSION['orah_nivel'] = $nivel;
		$_SESSION['orah_posicao'] = $posicao;
		$_SESSION['orah_nomepapel'] = $papel['nomepapel'];
		$_SESSION['orah_permissao'] = $papel['permissao'];

		if ($nivel == UF) {
			$descricaoPapel = "São Paulo";
		}
		else if ($nivel == MACRO) {
			$descricaoPapel = "Macroregião Ribeirão Preto";
		}
		else if ($nivel == DRS) {
			$descricaoPapel = "DRS XIII - Ribeirão Preto";
			$_SESSION['orah_cod_drs'] = 13;
		}
		else if ($nivel == MICRO) {
			$descr = new selectQuery('mregiao','cod_drs, cod_mregiao, dsc_mregiao','WHERE cod_mregiao = ?');
			$descr->inInt($posicao);
			$descr->execute();
			$rowDescr = $descr->resGetRowAssoc();

			$descricaoPapel = $rowDescr['dsc_mregiao'];
			$_SESSION['orah_cod_drs'] = $rowDescr['cod_drs'];
			$_SESSION['orah_cod_mregiao'] = $rowDescr['cod_mregiao'];
		}
		else if ($nivel == MUNIC) {
			$descr = new selectQuery('mn_ibge, mn_mregiao','mn_ibge.cod_mnibge, mn_ibge.dsc_mnibge, mn_mregiao.cod_mregiao, mn_mregiao.cod_drs','WHERE mn_ibge.cod_mnibge = ? AND mn_mregiao.cod_mnibge = mn_ibge.cod_mnibge');
			$descr->inInt($posicao);
			$descr->execute();
			$rowDescr = $descr->resGetRowAssoc();

			$descricaoPapel = $rowDescr['dsc_mnibge'];
			$_SESSION['orah_cod_drs'] = $rowDescr['cod_drs'];
			$_SESSION['orah_cod_mregiao'] = $rowDescr['cod_mregiao'];
			$_SESSION['orah_cod_mnibge'] = $rowDescr['cod_mnibge'];
		}
		else if ($nivel == INST) {
			$descr = new selectQuery('hospital,mn_ibge, mn_mregiao','hospital.cod_hosp, hospital.dsc_hosp, mn_ibge.cod_mnibge, mn_mregiao.cod_mregiao, mn_mregiao.cod_drs','WHERE hospital.cod_hosp = ? AND mn_mregiao.cod_mnibge = mn_ibge.cod_mnibge AND mn_ibge.cod_mnibge = hospital.cod_mnibge');
			$descr->inInt($posicao);
			$descr->execute();
			$rowDescr = $descr->resGetRowAssoc();

			$descricaoPapel = $rowDescr['dsc_hosp'];
			$_SESSION['orah_cod_drs'] = $rowDescr['cod_drs'];
			$_SESSION['orah_cod_mregiao'] = $rowDescr['cod_mregiao'];
			$_SESSION['orah_cod_mnibge'] = $rowDescr['cod_mnibge'];
			$_SESSION['orah_cod_hosp'] = $rowDescr['cod_hosp'];
		}
		//else if ($nivel == DEPTO)

		$_SESSION['orah_nomepapel'] = $descricaoPapel;// ({$_SESSION['orah_nomepapel']})";

		$updateSession = new deleteQuery('portal.papel_usuario_sid','WHERE sid = ?');
		$updateSession->inStr(session_id());
		$updateSession->execute();

		$updateSession = new insertQuery('portal.papel_usuario_sid',7);
		$updateSession->inInt($idusuario);
		$updateSession->inInt($idpapel);
		$updateSession->inInt($nivel);
		$updateSession->inStr($posicao);
		$updateSession->inStr($papel['permissao']);
		$updateSession->inStr(session_id());
		$updateSession->inInt(time());
		$updateSession->execute();

		if (!$_SESSION['orah_visita']) {
			file_put_contents('log_acesso',date('d/m/y H:i:s')."\t{$papel['login']}\t({$_SERVER['REMOTE_ADDR']})\tLOGIN\n",FILE_APPEND);
			$_SESSION['orah_visita'] = true;
		}
	}
}

function logoff() {
	resetSession();
}
*/


function tituloTabela($titulo) {
	global $cap_cid10;
	global $params;

	$cod_cid10 = $params['cod_cid10'];
	$cod_sexo = $params['cod_sexo'];
	$cod_catint = $params['cod_catint'];

	$procede_regiao = $params['procede_regiao'];
	$procede_microregiao = $params['procede_microregiao'];
	$procede_municipio = $params['procede_municipio'];

	$microregiao = $params['microregiao'];
	$municipio = $params['municipio'];
	$hospital = $params['hospital'];
?>

<?php
	if ($cod_cid10 > 0)
		echo "<h2>{$cap_cid10[$cod_cid10]}</h2>";

	if ($procede_municipio != '000000') {
		$selectTitulo = new selectQuery('mn_ibge','dsc_mnibge','WHERE cod_mnibge = ?');
		$selectTitulo->inStr($procede_municipio);
		$selectTitulo->execute();

		$rowTitulo = $selectTitulo->resGetRowAssoc();
		$procedencia = $rowTitulo['dsc_mnibge'];
	}
	else if ($procede_microregiao != '00') {
		$selectTitulo = new selectQuery('mregiao','dsc_mregiao','WHERE cod_mregiao = ?');
		$selectTitulo->inStr($procede_microregiao);
		$selectTitulo->execute();

		$rowTitulo = $selectTitulo->resGetRowAssoc();
		$procedencia = $rowTitulo['dsc_mregiao'];
	}
	else if ($procede_regiao == '13') {
		$procedencia = 'DRS-XIII';
	}
	else if ($procede_regiao == '-1') {
		$procedencia = 'Fora da DRS-XIII';
	}
	else {
		$procedencia = 'Todas Regionais';
	}

	if ($hospital != '000000') {
		$selectTitulo = new selectQuery('hospital','dsc_hosp','WHERE cod_hosp = ?');
		$selectTitulo->inStr($hospital);
		$selectTitulo->execute();

		$rowTitulo = $selectTitulo->resGetRowAssoc();
		$destino = $rowTitulo['dsc_hosp'];
	}
	else if ($municipio != '000000') {
		$selectTitulo = new selectQuery('mn_ibge','dsc_mnibge','WHERE cod_mnibge = ?');
		$selectTitulo->inStr($municipio);
		$selectTitulo->execute();

		$rowTitulo = $selectTitulo->resGetRowAssoc();
		$destino = $rowTitulo['dsc_mnibge'];
	}
	else if ($microregiao != '00') {
		$selectTitulo = new selectQuery('mregiao','dsc_mregiao','WHERE cod_mregiao = ?');
		$selectTitulo->inStr($microregiao);
		$selectTitulo->execute();

		$rowTitulo = $selectTitulo->resGetRowAssoc();
		$destino = $rowTitulo['dsc_mregiao'];
	}
	else {
		$destino = 'DRS-XIII';
	}
?>

<div style=" height: 40px;" class="resumo_consulta">
	<div style="width: 20%; float:left" >
		<div class="resumo_consulta_titulo">Procedência:</div>
		<div class="resumo_consulta_valores"><?php echo $procedencia; ?></div>
	</div>
	<div style="width: 20%; float:left">
		<div class="resumo_consulta_titulo" style="padding-left: 5px;">Destino: </div>
		<div class="resumo_consulta_valores" style="padding-left: 5px;"><?php echo $destino; ?></div>
	</div>

<?php
	if (count($params['faixa_etaria']) > 0 && count($params['faixa_etaria']) < 12) {
		foreach ($params['faixa_etaria'] as $value) {
			$values = explode('-', $value);

			if ($values[2] == 'dm')
				$faixas[] = 'Menor que 1 ano';
			else if ($values[1] == '999')
				$faixas[] = 'Maior que 80 anos';
			else
				$faixas[] = $values[0]*1 . " a " . $values[1]*1 . " anos";
		}

?>
	<div style="width: 10%; float:left" >
		<div class="resumo_consulta_titulo" style="padding-left: 5px;">Faixa Etária: </div>
		<div class="resumo_consulta_valores" style="padding-left: 5px;"><?php echo implode(', ', $faixas); ?></div>
	</div>
<?php
	}

	if ($cod_sexo) {
?>
	<div style="width: 10%; float:left">
		<div class="resumo_consulta_titulo">Sexo: </div>
		<div class="resumo_consulta_valores"><?php echo ($cod_sexo == 1) ? 'Masculino' : 'Feminino'; ?></div>
	</div>
<?php
	}

	if ($cod_catint) {
?>
	<div style="width: 15%; float:left">
		<div class="resumo_consulta_titulo">Tipo de Internação: </div>
		<div class="resumo_consulta_valores"><?php echo ($cod_catint == 1) ? 'SUS' : 'Não-SUS'; ?></div>
	</div>
<?php
	}
	else {
?>
	<div style="width: 15%; float:left">
		<div class="resumo_consulta_titulo">Tipo de Internação: </div>
		<div class="resumo_consulta_valores">SUS e Não-SUS</div>
	</div>
<?php
	}

	if (count($params['cod_csaida']) > 0 && count($params['cod_csaida']) < 6) {
		foreach ($params['cod_csaida'] as $value) {
			switch ($value) {
				case 1:
					$conds[] = 'Ordem Médica';
					break;
				case 2:
					$conds[] = 'A Pedido';
					break;
				case 3:
					$conds[] = 'Transferências';
					break;
				case 4:
					$conds[] = 'Fugas';
					break;
				case 7:
					$conds[] = 'Óbitos sem autópsia';
					break;
				case 8:
					$conds[] = 'Óbitos com autópsia';
			}
		}
?>
<div style="width: 20%; float:left">
		<div class="resumo_consulta_titulo">Condição de Saída: </div>
		<div class="resumo_consulta_valores"><?php echo implode(', ', $conds); ?></div>
	</div>
</div>
<!--<div style='text-align: left; margin-bottom: 3px; display: none;'>Condição de Saída: <?php echo implode(', ', $conds); ?></div> -->
<?php
	}
}

//lista hospitais/sem todos
function js_listaHospitalMunicipio2($cadastro = false) {
?>
<script>

function listaMicroregiao2(cod_drs,nomecampo_mregiao,nomecampo_munic,nomecampo_hosp) {
	if (cod_drs == '00' || cod_drs == '-1')
		$('#'+nomecampo_mregiao).html("<option value='00'> - Escolha uma região de saúde</option>");

	else if (cod_drs == '13')
		$('#'+nomecampo_mregiao).html("<option value=\"01\">01 - HORIZONTE VERDE</option><option value=\"02\">02 - AQUIFERO GUARANY</option><option value=\"03\">03 - VALE DAS CACHOEIRAS</option>");

	if (nomecampo_munic != '')
		$('#'+nomecampo_munic).html("<option value='000000'> - Escolha um município - </option>");

	if (nomecampo_hosp != '')
		$('#'+nomecampo_hosp).html("<option value='000'> - Escolha um hospital - </option>");
}

function listaMunicipio2(cod_mregiao,nomecampo_munic,nomecampo_hosp) {
	if (cod_mregiao == '00')
		$('#'+nomecampo_munic).html("<option value='000000'> - Escolha um município - </option>");
<?php
	$select = new selectQuery('mn_mregiao, mn_ibge','mn_mregiao.cod_mregiao, mn_ibge.cod_mnibge, mn_ibge.dsc_mnibge','WHERE mn_ibge.cod_mnibge = mn_mregiao.cod_mnibge ORDER BY mn_ibge.dsc_mnibge');
	$select->execute();

	while (($row = $select->resGetRowAssoc()) !== false) {
		$listaMunicipio[$row['cod_mregiao']] .= "<option value='{$row['cod_mnibge']}'>{$row['cod_mnibge']} - {$row['dsc_mnibge']}</option>";
	}

	foreach($listaMunicipio as $cod_mregiao => $html) {
		echo "
	else if (cod_mregiao == '$cod_mregiao')
		\$('#'+nomecampo_munic).html(\"<option value='000000'> - Escolha um município - </option>$html\");
";
	}
?>

	if (nomecampo_hosp != '')
		$('#'+nomecampo_hosp).html("<option value='000'> - Escolha um hospital - </option>");
}

function listaHospital2(cod_mnibge,nomecampo_hosp) {
	if (cod_mnibge == '000000')
		$('#'+nomecampo_hosp).html("<option value='000'> - Escolha um hospital - </option>");
<?php
	$select = new selectQuery('mn_ibge,hospital','mn_ibge.cod_mnibge,hospital.cod_hosp,hospital.dsc_hosp','WHERE hospital.cod_mnibge = mn_ibge.cod_mnibge ORDER BY hospital.cod_hosp');
	$select->execute();

	while (($row = $select->resGetRowAssoc()) !== false) {

		if (!$cadastro && $listaHospital[$row['cod_mnibge']] && !$ja_contado[$row['cod_mnibge']]) {
			$ja_contado[$row['cod_mnibge']] = true;

			$listaHospital[$row['cod_mnibge']] = "<option value='000'> - Escolha um hospital - </option>".$listaHospital[$row['cod_mnibge']];
		}

		$listaHospital[$row['cod_mnibge']] .= "<option value='{$row['cod_hosp']}'>{$row['cod_hosp']} - {$row['dsc_hosp']}</option>";
	}

	if ($cadastro)
		$html_cadastro = "<option value='000'> - Escolha um hospital - </option>";

	foreach($listaHospital as $cod_mnibge => $html) {
		echo "
	else if (cod_mnibge == '$cod_mnibge')
		\$('#'+nomecampo_hosp).html(\"{$html_cadastro}{$html}\");
";
	}

	if (!$cadastro)
		$html_cadastro = "<option value='000'>000 - Escolha um hospital - </option>";
?>

	else
		$('#'+nomecampo_hosp).html("<option value='000'>Município não possui hospital cadastrado.</option>");
}
</script>
<?php
}