<html>
<head>
	<title>Fluxo de Altas - Portal OSM</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel='stylesheet' href='../webroot/css/filtros.css' type='text/css' media='all' />
	<script type='text/javascript' src='../webroot/js/jquery.min.js'></script>
	<script type='text/javascript' src='../webroot/js/funcoes_gerais.js'></script>
	<script>

function listaMicroregiao(cod_drs,nomecampo_mregiao,nomecampo_munic,nomecampo_hosp) {
	if (cod_drs == '00' || cod_drs == '-1')
		$('#'+nomecampo_mregiao).html("<option value='00'>00 - Todas Microrregiões</option>");

	else if (cod_drs == '13')
		$('#'+nomecampo_mregiao).html("<option value=\"00\">00 - Todas Microrregiões</option><option value=\"01\">01 - HORIZONTE VERDE</option><option value=\"02\">02 - AQUIFERO GUARANY</option><option value=\"03\">03 - VALE DAS CACHOEIRAS</option>");

	if (nomecampo_munic != '')
		$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option>");

	if (nomecampo_hosp != '')
		$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>");
}

function listaMunicipio(cod_mregiao,nomecampo_munic,nomecampo_hosp) {
	if (cod_mregiao == '00')
		$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option>");

	else if (cod_mregiao == '03')
		$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option><option value='350100'>350100 - ALTINOPOLIS</option><option value='350590'>350590 - BATATAIS</option><option value='350780'>350780 - BRODOSQUI</option><option value='350940'>350940 - CAJURU</option><option value='351090'>351090 - CASSIA DOS COQUEIROS</option><option value='354625'>354625 - SANTA CRUZ DA ESPERANCA</option><option value='354790'>354790 - SANTO ANTONIO DA ALEGRIA</option>");

	else if (cod_mregiao == '01')
		$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option><option value='350560'>350560 - BARRINHA</option><option value='351460'>351460 - DUMONT</option><option value='351860'>351860 - GUARIBA</option><option value='352430'>352430 - JABOTICABAL</option><option value='353130'>353130 - MONTE ALTO</option><option value='353950'>353950 - PITANGUEIRAS</option><option value='354020'>354020 - PONTAL</option><option value='354090'>354090 - PRADOPOLIS</option><option value='355170'>355170 - SERTAOZINHO</option>");

	else if (cod_mregiao == '02')
		$('#'+nomecampo_munic).html("<option value='000000'>000000 - Todos Municípios</option><option value='351310'>351310 - CRAVINHOS</option><option value='351885'>351885 - GUATAPARA</option><option value='352510'>352510 - JARDINOPOLIS</option><option value='352760'>352760 - LUIS ANTONIO</option><option value='354340'>354340 - RIBEIRAO PRETO</option><option value='354750'>354750 - SANTA RITA DO PASSA QUATRO</option><option value='354760'>354760 - SANTA ROSA DE VITERBO</option><option value='355090'>355090 - SAO SIMAO</option><option value='355140'>355140 - SERRA AZUL</option><option value='355150'>355150 - SERRANA</option>");

	if (nomecampo_hosp != '')
		$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>");
}

