<?php

namespace App\Controller;

use Cake\Network\Request;


class FerramentasController extends AppController {

	public function fluxoaltas() {

		//Retorna string com o nome do municipio
		function nomeMunicipio($municipioNro, $micreg){
			$mun = 0;
			if($micreg == 01){
				if($municipioNro == 350560)
					$mun = 'Barrinha';
				if($municipioNro == 351460)
					$mun = 'Dumont';
				if($municipioNro == 351860)
					$mun = 'Guariba';
				if($municipioNro == 352430)
					$mun = 'Jaboticabal';
				if($municipioNro == 353130)
					$municipioNro = 'Monte Alto';
				if($municipioNro == 353950)
					$municipioNro = 'Pitangueiras';
				if($municipioNro == 354020)
					$mun = 'Pontal';
				if($municipioNro == 354090)
					$mun = 'Pradopolis';
				if($municipioNro == 355170)
					$mun = 'Sertãozinho';
				return $mun;
			}
			if($micreg == 02){
				if($municipioNro == 351310)
					$mun = 'Cravinhos';
				if($municipioNro == 351885)
					$mun = 'Guatapara';
				if($municipioNro == 352510)
					$mun = 'Jardinopolis';
				if($municipioNro == 352760)
					$mun = 'Luis Antônio';
				if($municipioNro == 354340)
					$mun = 'Ribeirão Preto';
				if($municipioNro == 354750)
					$mun = 'Santa Rita do Passa Quatro';
				if($municipioNro == 354760)
					$mun = 'Santa Rosa de Viterbo';
				if($municipioNro == 355090)
					$mun = 'São Simão';
				if($municipioNro == 355140)
					$mun = 'Serra Azul';
				if($municipioNro == 355150)
					$mun = 'Serrana';
				return $mun;
			}
			if($micreg == 03){
				if($municipioNro == 350100)
					$mun = 'Altinópolis';
				if($municipioNro == 350590)
					$mun = 'Batatais';
				if($municipioNro == 350780)
					$mun = 'Brodowski';
				if($municipioNro == 350940)
					$mun = 'Cajuru';
				if($municipioNro == 351090)
					$mun = 'Cássia dos Coqueiros';
				if($municipioNro == 354625)
					$mun = 'Santa Cruz da Esperança';
				if($municipioNro == 354790)
					$mun = 'Santo Antônio da Alegria';
				return $mun;

			}
			
		}

		//retorna array com os municipios
		function municipiosMregiao($micreg){
			$arrayMunicipios = 0;
			if($micreg == 0){
				$arrayMunicipios = array("Barrinha", "Dumont", "Guariba", "Jaboticabal", "Monte Alto", "Pitangueiras", "Pontal", "Pradopolis", "Sertãozinho", "Cravinhos", "Guatapara", "Jardinopolis", "Luis Antônio", "Ribeirão Preto", "Santa Rita do Passa Quatro", "Santa Rosa de Viterbo", "São Simão", "Serra Azul", "Serrana", "Altinópolis", "Batatais", "Brodowski", "Cajuru", "Cássia dos Coqueiros", "Santa Cruz da Esperança", "Santo Antônio da Alegria");
				return $arrayMunicipios;

			}
			if($micreg == 01){
				$arrayMunicipios = array("Barrinha", "Dumont", "Guariba", "Jaboticabal", "Monte Alto", "Pitangueiras", "Pontal", "Pradopolis", "Sertãozinho");
				return $arrayMunicipios;
			}

			if($micreg == 02){
				$arrayMunicipios = array("Cravinhos", "Guatapara", "Jardinopolis", "Luis Antônio", "Ribeirão Preto", "Santa Rita do Passa Quatro", "Santa Rosa de Viterbo", "São Simão", "Serra Azul", "Serrana");
				return $arrayMunicipios;
			}

			if($micreg == 03){
				$arrayMunicipios = array("Altinópolis", "Batatais", "Brodowski", "Cajuru", "Cássia dos Coqueiros", "Santa Cruz da Esperança", "Santo Antônio da Alegria");
				return $arrayMunicipios;
			}

		}

		//retorna condição de saída do paciente
		function condSaidaStr($nro){
			if($nro == 1){
				$strcsaida = 'Clínica';
				return ($strcsaida);
			}
			if($nro == 2){
				$strcsaida = 'A Pedido';
				return ($strcsaida);
			}
			if($nro == 3){
				$strcsaida = 'Administrativa';
				return ($strcsaida);
			}
			if($nro == 4){
				$strcsaida = 'Evasão';
				return ($strcsaida);
			}
			if($nro == 5){
				$strcsaida = 'Óbito';
				return ($strcsaida);
			}
			if($nro == 6){
				$strcsaida = 'Transferência';
				return ($strcsaida);
			}
			if($nro == 7){
				$strcsaida = 'Transferência da UCP';
				return ($strcsaida);
			}
		}

		function codIBGEMun($mun){
			$mun2 = 0;
			if($mun == 'Barrinha'){
				$mun = 350560;
				return $mun2;
			}
			if($mun == 'Dumont'){
				$mun2 = 351460;
				return $mun2;
			}
			if($mun == 'Guariba'){
				$mun2 = 351860;
				return $mun2;
			}
			if($mun == 'Jaboticabal'){
				$mun2 = 352430;
				return $mun2;
			}
			if($mun == 'Monte Alto'){
				$mun2 = 353130;
				return $mun2;
			}
			if($mun == 'Pitangueiras'){
				$mun2 = 353950;
				return $mun2;
			}
			if($mun == 'Pontal'){
				$mun2 = 354020;
				return $mun2;
			}
			if($mun == 'Pradopolis'){
				$mun2 = 354090;
				return $mun2;
			}
			if($mun == 'Sertãozinho'){
				$mun2 = 355170;
				return $mun2;
			}
			if($mun == 'Cravinhos'){
				$mun2 = 351310;
				return $mun2;
			}
			if($mun == 'Guatapara'){
				$mun2 = 351885;
				return $mun2;
			}
			if($mun == 'Jardinopolis'){
				$mun2 = 352510;
				return $mun2;
			}
			if($mun == 'Luis Antônio'){
				$mun2 = 352760;
				return $mun2;
			}
			if($mun == 'Ribeirão Preto'){
				$mun2 = 354340;
				return $mun2;
			}
			if($mun == 'Santa Rita do Passa Quatro'){
				$mun2 = 354750;
				return $mun2;
			}
			if($mun == 'Santa Rosa de Viterbo'){
				$mun2 = 354760;
				return $mun2;
			}
			if($mun == 'São Simão'){
				$mun2 = 355090;
				return $mun2;
			}
			if($mun == 'Serra Azul'){
				$mun2 = 355140;
				return $mun2;
			}
			if($mun == 'Serrana'){
				$mun2 = 355150;
				return $mun2;
			}
			if($mun == 'Altinópolis'){
				$mun2 = 350100;
				return $mun2;
			}
			if($mun == 'Batatais'){
				$mun2 = 350590;
				return $mun2;
			}
			if($mun == 'Brodowski'){
				$mun2 = 350780;
				return $mun2;
			}
			if($mun == 'Cajuru'){
				$mun2 = 350940;
				return $mun2;
			}
			if($mun == 'Cássia dos Coqueiros'){
				$mun2 = 351090;
				return $mun2;
			}
			if($mun == 'Santa Cruz da Esperança'){
				$mun2 = 354625;
				return $mun2;
			}
			if($mun == 'Santo Antônio da Alegria'){
				$mun2 = 354790;
				return $mun2;
			}
		}

		function codIBGEHosp($hosp){
			if($hosp == 38 || $hosp == 43 || $hosp == 44 || $hosp == 45 || $hosp == 46 || $hosp == 48 || $hosp == 49 || $hosp == 50 || $hosp == 51 || $hosp == 56 || $hosp == 58 || $hosp == 134 || $hosp == 150 || $hosp == 151 || $hosp == 187){
				$ibge = 354340;
				return $ibge;
			}

			if($hosp == 53 || $hosp == 54 || $hosp == 55 || $hosp == 57 || $hosp == 182){
				$ibge = 354750;
				return $ibge;
			}
		}

		function arrayHospIBGE(){
			$hospIBGE[0][0] = 38;
			$hospIBGE[0][1] = 354340;
			$hospIBGE[1][0] = 43;
			$hospIBGE[2][1] = 354340;
			$hospIBGE[3][0] = 44;
			$hospIBGE[4][1] = 354340;
			$hospIBGE[5][0] = 45;
			$hospIBGE[6][1] = 354340;
			$hospIBGE[7][0] = 46;
			$hospIBGE[8][1] = 354340;
			$hospIBGE[9][0] = 48;
			$hospIBGE[10][1] = 354340;
			$hospIBGE[11][0] = 49;
			$hospIBGE[12][1] = 354340;
			$hospIBGE[13][0] = 50;
			$hospIBGE[14][1] = 354340;
			$hospIBGE[15][0] = 51;
			$hospIBGE[16][1] = 354340;
			$hospIBGE[17][0] = 56;
			$hospIBGE[18][1] = 354340;
			$hospIBGE[19][0] = 58;
			$hospIBGE[20][1] = 354340;
			$hospIBGE[21][0] = 134;
			$hospIBGE[22][1] = 354340;
			$hospIBGE[23][0] = 150;
			$hospIBGE[24][1] = 354340;
			$hospIBGE[25][0] = 151;
			$hospIBGE[26][1] = 354340;
			$hospIBGE[27][0] = 187;
			$hospIBGE[28][1] = 354340;
			$hospIBGE[29][0] = 53;
			$hospIBGE[30][1] = 354340;
			$hospIBGE[31][0] = 54;
			$hospIBGE[32][1] = 354340;
			$hospIBGE[33][0] = 55;
			$hospIBGE[34][1] = 354340;
			$hospIBGE[35][0] = 57;
			$hospIBGE[36][1] = 354340;
			$hospIBGE[37][0] = 182;
			$hospIBGE[38][1] = 354340;

			return $hospIBGE;

		}

		//array com os dados do form (fluxoaltas.ctp)
		$data = $this->request->data;
		print_r($data);

		//carrega controllers que vão ser usados
		$this->loadModel('Pessoas');
		$this->loadModel('Internacoes');
		$this->loadModel('Regulacoes');
		$this->loadModel('Unidades');
		$this->loadModel('Cidade');

		// inicia variaveis para busca
		//ano, mes, dados da origem do paciente
		$mes = 0;
		$ano = 0;
		$procede_regiao = 0;
		$procede_microregiao = 0;
		$procede_municipio = 0;
		//dados do destino do paciente
		$regiao = 0;
		$microregiao = 0;
		$municipio = 0;
		$hospital = 0;
		//codigo do CID10
		$cod_cid10 = 0;
		//faixa de idade do paciente
		$faixa_etaria = 0;
		//sexo
		$cod_sexo = 0;
		//condição de saida - array
		$cod_csaida = 00;
		//codigo output gera mapa
		$cod_output = 0;
		//variaveis municipio string
		$procede_municipiostr = 0;
		$municipiostr = 0;
		//lista municipios procedencia/destino
		$municipiosPrArr = 0;
		$municipiosDestArr = 0;
		//string condição saida
		$cond_saida = 0;



		//preenche variaveis com os dados do array data
		if(!empty($data)){
			foreach ($data as $key => $value) {
				if($key == 'mes')
					$mes = $value;
				
				if($key == 'ano')
					$ano = $value;

				if($key == 'procede_regiao')
					$procede_regiao = $value;

				if($key == "procede_microregiao")
					$procede_microregiao = $value;

				if($key == 'procede_municipio')
					$procede_municipio = $value;

				if($key == 'regiao')
					$regiao = $value;

				if($key == 'microregiao')
					$microregiao = $value;

				if($key == 'municipio')
					$municipio = $value;

				if($key == 'hospital')
					$hospital = $value;

				if($key == 'cod_cid10')
					$cod_cid10 = $value;

				if($key == 'faixa_etaria')
					$faixa_etaria = $value;
				
				if($key == 'cod_sexo')
					$cod_sexo = $value;

				if($key == 'cod_csaida')
					$cod_csaida = $value[0];

				if($key == 'cod_output')
					$cod_output = $value;
			}
			   
		}


		//define nome municipio
	   		 if($procede_municipio != 0)
	   		 	$procede_municipiostr = nomeMunicipio($procede_municipio, $procede_microregiao);
	   		 if($municipio != 0)
	   		 	$municipiostr = nomeMunicipio($municipio, $microregiao);
	   	//retorna array com municipios da região
	   		 if($procede_municipio == 0)
	   		 	$municipiosPrArr = municipiosMregiao($procede_microregiao);
	   		 if($municipio == 0)
	   			 $municipiosDestArr = municipiosMregiao($microregiao);
	   	//retorna string condição de saída
	   		if ($cod_csaida != 0) 
	   			$cond_saida = condSaidaStr($cod_csaida);
	   		

	   	//retorna dados de tabela com ID
			//$pessoa = $this->Pessoas->get('01');

/*    	//retorna todos registros da tabela pessoa (object)
	        //$pessoas = $this->Pessoas->find();
	        // Retorne todos os artigos
	        // Até este ponto, nada acontece.
	        //$query = $pessoas->find('all'); 
	        // query são retornadas em forma de array
	        //$pessoas = $query->toArray();
	        // Conta query
	       // $number = $query->count();
	    	//print_r($number);
	        //Retorna tipo da variavel
	        //$teste = gettype($pessoas);
	    	//print_r($teste);

	    
	    //testes
	  	print_r($pessoas[4000]['cod_pessoa']);
			?><br /><?php 

	  		$pessoas_arr[0] = $pessoas[3999];
	  		$pessoas_arr[1] = $pessoas[4000];

	   		print_r($pessoas_arr[0]['tipo_pessoa']);
	   		?><br /><?php
	   		print_r($pessoas_arr[1]['cod_pessoa']);
	 		

 		//retorna todos dados da tabela internacoes
	   		 $internacoes = $this->Internacoes->find();
	   		 $query = $internacoes->find('all');
	   		 $internacoes = $query->toArray(); 

	   	//retorna todos dados da tabela regulacoes
	   		 $regulacoes = $this->Regulacoes->find();
	   		 $query = $regulacoes->find('all');
	   		 $regulacoes = $query->toArray(); 



	   //Exemplo de consulta funcional que retorna uma query e imprime valores de cada linha

	   	$codigoteste = 0;
	    $pessoas = $this->Pessoas->find();
	    if($codigoteste != 0){
		   	$query = $pessoas->where(['cod_pessoa' => 1050])->select(['cod_pessoa','data_nascimento']);
	    }else{
		   	$query = $pessoas->where(['cod_pessoa <' => 1055])->select(['cod_pessoa','data_nascimento']);
	    }
	   	$pessoas = $query->toArray();

	   	for ($i=0; $i < count($pessoas) ; $i++) { 
	   		$teste[$i][0] = $pessoas[$i]['cod_pessoa'];
	   		$teste[$i][1] = $pessoas[$i]['data_nascimento'];
	   	}
	   	$pessoas = 0;

	   		//imprime
	  	for ($i=0; $i < count($pessoas); $i++) { 
		   		# code...
		   		?><br /><?php
		   		print_r($teste[$i]);
		   		?><br /><?php
	   		}
		
	   	
	   		//works
	  		$ano = 12;
	   		$mes = 02;

	   	 	if($mes != 0 || $ano != 0){
				if($mes != 0 && $ano != 0){
					
					for ($i=0; $i < count($teste) ; $i++) { 
						if (!is_null($teste[$i][1])) {
							$data_inter = $teste[$i][1];
							$data_inter2 = explode(",", $data_inter);
							$data_inter = explode("/", $data_inter2[0]);
							list($m, $d, $a) = $data_inter;
							print_r($data_inter);
							?><br /><?php
							//retorna vetor [0]mes [1]dia [2]ano
						}
						

		   			}
		   		}	
			}
*/
		//arrays usados nas buscas
		   	$regulacoesFiltro = null;
			$internacoesFiltro = null;
			$pessoasFiltro = null;
			$regulacoesDestino = null;
			$flag = 0;
			$result = null;
			$pessoasFiltro2 = null;
			$result = null;
			$result2 = null;
			


		if($cod_output != 0){	
		   	 

			//Recupera campos desejados da tabela Regulacoes pela unidade destino
			   	$regulacoes = $this->Regulacoes->find();
			   	if($hospital != 0){
				   	$query = $regulacoes->where(['cod_unidade_destino' => $hospital])->select(['cod_regulacao','cod_paciente','cod_unidade_destino']);
			   	}else{
			   		$query = $regulacoes->select(['cod_regulacao','cod_paciente','cod_unidade_destino']);
			   	}
			   	$regulacoes = $query->toArray();

			   	//Cria vetor com os campos recuperados
			   	for ($i=0; $i < count($regulacoes) ; $i++) { 
			   		$regulacoesFiltro[$i][0] = $regulacoes[$i]['cod_regulacao'];
			   		$regulacoesFiltro[$i][1] = $regulacoes[$i]['cod_paciente'];
			   		$regulacoesFiltro[$i][2] = $regulacoes[$i]['cod_unidade_destino'];
			   	}
			   	$regulacoes = null;
			   	if(is_null($regulacoesFiltro))
			   		$flag = 1;

		   	//Recupera campos desejados da tabela Internacoes pela condição de saída
			   	$internacoes = $this->Internacoes->find();
			   	if($cond_saida != 0){
				   	$query = $internacoes
				   		     ->where(['tipo_alta' => $cond_saida])
				   		     ->select(['cod_regulacao','data_alta','tipo_alta']);
			   	}else
			   		$query = $internacoes
			   			     ->select(['cod_regulacao','data_alta','tipo_alta']);

			   	$internacoes = $query->toArray();


			   	//Cria vetor com os campos recuperados
			   	for ($i=0; $i < count($internacoes) ; $i++) { 
			   		$internacoesFiltro[$i][0] = $internacoes[$i]['cod_regulacao'];
			   		$internacoesFiltro[$i][1] = $internacoes[$i]['data_alta'];
			   		$internacoesFiltro[$i][2] = $internacoes[$i]['tipo_alta'];
			   	}
			   	$internacoes = null;
			   	if(is_null($internacoesFiltro))
			   		$flag = 1;
			
			// Filtra por ano e mês no array internacoesFiltro (data de alta)
			if(($mes != 0 || $ano != 0) && !is_null($internacoesFiltro)){
				$aux = 0;
				for ($i=0; $i < count($internacoesFiltro) ; $i++) { 
							
					if (!is_null($internacoesFiltro[$i][1])) {
						$data_inter = $internacoesFiltro[$i][1];
						$data_inter2 = explode(",", $data_inter);
						$data_inter = explode("/", $data_inter2[0]);
						list($m, $d, $a) = $data_inter;
						//retorna vetor [0]mes [1]dia [2]ano

						if(($mes && $ano) != 0 && $mes == $data_inter[0] && $ano == $data_inter[2]){
							$internacoesFiltro2[$aux] = $internacoesFiltro[$i];
							$aux++;
						}

						if($mes == 0 && $ano != 0 && $ano == $data_inter[2]){
							$internacoesFiltro2[$aux] = $internacoesFiltro[$i];
							$aux++;
						}
						if($mes != 0 && $ano == 0 && $mes == $data_inter[0]){
							$internacoesFiltro2[$aux] = $internacoesFiltro[$i];
							$aux++;
						}
						
					}
							
			   	}
			   	$internacoesFiltro = $internacoesFiltro2; 
			   	$internacoesFiltro2 = 0;
			}
		
			//Filtra paciente por municipio da tabela pessoa
			$pessoas = $this->Pessoas->find();
			//Filtra pessoas das 3 regiões de saúde
			if($procede_microregiao == 0){
				$query = $pessoas
					  ->where(['municipio' => $municipiosPrArr[0]])->orWhere(['municipio' => $municipiosPrArr[1]])
				      ->orWhere(['municipio' => $municipiosPrArr[2]])->orWhere(['municipio' => $municipiosPrArr[3]])
					  ->orWhere(['municipio' => $municipiosPrArr[4]])->orWhere(['municipio' => $municipiosPrArr[5]])
					  ->orWhere(['municipio' => $municipiosPrArr[6]])->orWhere(['municipio' => $municipiosPrArr[7]])
					  ->orWhere(['municipio' => $municipiosPrArr[8]])->orWhere(['municipio' => $municipiosPrArr[9]])
					  ->orWhere(['municipio' => $municipiosPrArr[10]])->orWhere(['municipio' => $municipiosPrArr[11]])
					  ->orWhere(['municipio' => $municipiosPrArr[12]])->orWhere(['municipio' => $municipiosPrArr[13]])
					  ->orWhere(['municipio' => $municipiosPrArr[14]])->orWhere(['municipio' => $municipiosPrArr[15]])
					  ->orWhere(['municipio' => $municipiosPrArr[16]])->orWhere(['municipio' => $municipiosPrArr[17]])
					  ->orWhere(['municipio' => $municipiosPrArr[18]])->orWhere(['municipio' => $municipiosPrArr[19]])
					  ->orWhere(['municipio' => $municipiosPrArr[20]])->orWhere(['municipio' => $municipiosPrArr[21]])
					  ->orWhere(['municipio' => $municipiosPrArr[22]])->orWhere(['municipio' => $municipiosPrArr[23]])
					  ->orWhere(['municipio' => $municipiosPrArr[24]])->orWhere(['municipio' => $municipiosPrArr[25]])
					  ->select(['cod_pessoa','sexo','data_nascimento','municipio']);
			}
			//Filtra pessoas do horizonte verde
			if($procede_microregiao == 01){
			   		$query = $pessoas
					  ->where(['municipio' => $municipiosPrArr[0]])->orWhere(['municipio' => $municipiosPrArr[1]])
				      ->orWhere(['municipio' => $municipiosPrArr[2]])->orWhere(['municipio' => $municipiosPrArr[3]])
					  ->orWhere(['municipio' => $municipiosPrArr[4]])->orWhere(['municipio' => $municipiosPrArr[5]])
					  ->orWhere(['municipio' => $municipiosPrArr[6]])->orWhere(['municipio' => $municipiosPrArr[7]])
					  ->orWhere(['municipio' => $municipiosPrArr[8]])
			   		  ->select(['cod_pessoa','sexo','data_nascimento','municipio']);
			}
			//Filtra pessoas do aquifero guarany
			if($procede_microregiao == 02){
			   		$query = $pessoas
					  ->where(['municipio' => $municipiosPrArr[0]])->orWhere(['municipio' => $municipiosPrArr[1]])
				      ->orWhere(['municipio' => $municipiosPrArr[2]])->orWhere(['municipio' => $municipiosPrArr[3]])
					  ->orWhere(['municipio' => $municipiosPrArr[4]])->orWhere(['municipio' => $municipiosPrArr[5]])
					  ->orWhere(['municipio' => $municipiosPrArr[6]])->orWhere(['municipio' => $municipiosPrArr[7]])
					  ->orWhere(['municipio' => $municipiosPrArr[8]])->orWhere(['municipio' => $municipiosPrArr[9]])
			   		  ->select(['cod_pessoa','sexo','data_nascimento','municipio']);
			}
			//Filtra pessoas do horizonte verde
			if($procede_microregiao == 03){
		  	 		$query = $pessoas
					  ->where(['municipio' => $municipiosPrArr[0]])->orWhere(['municipio' => $municipiosPrArr[1]])
				      ->orWhere(['municipio' => $municipiosPrArr[2]])->orWhere(['municipio' => $municipiosPrArr[3]])
					  ->orWhere(['municipio' => $municipiosPrArr[4]])->orWhere(['municipio' => $municipiosPrArr[5]])
					  ->orWhere(['municipio' => $municipiosPrArr[6]])
			   		  ->select(['cod_pessoa','sexo','data_nascimento','municipio']);
			}
			//Filtra pessoas por cidade
			if($procede_microregiao != 0 && $procede_municipio != 0){
					$query = $pessoas
					  ->orWhere(['municipio' => $procede_municipiostr])
					  ->select(['cod_pessoa','sexo','data_nascimento','municipio']);
			}

		   	$pessoas = $query->toArray();
		   	
			//Cria vetor com os campos recuperados
			for ($i=0; $i < count($pessoas) ; $i++){
			   		$pessoasFiltro[$i][0] = $pessoas[$i]['cod_pessoa'];
			   		$pessoasFiltro[$i][1] = $pessoas[$i]['sexo'];
			   		$pessoasFiltro[$i][2] = $pessoas[$i]['data_nascimento'];
			   		$pessoasFiltro[$i][3] = $pessoas[$i]['municipio'];		   	
			}
			if(is_null($pessoasFiltro))
				$flag = 1;

		   	$pessoas = null;

		   	//Filtra por idade os pacientes do array pessoasFiltro
		  	if ($faixa_etaria != 0 && !is_null($pessoasFiltro)) {
			 	$aux = 0;
			 	for ($i=0; $i < count($pessoasFiltro) ; $i++) { 
							
					if (!is_null($pessoasFiltro[$i][2])) {
						//pega data de nascimento de pessoa
						$data_nasc = $pessoasFiltro[$i][2];
						$data_nasc2 = explode("-", $data_nasc);
						$data_nasc = explode("/", $data_nasc2[0]);
						//retorna vetor [0]mes [1]dia [2]ano
						list($m, $d, $a) = $data_nasc;

						//pega faixa etária
						$auxiliar = $faixa_etaria;
						// idadeMinMax é um Array que imprime ( [0] => min [1] => max [2] => a )
						$idadeMinMax = explode("-", $auxiliar[0]);

						//retorna ano atual em int
						$today = (int)date("Y");

						if(($today - $data_nasc[2]) >= $idadeMinMax[0] && ($today - $data_nasc[2]) <= $idadeMinMax[0]){
							$pessoasFiltro2[$aux] = $pessoasFiltro[$i];
							$aux++;
						}
						
					}
				$pessoasFiltro = $pessoasFiltro2;
				$pessoasFiltro2 = null;
							
			   	}
		   	}

			
			/*Filtra pacientes com destino a todos hospitais com base no array regulacoesFiltro
			Só temos hospitais no aquifero guarany
			se o hospital foi preenchido então já temos o resultado por busca anterior*/
			if($hospital == 0 && !is_null($regulacoesFiltro)){
				if(($microregiao == 0 || $microregiao == 02) && $municipio == 0){
					for ($i=0; $i < count($regulacoesFiltro); $i++) {
						$aux = 0; 
						if($regulacoesFiltro[$i][2] == 38){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}	
						if($regulacoesFiltro[$i][2] == 43){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 44){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 45){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 46){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 48){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 49){
							$regulacoesDestino[$aux] = $internacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 50){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 51){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 56){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 58){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 134){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 150){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 151){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 187){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						//Hospitais de Santa Rita do Passa Quatro
						if($regulacoesFiltro[$i][2] == 53){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 54){
							$regulacoesDestino[$aux] = $internacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 55){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 57){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
						if($regulacoesFiltro[$i][2] == 182){
							$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
							$aux++;
						}
					}
					$regulacoesFiltro = $regulacoesDestino;
					$regulacoesDestino = 0;
				}
				//Essas duas regiões não possuem hospitais cadastrados
				if($microregiao == 01 || $microregiao == 03){
					$flag = 1;
				}

				if($microregiao == 02){
					if($municipio == 354340){
						for ($i=0; $i < count($regulacoesFiltro); $i++) {
							$aux = 0; 
							if($regulacoesFiltro[$i][2] == 38){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}	
							if($regulacoesFiltro[$i][2] == 43){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 44){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 45){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 46){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 48){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 49){
								$regulacoesDestino[$aux] = $internacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 50){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 51){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 56){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 58){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 134){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 150){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 151){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 187){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
						}
						$regulacoesFiltro = $regulacoesDestino;
						$regulacoesDestino = 0;
					}
					if($municipio == 354750){
						for ($i=0; $i < count($regulacoesFiltro); $i++) {
							$aux = 0; 
							if($regulacoesFiltro[$i][2] == 53){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 54){
								$regulacoesDestino[$aux] = $internacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 55){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
							if($regulacoesFiltro[$i][2] == 57){
								$regulacoesDestino[$aux] = $regulacoesFiltro[$i];
								$aux++;
							}
						}
						$regulacoesFiltro = $regulacoesDestino;
						$regulacoesDestino = 0;

					}else //as demais cidades não possuem hospitais cadastrados
						$flag = 1;					
				}
			}

			//constrói resultado
			//se a flag == 1 então um dos vetores finais não foi construido, a busca não retornou dados
			if($flag == 0){
				$aux = 0;
				//gera vetor result com os dados comparados entre regulaçoes e internacoes - salva dados do vetor regulacoesFiltros
				for ($i=0; $i < count($regulacoesFiltro) ; $i++) { 
					for ($j=0; $j < count($internacoesFiltro); $j++) { 
						if($regulacoesFiltro[0] == $internacoesFiltro[0]){
							$result[$aux] = $regulacoesFiltro;
							$aux++;
						}//fim for
					}
				}//fim for

				//gera vetor result2 com os dados comparados entre result e pessoas
				$aux = 0;
				for ($i=0; $i < count($result) ; $i++) { 
					for ($j=0; $j < count($pessoasFiltro); $j++) { 
						if($result[1] == $pessoasFiltro[0]){
							$result2[$aux][0] = $pessoasFiltro[0];
							$result2[$aux][1] = $pessoasFiltro[3];
							$result2[$aux][2] = codIBGEMun($pessoasFiltro[3]);
							$result2[$aux][3] = $result[2];
							$result2[$aux][4] = codIBGEHosp($result[2]);
							$aux++;
						}//fim for
					}
				}//fim for
			
			}//fim if

	   	
		}

		//passa dados para a view
		$this->set('cod_output', $cod_output);
		$this->set('result2', $result2);
		$arrayHosp = arrayHospIBGE();
	   	$this->set('arrayHospIBGE', $arrayHosp);
	   	


	}

	public function fluxomapa() {

	}

	public function indicadores(){
		
	}


}