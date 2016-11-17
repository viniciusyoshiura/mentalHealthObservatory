<?php

namespace App\Controller;

use Cake\Network\Request;


class FerramentasController extends AppController {

	public function fluxoaltas() {

		//Retorna string com o nome do municipio
		function nomeMunicipio($municipioNro, $micreg){
			$mun =0;
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
		//faixa de idade do paciente - array
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




		//preenche variaveis com os dados do array data
		if(!empty($data)){
			foreach ($data as $key => $value) {
				//print_r($key);
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

				if($key == 'cond_csaida')
					$cod_csaida = $value;

				if($key == 'cod_output')
					$cod_output = $value;
			}
			   
		}

		//define nome municipio
	   		 if($procede_municipio !== 0)
	   		 	$procede_municipiostr = nomeMunicipio($procede_municipio, $procede_microregiao);
	   		 if($municipio !== 0)
	   		 	$municipiostr = nomeMunicipio($municipio, $microregiao);
	   	//retorna array com municipios da região
	   		 if($procede_municipio == 0)
	   		 	$municipiosPrArr = municipiosMregiao($procede_microregiao);
	   		 if($municipio == 0)
	   			 $municipiosDestArr = municipiosMregiao($microregiao);

	   	//retorna dados de tabela com ID
			//$pessoa = $this->Pessoas->get('01');

	    //retorna todos registros da tabela pessoa (object)
	        $pessoas = $this->Pessoas->find();
	        // Retorne todos os artigos
	        // Até este ponto, nada acontece.
	        $query = $pessoas->find('all'); 
	        // query são retornadas em forma de array
	        $pessoas = $query->toArray();
	        // Conta query
	        $number = $query->count();
	    	//print_r($number);
	        //Retorna tipo da variavel
	        $teste = gettype($pessoas);
	    	//print_r($teste);
	    
	    //testes
	  	//	print_r($pessoas[4000]['cod_pessoa']);
			?><br /><?php 

	  		//$pessoas_arr[0] = $pessoas[3999];
	  		//$pessoas_arr[1] = $pessoas[4000];

	   	//	print_r($pessoas_arr[0]['tipo_pessoa']);
	   		?><br /><?php
	   	//	print_r($pessoas_arr[1]['cod_pessoa']);
	 		

 		//retorna todos dados da tabela internacoes
	   		 $internacoes = $this->Internacoes->find();
	   		 $query = $internacoes->find('all');
	   		 $internacoes = $query->toArray(); 

	   	//retorna todos dados da tabela regulacoes
	   		 $regulacoes = $this->Regulacoes->find();
	   		 $query = $regulacoes->find('all');
	   		 $regulacoes = $query->toArray(); 


	   	//passa dados para a view
	   		 $this->set('mes', $mes);
	   		 $this->set('ano', $ano);
	   		 $this->set('procede_regiao', $procede_regiao);
	   		 $this->set('procede_microregiao', $procede_microregiao);
	   		 $this->set('procede_municipio', $procede_municipio);
	   		 $this->set('regiao', $regiao);
	   		 $this->set('microregiao', $microregiao);
	   		 $this->set('municipio', $municipio);
	   		 $this->set('hospital', $hospital);
	   		 $this->set('cod_cid10', $cod_cid10);
	   		 $this->set('faixa_etaria', $faixa_etaria);
	   		 $this->set('cod_sexo', $cod_sexo);
	   		 $this->set('cod_csaida', $cod_csaida);
	   		 $this->set('cod_output', $cod_output);
	   		 $this->set('procede_municipiostr', $procede_municipiostr);
	   		 $this->set('municipiostr', $municipiostr);
	   		//$this->set('pessoas', $pessoas);
	   		// $this->set('internacoes', $internacoes);
	   		// $this->set('regulacoes', $regulacoes);


	}

	public function fluxomapa() {

	}


}