function listaHospital(cod_mnibge,nomecampo_hosp) {
	if (cod_mnibge == '000000')
		$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option>");

	else if (cod_mnibge == '354340')
		$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option><option value='011'>011 - HOSPITAL DAS CLINICAS - RIBEIRAO PRETO</option><option value='012'>012 - HOSPITAL DAS CLINICAS UNID. EMERGENCIA - RIBEIRAO PRETO</option><option value='013'>013 - HOSPITAL ESTADUAL - RIBEIRAO PRETO</option><option value='022'>022 - SOCIEDADE PORTUGUESA DE BENEFICENCIA - RIBEIRAO PRETO</option><option value='026'>026 - HOSPITAL SAO LUCAS RIBEIRANIA - RIBEIRAO PRETO</option><option value='027'>027 - MATERNIDADE SINHA JUNQUEIRA - RIBEIRAO PRETO</option><option value='033'>033 - HOSPITAL SANTA TEREZA - RIBEIRAO PRETO</option><option value='044'>044 - HOSPITAL SAO FRANCISCO - RIBEIRAO PRETO</option><option value='049'>049 - ABRIGO ANA DIEDERICHSEN - RIBEIRAO PRETO</option><option value='054'>054 - MATER MATERNIDADE DO COMPLEXO AEROPORTO - RIBEIRAO PRETO</option><option value='055'>055 - HOSPITAL SAO LUCAS - RIBEIRAO PRETO</option><option value='056'>056 - HOSPITAL ELECTRO BONINI - RIBEIRAO PRETO</option><option value='066'>066 - HOSPITAL SAO PAULO - RIBEIRAO PRETO</option><option value='077'>077 - HOSPITAL SANTA LYDIA - RIBEIRAO PRETO</option><option value='088'>088 - SANATORIO ESPIRITA VICENTE DE PAULA - RIBEIRAO PRETO</option><option value='099'>099 - SANTA CASA DE MISERICORDIA - RIBEIRAO PRETO</option>");

	else if (cod_mnibge == '352430')
		$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option><option value='018'>018 - HOSPITAL SAO MARCOS - JABOTICABAL</option><option value='042'>042 - HOSPITAL E MATERNIDADE SANTA ISABEL - JABOTICABAL</option>");

	else if (cod_mnibge == '350590')
		$('#'+nomecampo_hosp).html("<option value='021'>021 - SANTA CASA DE MISERICORDIA - BATATAIS</option>");

	else if (cod_mnibge == '353130')
		$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option><option value='028'>028 - SANTA CASA DE MISERICORDIA - MONTE ALTO</option><option value='053'>053 - HOSPITAL UNIMED - MONTE ALTO</option>");

	else if (cod_mnibge == '355090')
		$('#'+nomecampo_hosp).html("<option value='029'>029 - SANTA CASA DE MISERICORDIA - SAO SIMAO</option>");

	else if (cod_mnibge == '351860')
		$('#'+nomecampo_hosp).html("<option value='030'>030 - SANTA CASA DE MISERICORDIA - GUARIBA</option>");

	else if (cod_mnibge == '355150')
		$('#'+nomecampo_hosp).html("<option value='031'>031 - SANTA CASA DE MISERICORDIA - SERRANA</option>");

	else if (cod_mnibge == '353950')
		$('#'+nomecampo_hosp).html("<option value='032'>032 - SANTA CASA DE MISERICORDIA - PITANGUEIRAS</option>");

	else if (cod_mnibge == '350940')
		$('#'+nomecampo_hosp).html("<option value='034'>034 - SANTA CASA DE MISERICORDIA - CAJURU</option>");

	else if (cod_mnibge == '351310')
		$('#'+nomecampo_hosp).html("<option value='035'>035 - SANTA CASA DE MISERICORDIA - CRAVINHOS</option>");

	else if (cod_mnibge == '355170')
		$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option><option value='036'>036 - HOSPITAL NETTO CAMPELLO - SERTAOZINHO</option><option value='043'>043 - SANTA CASA DE MISERICORDIA - SERTAOZINHO</option>");

	else if (cod_mnibge == '350780')
		$('#'+nomecampo_hosp).html("<option value='037'>037 - CASA DE REPOUSO SAO JOAO BATISTA - BRODOSQUI</option>");

	else if (cod_mnibge == '350560')
		$('#'+nomecampo_hosp).html("<option value='038'>038 - HOSPITAL FLEMING - BARRINHA</option>");

	else if (cod_mnibge == '354020')
		$('#'+nomecampo_hosp).html("<option value='039'>039 - SANTA CASA DE MISERICORDIA - PONTAL</option>");

	else if (cod_mnibge == '350100')
		$('#'+nomecampo_hosp).html("<option value='000'>000 - Todos Hospitais</option><option value='040'>040 - HOSPITAL DE MISERICORDIA (SUS) - ALTINOPOLIS</option><option value='041'>041 - HOSPITAL DE MISERICORDIA - ALTINOPOLIS</option>");

	else if (cod_mnibge == '352510')
		$('#'+nomecampo_hosp).html("<option value='045'>045 - SANTA CASA DE MISERICORDIA - JARDINOPOLIS</option>");

	else if (cod_mnibge == '354760')
		$('#'+nomecampo_hosp).html("<option value='046'>046 - SANTA CASA DE MISERICORDIA - SANTA ROSA DE VITERBO</option>");

	else if (cod_mnibge == '355140')
		$('#'+nomecampo_hosp).html("<option value='048'>048 - UNIDADE MISTA - SERRA AZUL</option>");

	else if (cod_mnibge == '354790')
		$('#'+nomecampo_hosp).html("<option value='050'>050 - UNIDADE MISTA - SANTO ANTONIO DA ALEGRIA</option>");

	else if (cod_mnibge == '352760')
		$('#'+nomecampo_hosp).html("<option value='051'>051 - UNIDADE MISTA - LUIZ ANTONIO</option>");

	else if (cod_mnibge == '351090')
		$('#'+nomecampo_hosp).html("<option value='052'>052 - CENTRO MED SOC COM PEDREIRA DE FREITAS - CASSIA COQUEIROS</option>");

	else
		$('#'+nomecampo_hosp).html("<option value='000'>Município não possui hospital cadastrado.</option>");
}
</script>
	<style>
		#tabDados td {
			padding: 2px;
		}

		th div {
			width: 1em;
			margin: 0px 5px;
		}
	</style>
