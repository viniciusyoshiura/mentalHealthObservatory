
<html>
<head>
	<script>
		function loading() {
			$('#output').html("<div style='text-align: center; padding-top: 250px;'><img src='loading.gif' /><br><br>Processando ...</div>");
		}
		
		function listaMicroregiao(cod_drs,nomecampo_mregiao,nomecampo_munic,nomecampo_hosp) {
			if (cod_drs == '00' || cod_drs == '-1')
				$('#'+nomecampo_mregiao).html("<option value='00'>00 - Todas Microregiões</option>");

			else if (cod_drs == '13')
				$('#'+nomecampo_mregiao).html("<option value='00'>00 - Todas Microregiões</option>"+
						"<option value='01'>01 - HORIZONTE VERDE</option>"+
						"<option value='02'>02 - AQUIFERO GUARANY</option>"+
						"<option value='03'>03 - VALE DAS CACHOEIRAS</option>");

			if (nomecampo_munic != '')
				$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option>");

			if (nomecampo_hosp != '')
				$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>");
		}

		function listaMunicipio(cod_mregiao,nomecampo_munic,nomecampo_hosp) {
			if (cod_mregiao == '00')
				$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option>");

			else if (cod_mregiao == '03')
				$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option>"+
						"<option value='350100'>350100 - ALTINOPOLIS</option>"+
						"<option value='350590'>350590 - BATATAIS</option>"+
						"<option value='350780'>350780 - BRODOSQUI</option>"+
						"<option value='350940'>350940 - CAJURU</option>"+
						"<option value='351090'>351090 - CASSIA DOS COQUEIROS</option>"+
						"<option value='354625'>354625 - SANTA CRUZ DA ESPERANCA</option>"+
						"<option value='354790'>354790 - SANTO ANTONIO DA ALEGRIA</option>");

			else if (cod_mregiao == '01')
				$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option>"+
						"<option value='350560'>350560 - BARRINHA</option>"+
						"<option value='351460'>351460 - DUMONT</option>"+
						"<option value='351860'>351860 - GUARIBA</option>"+
						"<option value='352430'>352430 - JABOTICABAL</option>"+
						"<option value='353130'>353130 - MONTE ALTO</option>"+
						"<option value='353950'>353950 - PITANGUEIRAS</option>"+
						"<option value='354020'>354020 - PONTAL</option>"+
						"<option value='354090'>354090 - PRADOPOLIS</option>"+
						"<option value='355170'>355170 - SERTAOZINHO</option>");
			else if (cod_mregiao == '02')
				$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option>"+
						"<option value='351310'>351310 - CRAVINHOS</option>"+
						"<option value='351885'>351885 - GUATAPARA</option>"+
						"<option value='352510'>352510 - JARDINOPOLIS</option>"+
						"<option value='352760'>352760 - LUIS ANTONIO</option>"+
						"<option value='354340'>354340 - RIBEIRAO PRETO</optio>"+
						"<option value='354750'>354750 - SANTA RITA DO PASSA QUATRO</option>"+
						"<option value='354760'>354760 - SANTA ROSA DE VITERBO</option>"+
						"<option value='355090'>355090 - SAO SIMAO</option>"+
						"<option value='355140'>355140 - SERRA AZUL</option>"+
						"<option value='355150'>355150 - SERRANA</option>");

			if (nomecampo_hosp != '')
				$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>");
		}

		function listaHospital(cod_mnibge,nomecampo_hosp) {
			if (cod_mnibge == '000000')
				$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>");

			else if (cod_mnibge == '354340')
				$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>"+
						"<option value='011'>011 - HOSPITAL DAS CLINICAS</option>"+
						"<option value='012'>012 - HOSPITAL DAS CLINICAS UNID. EMERGENCIA</option>"+ 
						"<option value='013'>013 - HOSPITAL ESTADUAL</option>"+
						"<option value='022'>022 - SOCIEDADE PORTUGUESA DE BENEFICENCIA</option>"+
						"<option value='026'>026 - HOSPITAL SAO LUCAS RIBEIRANIA</option>"+
						"<option value='027'>027 - MATERNIDADE SINHA JUNQUEIRA</option>"+
						"<option value='033'>033 - HOSPITAL SANTA TEREZA</option>"+
						"<option value='044'>044 - HOSPITAL SAO FRANCISCO</option>"+
						"<option value='049'>049 - ABRIGO ANA DIEDERICHSEN</option>"+
						"<option value='054'>054 - MATER MATERNIDADE DO COMPLEXO AEROPORTO</option>"+
						"<option value='055'>055 - HOSPITAL SAO LUCAS</option>"+
						"<option value='056'>056 - HOSPITAL ELECTRO BONINI</option>"+
						"<option value='066'>066 - HOSPITAL SAO PAULO</option>"+
						"<option value='077'>077 - HOSPITAL SANTA LYDIA</option>"+
						"<option value='088'>088 - SANATORIO ESPIRITA VICENTE DE PAULA</option>"+
						"<option value='099'>099 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '352430')
				$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>"+
						"<option value='018'>018 - HOSPITAL SAO MARCOS</option>"+
						"<option value='042'>042 - HOSPITAL E MATERNIDADE SANTA ISABEL</option>");

			else if (cod_mnibge == '350590')
				$('#'+nomecampo_hosp).html("<option value='021'>021 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '353130')
				$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>"+
						"<option value='028'>028 - SANTA CASA DE MISERICORDIA</option>"+
						"<option value='053'>053 - HOSPITAL UNIMED</option>");

			else if (cod_mnibge == '355090')
				$('#'+nomecampo_hosp).html("<option value='029'>029 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '351860')
				$('#'+nomecampo_hosp).html("<option value='030'>030 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '355150')
				$('#'+nomecampo_hosp).html("<option value='031'>031 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '353950')
				$('#'+nomecampo_hosp).html("<option value='032'>032 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '350940')
				$('#'+nomecampo_hosp).html("<option value='034'>034 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '351310')
				$('#'+nomecampo_hosp).html("<option value='035'>035 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '355170')
				$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>"+
						"<option value='036'>036 - HOSPITAL NETTO CAMPELLO</option>"+ 
						"<option value='043'>043 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '350780')
				$('#'+nomecampo_hosp).html("<option value='037'>037 - CASA DE REPOUSO SAO JOAO BATISTA</option>");

			else if (cod_mnibge == '350560')
				$('#'+nomecampo_hosp).html("<option value='038'>038 - HOSPITAL FLEMING</option>");

			else if (cod_mnibge == '354020')
				$('#'+nomecampo_hosp).html("<option value='039'>039 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '350100')
				$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>"+
											"<option value='040'>040 - HOSPITAL DE MISERICORDIA (SUS)</option>"+
											"<option value='041'>041 - HOSPITAL DE MISERICORDIA</option>");

			else if (cod_mnibge == '352510')
				$('#'+nomecampo_hosp).html("<option value='045'>045 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '354760')
				$('#'+nomecampo_hosp).html("<option value='046'>046 - SANTA CASA DE MISERICORDIA</option>");

			else if (cod_mnibge == '355140')
				$('#'+nomecampo_hosp).html("<option value='048'>048 - UNIDADE MISTA</option>");

			else if (cod_mnibge == '354790')
				$('#'+nomecampo_hosp).html("<option value='050'>050 - UNIDADE MISTA</option>");

			else if (cod_mnibge == '352760')
				$('#'+nomecampo_hosp).html("<option value='051'>051 - UNIDADE MISTA</option>");

			else if (cod_mnibge == '351090')
				$('#'+nomecampo_hosp).html("<option value='052'>052 - CENTRO MED SOC COM PEDREIRA DE FREITAS</option>");

			else
				$('#'+nomecampo_hosp).html("<option value='000'>Município não possui hospital cadastrado.</option>");
		}

		function listaIndicador(codInd) {
			switch(codInd) {
			// Indicadores de Mortalidade por Causa Específica
			case '00':
				$('#indicador').html("<option value='1'>Suicídio</option>"+
									"<option value='2'>Mortalidade devida a eventos nocivos, intenção pouco clara</option>"+
									"<option value='3'>Mortes relacionadas com drogas</option>"+
									"<option value='4'>Anos de vida em potencial perdidos - Fração de suicídio</option>");
				break;
			// Indicadores de Morbidade - Doença Específica
			case '01':
				$('#indicador').html(
									"<option value='5'>Depressão Nervosa</option>"+
									"<option value='6' disabled='disabled'>Transtorno de Ansiedade Generalizada (TAG)</option>"+
									"<option value='7'>Tentativas de Suicídio</option>"+
									"<option value='8'>Dependência Alcoólica</option>");
				break;
			// Indicadores de Morbidade - Doença Genérica
			case '02':
				$('#indicador').html("<option value='9'>Estresse Psicológico</option>"+
									"<option value='10'>Bem-estar Psicológico</option>"+
									"<option value='11'>Enfraquecimento</option>");
				break;
			// Indicadores - Fatores Pessoais
			case '03':
				$('#indicador').html("<option value='12'>Sensação de Domínio</option>"+
									"<option value='13'>Otimismo</option>");
				break;
			// Indicadores - Condições de Vida e Trabalho
			case '04':
				$('#indicador').html("<option value='14'>Suporte Social</option>"+
									"<option value='15'>Isolamento Social</option>"+
									"<option value='16'>Eventos Negativos da Vida</option>");
				break;
			// Indicadores - Prevenção, proteção e promoção da saúde
			case '05':
				$('#indicador').html("<option value='17'>Projetos de Prevenção</option>"+
									"<option value='18'>Projetos de Promoção</option>");
				break;
			// Indicadores - Recursos de Cuidados de Saúde
			case '06':
				$('#indicador').html("<option value='19'>Camas Psiquiátricas</option>"+
									"<option value='20'>Psiquiatras</option>"+
									"<option value='21'>Psiquiatras Infantis</option>"+
									"<option value='22'>Psicólogos Clínicos</option>");
				break;
			// Indicadores - Utilização de Cuidados de Saúde
			case '07':
				$('#indicador').html("<option value='23'>Alta Devido a Transtorno Mental</option>"+
									"<option value='24'>Alta Devido a Transtornos Mentais Menores</option>"+
									"<option value='25'>Pacientes de Longa Permanência</option>"+	
									"<option value='26'>Usos de Serviços Ambulatoriais</option>"+
									"<option value='27'>Uso Próprio de Serviços de Saúde Mental</option>"+
									"<option value='28'>Consumo de Drogas Psicotrópicas</option>");
				break;
			}
		}
		
		//funcao substituindo hide() - ocultar/exibir
		function hide(idFilter,idResult) { //função ocultar/exibir filtro + redimensionar div de saída de dados
	        if(document.getElementById(idFilter).style.display=="none") {
	                document.getElementById(idFilter).style.display = "inline";
	                document.getElementById(idResult).style.marginLeft = "290px";
	        }
	        else {
	                document.getElementById(idFilter).style.display = "none";
	                document.getElementById(idResult).style.marginLeft = "0px";
	        }
		}

	</script>
	<title>Indicadores - Portal OSM</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel='stylesheet' href='../webroot/css/filtros.css' type='text/css' media='all' />
	<script type='text/javascript' src='..webroot/js/jquery.min.js'></script>
	<script type='text/javascript' src='..webroot/js/funcoes_gerais.js'></script>
</head>
<body>

					
	    
	<br>
	
	<div id='painelFiltro'>
		<?php echo $this->form->create(null, ['url'=>[' action' => 'getdata']]);?>
			<br>
			<div class='filter'>Selecione o tipo de indicador e os filtros para a consulta:</div>

			<br />

			<div class='filter'><label for='catIndicador'>Categorias de indicadores<a href="#" class="tooltip">
              <span>Selecione uma categoria de Indicadores</span>[?]</a></label> </div>
			<select name='catIndicador' id='catIndicador' onchange="listaIndicador($(this).val())" style='width:250px;'>
				<option value="00">Mortalidade por Causa Específica</option>
				<option value="01">Morbidade por Doença Específica</option>
				<option value="02">Morbidade por Doença Genérica</option>
				<option value="03">Fatores Pessoais</option>
				<option value="04">Condições de Vida e Trabalho</option>
				<option value="05">Prevenção, Proteção à Saúde e Promoção da Saúde</option>
				<option value="06">Recursos de Cuidados de Saúde</option>
				<option value="07">Utilização de Cuidados de Saúde</option>
			</select>
			<script type='text/javascript'>
			</script>

			<br />

			<div class='filter'><label for='indicador'>Indicador<a href="#" class="tooltip">
              <span>Selecione um Indicador</span>[?]</a></label></div>
			<select name='indicador' id='indicador' style='width:250px;'></select>
			<script type='text/javascript'>
				listaIndicador($('#catIndicador').val());
			</script>

			<br /><br />

			<span class='filter'><label for='faixaEtaria'>Selecione uma faixa etária:<a href="#" class="tooltip">
              <span>Selecione a faixa etária a ser utilizada para consulta</span>[?]</a></label></span>
			<br />
			<span class='filter'><label for='faixaEtaria'>Faixa Etaria</label></span>
			<select name='faixaEtaria' id='faixaEtaria' style='width: 130px;'>
				<option value='01' selected='selected'>0 a 4 anos</option>
				<option value='02' >5 a 9 anos</option>
				<option value='03' >10 a 14 anos</option>
				<option value='04' >15 a 19 anos</option>
				<option value='05' >20 a 24 anos</option>
				<option value='06' >25 a 29 anos</option>
				<option value='07' >30 a 34 anos</option>
				<option value='08' >35 a 39 anos</option>
				<option value='09' >40 a 44 anos</option>
				<option value='10' >45 a 49 anos</option>
				<option value='11' >50 a 54 anos</option>
				<option value='12' >55 a 59 anos</option>
				<option value='13' >60 a 64 anos</option>
				<option value='14' >65 a 69 anos</option>
				<option value='15' >70 a 74 anos</option>
				<option value='16' >75 a 79 anos</option>
				<option value='17' >80 a 84 anos</option>
				<option value='18' >85 a 89 anos</option>
				<option value='19' >90 a 94 anos</option>
				<option value='20' >95 a 99 anos</option>
				<option value='21' >Mais de 100 anos</option>
			</select>
			<script type='text/javascript'>
			</script>

			<br /><br />

			<span class='filter'><label for='sexo'>Selecione o sexo:<a href="#" class="tooltip">
              <span>Selecione o sexo a ser utilizado na consulta</span>[?]</a></label></span>
			<br />
			<span class='filter'><label for='sexo'>Sexo</S></label></span>
			<select name='sexo' id='sexo' style='width: 100px;'>
				<option value='01' selected='selected'>Feminino</option>
				<option value='02' >Masculino</option>
			</select>
			<script type='text/javascript'>
			</script>

			<br /><br />

			<span class='filter'><label for='grupodiagnostico'>Selecione o Grupo Diagnóstico:<a href="#" class="tooltip">
              <span>Selecione o Grupo Diagnóstico ser utilizado na consulta</span>[?]</a></label></span>
			<br />
			<span class='filter'><label for='sexo'>Grupo Diagnóstico</S></label></span>
			<select name='sexo' id='sexo' style='width: 100px;'>
				<option value='01' selected='selected'>Dependência Química</option>
				<option value='02' >Outros Transtornos Mentais</option>
				<option value='02' >Outros Diagnósticos</option>
			</select>
			<script type='text/javascript'>
			</script>

			<br /><br />

			<div class='filter'>Selecione o Filtro de Procedência:</div>
			<div class='filter'><label for='regiao'>Região</label></div>
			<select name='regiao' id='regiao' style='width: 250px;'>
				<option value='13'>DRS-XIII</option>
			</select>
			
			<br/>
			<div class='filter'><label for='microregiao'>Microregião</label></div>
			<select name ='microregiao' id='microregiao' onchange="listaMunicipio($(this).val(),'municipio','hospital')"style='width:250px'>
				<option value="00">00 - Todas microregiões</option>
				<option value="01">01 - HORIZONTE VERDE</option>
				<option value="02">02 - AQUIFERO GUARANY</option>
				<option value="03">03 - VALE DAS CACHOEIRAS</option>
			</select>
			<script type='text/javascript'>
			</script>
			
			<br/>
			<div class='filter'><label for='municipioresidencia'>Município de Residência</label></div>
			<select name='municipioresidencia' id='municipioresidencia' onchange="listaHospital($(this).val(), 'hospital')" style='width:250px'></select>
			<script type='text/javascript'>
				listaMunicipio($('#microregiao').val(),'municipioresidencia','hospital');
			</script>

			<br/>
			<div class='filter'><label for='municipiosolicitacao'>Município de Solicitação</label></div>
			<select name='municipiosolicitacao' id='municipiosolicitacao' onchange="listaHospital($(this).val(), 'hospital')" style='width:250px'></select>
			<script type='text/javascript'>
				listaMunicipio($('#microregiao').val(),'municipiosolicitacao','hospital');
			</script>
			
			<br/>
			<div class='filter'><label for='unidadesolicitacao'>Unidade de Solicitação</label></div>
			<select name='unidadesolicitacao' id='unidadesolicitacao' style='width:250px;'></select>
			<script type='text/javascript'>
				listaHospital($('#municipio').val(), 'unidadesolicitacao');
			</script>

			<br /><br />

			<div class='filter'>Selecione o Filtro de Destino:</div>
			<div class='filter'><label for='regiao'>Região</label></div>
			<select name='regiao' id='regiao' style='width: 250px;'>
				<option value='13'>DRS-XIII</option>
			</select>
			
			<br/>
			<div class='filter'><label for='microregiao'>Microregião</label></div>
			<select name ='microregiao' id='microregiao' onchange="listaMunicipio($(this).val(),'municipio','hospital')"style='width:250px'>
				<option value="00">00 - Todas microregiões</option>
				<option value="01">01 - HORIZONTE VERDE</option>
				<option value="02">02 - AQUIFERO GUARANY</option>
				<option value="03">03 - VALE DAS CACHOEIRAS</option>
			</select>
			<script type='text/javascript'>
			</script>
			
			<br/>
			<div class='filter'><label for='municipiodestino'>Município de Destino</label></div>
			<select name='municipiodestino' id='municipiodestino' onchange="listaHospital($(this).val(), 'hospital')" style='width:250px'></select>
			<script type='text/javascript'>
				listaMunicipio($('#microregiao').val(),'municipiodestino','unidade');
			</script>
			
			<br/>
			<div class='filter'><label for='unidadedestino'>Unidade de Destino</label></div>
			<select name='unidadedestino' id='unidadedestino' style='width:250px;'></select>
			<script type='text/javascript'>
				listaHospital($('#municipio').val(), 'unidadedestino');
			</script>
			
			
			<br/><br/>
			<!--
			<div class='filter'>Quantidade de afecções</div>
			<input type='radio' name='qtd_afec' id='afec_primaria' value='primaria' checked='checked'><label for='afec_primaria'>Afecção primária</label>
			<input type='radio' name='qtd_afec' id='afec_todas' value='todas' disabled='disabled'><label for='afec_todas'>Todas afecções</label>

			<br/>
			<br/>
			-->

			<!-- <input type='hidden' name='tipo_ind' value='' /> -->
			<input type='hidden' name='sid' value= />

			<hr/>

			<div style='margin-top: 15px;'>
				<input type='submit' value='Consultar' style='width: 250px;'>
			</div>
			<br/>

		</form>
	</div>

	<!-- resultados -->
	<div id='output'>
		
			<!-- Início descricao da ferramenta -->
			<br>
			<div id='descricao' align="right">
			<div style='text-align: justify; margin-right: 30px' class='descricao'>
					<!DOCTYPE h1 PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<br><br>
<h1>  Indicadores de Saúde Mental. </h1> 
					<br>
						<p><b> Descrição:</b>
						 A ferramenta apresenta o cálculo de diversos indicadores de saúde mental, incluindo indicadores de mortalidade por doença específica, morbidade por doença específica, entre outros.</p>
					<table><tr>
					<td>
					<ul>
						<li><p> <b>O que a ferramenta gera:</b>  uma tabela, cujas linhas representam cada hospital e as colunas apresentam informações da localização do hospital, tais como a microrregião e município no qual o hospital se encontra, além do nome do hospital, e o resultado do indicador consultado. No caso dos indicadores de mortalidade, a tabela apresenta o total de internações por determinado código CID ou procedimento, o total de óbitos e a taxa de mortalidade. Nos indicadores de morbidade são apresentados o total de internações e a taxa de internações por determinados CID.</p></li>		
						<p><b>Obs.: Todas as informações referentes aos indicadores são apenas valores absolutos ou porcentagens.</b></p>
						<li><p><b> Operações realizáveis pelo usuário: </p></b></li>
						<p>O usuário pode selecionar uma classe de indicadores (mortalidade; morbidade - doença específica; morbidade - doença genérica; fatores pessoais; condições de vida e trabalho; prevenção, proteção e promoção da saúde; recursos de cuidados de saúde; utilização de cuidados de saúde) e posteriormente um indicador dentro desta classe. Pode selecionar também a faixa etária, o sexo, o grupo diagnóstico, a procedência e o destino, dependendo do tipo de acesso que o usuário possui que será determinado seguindo a hierarquia de acesso do portal.</p>
					</ul></td><td></td>
					</table>
			</body>	
</html>
			</div>
			</div>
			<!-- Fim descricao da ferramenta --> 
	<?php echo $this->Form->end(); ?>
	
	</div>
	
			
<script>
jQuery(document).ready(function($) {
	$('#painelFiltro').height($('#painelFiltro').height()-$('#header').outerHeight()-10);
	$('#output').height($('#output').height()-$('#header').outerHeight()-10);
});
</script>
</body>
</html>