</head>
<body>

<div id='header'>
	

	OSM - Observatório de Saúde Mental
	
</div>	<div id='ocultarFiltro' style='width: 259px;'> <!-- Div Ocultar Filtros -->
	<br><a href="#" onclick="javascript: hide('painelFiltro', 'output');"></a> 
	</div>
	
	<div id='painelFiltro'> <!-- Div Filtros -->
	<form action='fluxo_filtros.php' method='post' onsubmit="loading();">

	<span class='filter'><label for='ano'>Data de Refer&ecirc;ncia</label></span>
	<select name='mes' id='mes' style='width: 50px;'>
		
		<option value='0' >-</option>
		<option value='1' >Jan</option>
		<option value='2' >Fev</option>
		<option value='3' >Mar</option>
		<option value='4' >Abr</option>
		<option value='5' >Mai</option>
		<option value='6' >Jun</option>
		<option value='7' >Jul</option>
		<option value='8' >Ago</option>
		<option value='9' >Set</option>
		<option value='10' >Out</option>
		<option value='11' >Nov</option>
		<option value='12' >Dez</option>	</select>
	<select name='ano' id='ano' style='width: 65px;'>
		<option value='0'>Todos</option>
		
		<option value='2002' >2002</option>
		<option value='2003' >2003</option>
		<option value='2004' >2004</option>
		<option value='2005' >2005</option>
		<option value='2006' >2006</option>
		<option value='2007' >2007</option>
		<option value='2008' >2008</option>
		<option value='2009' >2009</option>
		<option value='2010' >2010</option>
		<option value='2011' >2011</option>
		<option value='2012' >2012</option>
		<option value='2013' >2013</option>
		<option value='2014' >2014</option>	</select>

		<hr>

		<b>Procedência </b><img title="Escolha a região de origem do paciente" src='../img/ferramentas_dica.jpg'>

			<div class='filter'><label for='procede_regiao'>Região </label></div>
			<select name='procede_regiao' id='procede_regiao' onchange="listaMicroregiao($(this).val(),'procede_microregiao','procede_municipio','')" style='width: 250px;'>
				
				<option value='13'>DRS-XIII</option>
			</select>
			<br/>
			<script type='text/javascript'>
				$('#procede_regiao').val('')
			</script>

			<div class='filter'><label for='procede_microregiao'>Microrregião</label></div>
			<select name='procede_microregiao' id='procede_microregiao' onchange="listaMunicipio($(this).val(),'procede_municipio','')" style='width:250px'></select>
			<script type='text/javascript'>
				listaMicroregiao($('#procede_regiao').val(),'procede_microregiao',	'procede_municipio','');
				$('#procede_microregiao').val('')
			</script>

			<br/>

			<div class='filter'><label for='procede_municipio'>Município</label></div>
			<select name='procede_municipio' id='procede_municipio' onchange="listaHospital($(this).val(),'')" style='width:250px'></select>
			<script type='text/javascript'>
				listaMunicipio($('#procede_microregiao').val(),'procede_municipio','');
				$('#procede_municipio').val('')
			</script>

			
			<hr>
			<b>Destino </b><img title='Escolha a região que o paciente foi atendido' src='../img/ferramentas_dica.jpg'>			<input type='hidden' name='regiao' value='13' />

						<div class='filter'><label for='microregiao'>Microrregião</label></div>
			<select name='microregiao' id='microregiao' onchange="listaMunicipio($(this).val(),'municipio','hospital')" style='width:250px'>
				<option value="00">00 - Todas Microrregiões</option>
				<option value="01">01 - HORIZONTE VERDE</option>
				<option value="02">02 - AQUIFERO GUARANY</option>
				<option value="03">03 - VALE DAS CACHOEIRAS</option>
			</select>
			<script type='text/javascript'>
				$('#microregiao').val('');
			</script>
						<br/>
			<div class='filter'><label for='municipio'>Município</label></div>
			<select name='municipio' id='municipio' onchange="listaHospital($(this).val(),'hospital')" style='width:250px'></select>
			<script type='text/javascript'>
				listaMunicipio($('#microregiao').val(),'municipio','hospital');
				$('#municipio').val('')
			</script>
						<br/>
			<div class='filter'><label for='hospital'>Hospital</label></div>
			<select name='hospital' id='hospital' style='width:250px'></select>
			<script type='text/javascript'>
				listaHospital($('#municipio').val(),'hospital');
				$('#hospital').val('')
			</script>
				<hr>
	<div class='filter'><label for='cod_cid10'>Cap&iacute;tulos CID10 </label><img title="Escolha o capítulo CID 10. É possível selecionar todos os capítulos, apenas um ou então mais que um capítulo por meio da lista personalizada." src='../img/ferramentas_dica.jpg'></div>
	<select name='cod_cid10' id='cod_cid10' style='width: 250px;' onchange="if(this.value == -1){$('#cod_cid10_lista_box').show();}else{$('#cod_cid10_lista_box').hide();}">
		<option value='' selected='selected'>Todos</option>
		<option value='-1' >Lista Personalizada</option>
		<option value='A00-B99' >I - Algumas doenças infecciosas e parasitárias</option>
		<option value='C00-D48' >II - Neoplasmas (tumores)</option>
		<option value='D50-D89' >III - Doenças do sangue e dos órgãos hematopoéticos e alguns transtornos imunitários</option>
		<option value='E00-E90' >IV - Doenças endócrinas, nutricionais e metabólicas</option>
		<option value='F00-F99' >V - Transtornos mentais e comportamentais</option>
		<option value='G00-G99' >VI - Doenças do sistema nervoso</option>
		<option value='H00-H59' >VII - Doenças do olho e anexos</option>
		<option value='H60-H95' >VIII - Doenças do ouvido e da apófise mastóide</option>
		<option value='I00-I99' >IX - Doenças do aparelho circulatório</option>
		<option value='J00-J99' >X - Doenças do aparelho respiratório</option>
		<option value='K00-K93' >XI - Doenças do aparelho digestivo</option>
		<option value='L00-L99' >XII - Doenças da pele e do tecido subcutâneo</option>
		<option value='M00-M99' >XIII - Doenças do sistema osteomuscular e do tecido conjuntivo</option>
		<option value='N00-N99' >XIV - Doenças do aparelho geniturinário</option>
		<option value='O00-O99' >XV - Gravidez, parto e puerpério</option>
		<option value='P00-P96' >XVI - Algumas afecções originadas no período perinatal</option>
		<option value='Q00-Q99' >XVII - Malformações congênitas, deformidades e anomalias cromossômicas</option>
		<option value='R00-R99' >XVIII - Sintomas, sinais e achados anormais de exames clínicos e de laboratório, não classificados em outra parte</option>
		<option value='S00-T98' >XIX - Lesões, envenenamentos e algumas outras conseqüências de causas externas</option>
		<option value='V01-Y98' >XX - Causas externas de morbidade e de mortalidade</option>
		<option value='Z00-Z99' >XXI - Fatores que influenciam o estado de saúde e o contato com os serviços de saúde</option>
		<option value='U00-U99' >XXII - Códigos para propósitos especiais</option>
	</select>

	<div id='cod_cid10_lista_box' style='display: none;'>
	&nbsp; <input type='text' name='cod_cid10_lista' id='cod_cid10_lista' value='' style='width: 100px;'/> <span style='font-size: 10px;'>(separada por virgulas)</span>
	</div>
    <hr>

	<div class='filter'><label for='faixa_etaria'>Faixa Et&aacute;ria </label><img title="Escolha a faixa etária. É possível selecionar mais que uma faixa etária. Para escolher faixas etárias não consecutivas mantenha a tecla Shift selecionada." src='../img/ferramentas_dica.jpg'></div>
	<select size='12' name='faixa_etaria[]' id='faixa_etaria' multiple='multiple' style='width: 250px;'>
		<option value='000-999-dm' >Menor que 1 ano</option>
		<option value='001-004-a' >1 a 4 anos</option>
		<option value='005-009-a' >5 a 9 anos</option>
		<option value='010-014-a' >10 a 14 anos</option>
		<option value='015-019-a' >15 a 19 anos</option>
		<option value='020-029-a' >20 a 29 anos</option>
		<option value='030-039-a' >30 a 39 anos</option>
		<option value='040-049-a' >40 a 49 anos</option>
		<option value='050-059-a' >50 a 59 anos</option>
		<option value='060-069-a' >60 a 69 anos</option>
		<option value='070-079-a' >70 a 79 anos</option>
		<option value='080-999-a' >Maior que 80 anos</option>
	</select>
    <hr>
	<div class='filter'>Sexo</div>
	<input type='radio' name='cod_sexo' id='cod_sexo_0' value='' checked='checked'><label for='cod_sexo_0'>Ambos</label>
	<input type='radio' name='cod_sexo' id='cod_sexo_1' value='1' ><label for='cod_sexo_1'>Masculino</label>
	<input type='radio' name='cod_sexo' id='cod_sexo_2' value='2' ><label for='cod_sexo_2'>Feminino</label>
    <hr>
	<div class='filter'>Categoria de Interna&ccedil;&atilde;o</div>
	<input type='radio' name='cod_catint' id='cod_catint_0' value='' checked='checked'><label for='cod_catint_0'>Ambos</label>
	<input type='radio' name='cod_catint' id='cod_catint_1' value='1' ><label for='cod_catint_1'>SUS</label>
	<input type='radio' name='cod_catint' id='cod_catint_2' value='2' ><label for='cod_catint_2'>N&atilde;o-SUS</label>
    <hr>
	<div class='filter'><label for='cod_csaida'>Condi&ccedil;&atilde;o de Sa&iacute;da </label><img title="Escolha a condição de saída do paciente. É possível selecionar mais que uma condição de saída." src='../img/ferramentas_dica.jpg'></div>
	<select size='6' name='cod_csaida[]' id='cod_csaida' multiple='multiple' style='width:250px'>
		<option value='1' >Ordem M&eacute;dica</option>
		<option value='2' ><label for='cod_csaida2'>A Pedido</option>
		<option value='3' ><label for='cod_csaida3'>Transfer&ecirc;ncia</option>
		<option value='4' ><label for='cod_csaida4'>Fuga</option>
		<option value='7' ><label for='cod_csaida7'>&Oacute;bito com Aut&oacute;psia</option>
		<option value='8' ><label for='cod_csaida8'>&Oacute;bito sem Aut&oacute;psia</option>
	</select>
    <hr>
	<div class='filter'>Saída de Dados <img title="Escolha como deseja visualizar os resultados." src='../img/ferramentas_dica.jpg'></div>
		<input type='radio' name='cod_output' id='cod_output_1' value='1' checked='checked'><label for='cod_output_1'>Mapa</label>
		<input type='radio' name='cod_output' id='cod_output_2' value='2' ><label for='cod_output_2'>Tabela</label>

	<div style='margin: 10px 0px;'>
		<input type='submit' value='Filtrar' style='width: 115px;'>
		<input type='button' disabled name='salvar' id='salvar' value='Salvar' style='width: 115px; margin-left: 10px;'">
	</div>
	</form>
	</div>
	
	<div id='output'> <!-- Div Resultados -->
<!-- Início descricao da ferramenta -->
			<div id='descricao'>
			<div style='text-align: justify; margin-right: 30px' id='descricao'>
			<h1> Fluxo de Altas </h1>
			<p><b>Descrição:</b> A ferramenta de Fluxo de Altas provê a visualização do número de altas que cada hospital ou município faz de acordo com a procedência do paciente por meio de mapas e/ou tabelas.</p>
			<p><b>Operações Realizáveis pelo Usuário:</b> O usuário pode especificar o mês e o ano de referência dos dados e filtrar as informações de acordo com: 
			<ul>
			<li> A origem e o destino das internações;</li>
			<li> O(s) capítulo(s) CID envolvido(s);</li>  
			<li> A faixa etária e o sexo do paciente;</li> 
			<li> A categoria de internação (SUS e/ou Não SUS)  e</li> 
			<li> A condição de saída do paciente.</ul></p>
			</div>
			</div>
			<!-- Fim descricao da ferramenta --> 
				</div>
<script>
jQuery(document).ready(function($) {
	$('#painelFiltro').height($('#painelFiltro').height()-$('#header').outerHeight()-10);
	$('#output').height($('#output').height()-$('#header').outerHeight()-10);
});
</script>
</body>
</html>