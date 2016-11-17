<?php
	
	//include_once('../includes/functions.php');
	//include_once('../includes/banco.php');

	$labels = array();

	function drawText($source, $cx, $cy, $valor) {
		global $black;
		global $white;

		$padding = 3;
		$bbox = imagettfbbox(12, 0, './arial.ttf', $valor);

		imagefilledrectangle($source, $cx+$bbox[6]-$padding, $cy+$bbox[7]-$padding-8, $cx+$bbox[2]+$padding+3, $cy+$bbox[3]+$padding-8, $white);
		imagettftext($source, 12, 0, $cx, $cy-8, $black, './arial.ttf', $valor);
	}

	function rotatedellipse($source, $cx, $cy, $width, $height, $rotateangle, $direcao, $color, $valor) {
		global $labels;

		$step=5;
		$cosangle=cos(deg2rad($rotateangle));
		$sinangle=sin(deg2rad($rotateangle));

		$squishratio = $height/$width;
		$nopreviouspoint = true;

		for ($angle=0; $angle<=(180+$step); $angle+=$step) {
			$ox = ($width * cos(deg2rad($angle)));
			$oy = ($width * sin(deg2rad($angle))) * $squishratio;

			$x = ($ox * $cosangle) - ($oy * $sinangle);
			$y = ($ox * $sinangle) + ($oy * $cosangle);

			if ($nopreviouspoint) {
				$px=$x;
				$py=$y;
				$nopreviouspoint=false;
			}
			else if ($angle == 180-$step*5) {
				if ($direcao == 1) {
					$x_ = $cx - $width * $cosangle;
					$y_ = $cy - $width * $sinangle;
					$xi = $cx+$x - $x_;
					$yi = $cy+$y - $y_;
				}
				else {
					$x_ = $cx + $width * $cosangle;
					$y_ = $cy + $width * $sinangle;
					$xi = $cx-$x - $x_;
					$yi = $cy-$y - $y_;
				}

				$len = sqrt($xi*$xi + $yi*$yi);

				$xi = $xi/$len * 20;
				$yi = $yi/$len * 20;

				$xj1 = $xi * 0.707106781 - $yi * 0.707106781;
				$yj1 = $xi * 0.707106781 + $yi * 0.707106781;

				$xj2 = $xi * 0.707106781 + $yi * 0.707106781;
				$yj2 = - $xi * 0.707106781 + $yi * 0.707106781;

				imagefilledpolygon($source, array($x_,$y_,$x_+$xj1,$y_+$yj1,$x_+$xj2,$y_+$yj2), 3, $color);
			}

			if ($direcao == 1) {
				imageline($source, $cx+$px, $cy+$py, $cx+$x, $cy+$y, $color);
				if ($angle == 90)
					$labels[] = array($source, $cx+$px, $cy+$py, $valor);
			}
			else {
				imageline($source, $cx-$px, $cy-$py, $cx-$x, $cy-$y, $color);
				if ($angle == 90)
					$labels[] = array($source, $cx-$px, $cy-$py, $valor);
			}

			$px=$x;
			$py=$y;
		}
	}

	function desenhaLinha($source, $prev_lon, $prev_lat, $lon, $lat, $color, $valor) {
		global $labels;

		if ($prev_lon == $lon && $prev_lat == $lat) {
			$size = 50;
			imagearc($source, $prev_lon - $size/2, $prev_lat - $size/2, $size, $size, 0, 359.9, $color);
			$labels[] = array($source, $prev_lon, $prev_lat-$size/1.5, $valor);

			$x_ = $prev_lon;
			$y_ = $prev_lat;
			$xi = $cx-$x - $x_;
			$yi = $cy-$y - $y_;

			$len = sqrt($xi*$xi + $yi*$yi);

			$xi = $xi/$len * 20;
			$yi = $yi/$len * 20;

			$xj1 = $xi * 0.707106781 - $yi * 0.707106781;
			$yj1 = $xi * 0.707106781 + $yi * 0.707106781;

			$xj2 = $xi * 0.707106781 + $yi * 0.707106781;
			$yj2 = - $xi * 0.707106781 + $yi * 0.707106781;

			imagefilledpolygon($source, array($x_,$y_,$x_+$xj1,$y_+$yj1,$x_+$xj2,$y_+$yj2), 3, $color);
		}
		else {
			$c_lon = ($prev_lon + $lon) / 2;
			$c_lat = ($prev_lat + $lat) / 2;

			$w = sqrt(($prev_lon - $lon)*($prev_lon - $lon) + ($prev_lat - $lat)*($prev_lat - $lat))/2;

			$h = $w/3;

			if ($prev_lon < $lon) {
				if ($prev_lat < $lat)
					$ang_final = rad2deg(acos(($lon - $c_lon)/$w));
				else if ($prev_lat == $lat)
					$ang_final = 360;
				else if ($prev_lat > $lat)
					$ang_final = rad2deg(-acos(($lon - $c_lon)/$w));
			}
			else if ($prev_lon == $lon) {
				if ($prev_lat < $lat)
					$ang_final = 90;
				else if ($prev_lat > $lat)
					$ang_final = 270;
			}
			else if ($prev_lon > $lon) {
				if ($prev_lat < $lat)
					$ang_final = rad2deg(acos(($lon - $c_lon)/$w));
				else if ($prev_lat == $lat)
					$ang_final = 180;
				else if ($prev_lat > $lat)
					$ang_final = rad2deg(-acos(($lon - $c_lon)/$w));
			}

			if ($ang_final)
				rotatedellipse($source, $c_lon, $c_lat, $w, $h, $ang_final, 2, $color, $valor);
		}
	}

	$coord[350100] = array(800,220);
	$coord[350560] = array(360,330);
	$coord[350590] = array(690,110);
	$coord[350780] = array(660,230);
	$coord[350940] = array(840,380);
	$coord[351090] = array(930,380);
	$coord[351310] = array(580,410);
	$coord[351460] = array(430,350);
	$coord[351860] = array(280,440);
	$coord[351885] = array(430,480);
	$coord[352430] = array(250,320);
	$coord[352510] = array(530,180);
	$coord[352760] = array(540,540);
	$coord[353130] = array(100,350);
	$coord[353950] = array(280,190);
	$coord[354020] = array(390,180);
	$coord[354090] = array(370,400);
	$coord[354340] = array(530,330);
	$coord[354625] = array(760,380);
	$coord[354750] = array(700,640);
	$coord[354760] = array(800,520);
	$coord[354790] = array(910,270);
	$coord[355090] = array(680,500);
	$coord[355140] = array(690,400);
	$coord[355150] = array(655,335);
	$coord[355170] = array(420,270);

	
	$ano = $params['ano'];
	$mes = $params['mes'];

	$cod_cid10 = $params['cod_cid10'];
	$cod_sexo = $params['cod_sexo'];
	$cod_catint = $params['cod_catint'];

	$cod_csaida = '';
	if ((count($params['cod_csaida']) > 0) && (count($params['cod_csaida']) < 6)) {
		foreach ($params['cod_csaida'] as $value) {
			if ($cod_csaida)
				$cod_csaida .= ',';
			$cod_csaida .= '?';
		}
	}

	if ($cod_cid10) {
		if ($cod_cid10 == '-1') {
			$cod_cid10_lista = '';
			if ($params['cod_cid10_lista']) {
				foreach (explode(',',str_replace(' ','',$params['cod_cid10_lista'])) as $value) {
					if ($cod_cid10_lista)
						$cod_cid10_lista .= ',';
					$cod_cid10_lista .= '?';
				}
			}
		}
		else {
			$minmax_cid10 = explode('-', $cod_cid10);
			$cod_cid10_min = $minmax_cid10[0];
			$cod_cid10_max = $minmax_cid10[1];
		}
	}


	$extra = '';
	$extra_tabela = '';
	$extra_group = '';
	$extra_from = '';

	if ($ano)
		$extra .= ' AND EXTRACT(YEAR FROM data_saida) = ?';
	if ($mes)
		$extra .= ' AND EXTRACT(MONTH FROM data_saida) = ?';

	$procede_regiao = $params['procede_regiao'];
	$procede_microregiao = $params['procede_microregiao'];
	$procede_municipio = $params['procede_municipio'];

	if ($procede_municipio != '000000')
		$extra .= ' AND alta.cod_mnibge = ?';
	else if ($procede_microregiao != '00') {
		$extra .= ' AND mn_mregiao_alta.cod_mregiao = ? AND mn_mregiao_alta.cod_mnibge = alta.cod_mnibge';
	}

	$microregiao = $params['microregiao'];
	$municipio = $params['municipio'];
	$hospital = $params['hospital'];

	if ($hospital != '000000')
		$extra .= ' AND alta.cod_hosp = ?';
	else if ($municipio != '000000')
		$extra .= ' AND hospital.cod_mnibge = ?';
	else if ($microregiao != '00')
		$extra .= ' AND mn_mregiao_hosp.cod_mregiao = ?';

	if ($cod_cid10_min || $cod_cid10_max || $cod_cid10_lista) {
		$extra_tabela = ', afeccao';
		$extra .= ' AND afeccao.cod_alta = alta.cod_alta AND afeccao.ordem_afeccao = 1';
	}

	if ($cod_cid10_lista) {
			$extra .= " AND afeccao.cod_cid10 IN ($cod_cid10_lista)";
	}
	else {
		if ($cod_cid10_min)
			$extra .= ' AND substring(afeccao.cod_cid10 for 3) >= ?';
		if ($cod_cid10_max)
			$extra .= ' AND substring(afeccao.cod_cid10 for 3) <= ?';
	}

	if ((count($params['faixa_etaria']) > 0) && (count($params['faixa_etaria']) < 12)) {
		$extra .= ' AND (';
		foreach ($params['faixa_etaria'] as $n=>$value) {
			$minmax_idade = explode('-', $value);
			if (count($minmax_idade) == 3) {
				if ($n > 0)
					$extra .= ' OR';
				if ($minmax_idade[2] == 'a')
					$extra .= " (substring(idade_int from 4 for 1) = 'a' AND idade_int >= ? and idade_int <= ?)";
				else
					$extra .= " (substring(idade_int from 4 for 1) = 'm' OR substring(idade_int from 4 for 1) = 'd' OR idade_int = '000a')";
			}
		}
		$extra .= ')';
	}

	if ($cod_sexo)
		$extra .= ' AND cod_sexo = ?';

	if ($cod_csaida)
		$extra .= " AND cod_csaida IN ($cod_csaida)";

	if ($cod_catint == 1)
		$extra .= ' AND cod_catint IN (?,?,?,?,?,?)';
	else if ($cod_catint == 2)
		$extra .= ' AND cod_catint NOT IN (?,?,?,?,?,?)';

	if ($_REQUEST['modo'] == 'mapa') {
		$tipo = 'cod';
	}
	else {
		$tipo = 'dsc';
		$extra_from .= ', hospital.dsc_hosp as dsc_hosp';
		$extra_group .= ', hospital.dsc_hosp';
	}

	$select = new selectQuery(
				"alta LEFT JOIN mn_mregiao as mn_mregiao_alta ON mn_mregiao_alta.cod_mnibge = alta.cod_mnibge, hospital, mn_mregiao as mn_mregiao_hosp, mn_ibge as mn_ibge_alta, mn_ibge as mn_ibge_hosp $extra_tabela",
				"mn_ibge_alta.{$tipo}_mnibge as {$tipo}_mnibge_alta, mn_mregiao_alta.cod_mregiao as cod_mregiao_alta, mn_ibge_hosp.{$tipo}_mnibge as {$tipo}_mnibge_hosp, count(*) as total $extra_from",
				"WHERE  alta.cod_hosp = hospital.cod_hosp
					AND mn_mregiao_hosp.cod_mnibge = hospital.cod_mnibge
					AND mn_ibge_alta.cod_mnibge = alta.cod_mnibge
					AND mn_ibge_hosp.cod_mnibge = hospital.cod_mnibge
					$extra
				GROUP BY mn_ibge_alta.{$tipo}_mnibge, mn_ibge_hosp.{$tipo}_mnibge, mn_mregiao_alta.cod_mregiao $extra_group");

	if ($ano)
		$select->inInt($ano);
	if ($mes)
		$select->inInt($mes);

	if ($procede_municipio != '000000')
		$select->inStr($procede_municipio);
	else if ($procede_microregiao != '00')
		$select->inStr($procede_microregiao);

	if ($hospital != '000')
		$select->inStr($hospital);
	else if ($municipio != '000000')
		$select->inStr($municipio);
	else if ($microregiao != '00')
		$select->inStr($microregiao);

	if ($cod_cid10 == '-1') {
		if ($params['cod_cid10_lista']) {
			foreach (explode(',',str_replace(' ','',$params['cod_cid10_lista'])) as $value) {
				$select->inStr($value);
			}
		}
	}
	else {
		if ($cod_cid10_min)
			$select->inStr($cod_cid10_min);
		if ($cod_cid10_max)
			$select->inStr($cod_cid10_max);
	}

	if ((count($params['faixa_etaria']) > 0) && (count($params['faixa_etaria']) < 12)) {
		foreach ($params['faixa_etaria'] as $value) {
			$minmax_idade = explode('-', $value);
			if (count($minmax_idade) == 3) {
				if ($minmax_idade[2] == 'a') {
					$select->inStr($minmax_idade[0].'a');
					$select->inStr($minmax_idade[1].'a');
				}
			}
		}
	}

	if ($cod_sexo)
		$select->inStr($cod_sexo);

	if ((count($params['cod_csaida']) > 0) && (count($params['cod_csaida']) < 6)) {
		foreach ($params['cod_csaida'] as $value) {
			$select->inStr($value);
		}
	}

	if ($cod_catint == 1 || $cod_catint == 2) {
		$select->inStr('200');
		$select->inStr('201');
		$select->inStr('202');
		$select->inStr('204');
		$select->inStr('207');
		$select->inStr('208');
	}

	//die($select->getQuery());

	$select->execute();

	

	if ($_REQUEST['modo'] == 'mapa') {
		
		if ( ($row = $select->resGetRowAssoc()) == false){ //Mensagem de aviso: fluxo não encontrado - saída de dados em forma de mapa
			$source = imagecreatefromgif('../img/msgmaviso_ferramentafluxo.gif');
			imagepng($source);
		}
		else{
		$source = @imagecreatefromgif('mapa_regiao.gif');
		imagesetthickness($source, 3);

		$blue = imagecolorallocate($source, 0, 0, 255);
		$gray = imagecolorallocate($source, 128, 128, 128);
		$black = imagecolorallocate($source, 0, 0, 0);
		$white = imagecolorallocate($source, 255, 255, 255);

		$grad_color[1] = imagecolorallocate($source, 132, 132, 132);
		$grad_color[2] = imagecolorallocate($source, 99, 255, 99);
		$grad_color[3] = imagecolorallocate($source, 33, 192, 33);
		$grad_color[4] = imagecolorallocate($source, 255, 231, 66);
		$grad_color[5] = imagecolorallocate($source, 255, 132, 0);
		$grad_color[6] = imagecolorallocate($source, 231, 66, 66);
		$grad_color[7] = imagecolorallocate($source, 132, 33, 33);

		$cos = 0.707106781;
		$sin = 0.707106781;

		$max = 0;
		
		while (($row = $select->resGetRowAssoc()) !== false) {

			if (!$row['cod_mregiao_alta'] && $procede_regiao == '13')
				continue;

			if ($row['cod_mregiao_alta'] && $procede_regiao == '-1')
				continue;

			if (!$row['cod_mregiao_alta']) {
				$label_fora_drs13 = true;
				$cod_mnibge_alta = 0;
			}
			else {
				$cod_mnibge_alta = $row['cod_mnibge_alta'];
			}
			$cod_mnibge_hosp = $row['cod_mnibge_hosp'];
			$total_hosp = $row['total'];

			$valor = $demanda[$cod_mnibge_alta][$cod_mnibge_hosp] += $total_hosp;
			$demanda[$cod_mnibge_alta][$cod_mnibge_hosp] = $valor;

			$total += $total_hosp;

			if ($valor > $max && $cod_mnibge_alta != $cod_mnibge_hosp)
				$max = $valor;
		}

		if ($demanda != null) {
			foreach ($demanda as $cod_mnibge_alta => $demanda2) {
				if ($demanda2 != null) {
					foreach ($demanda2 as $cod_mnibge_hosp => $valor) {

						if ($cod_mnibge_alta != $cod_mnibge_hosp)
							$nivel = ceil($valor*6/$max)+1;
						else
							$nivel = 1;

						desenhaLinha($source, $coord[$cod_mnibge_alta][0], $coord[$cod_mnibge_alta][1], $coord[$cod_mnibge_hosp][0], $coord[$cod_mnibge_hosp][1], $grad_color[$nivel], $valor);
					}
				}
			}
		}

		foreach ($labels as $label)
			drawText($label[0], $label[1], $label[2], $label[3]);

		if ($label_fora_drs13)
			drawText($source, 0, 23, '                Fora do DRS XIII');

		header("Content-Type: image/png");
		imagepng($source);
		}			
		
	} //fim construção do mapa - modo mapa de saída de dados
	
	/*else { //ínicio construção tabela - modo tabela de saída de dados
	
		if ( ($row = $select->resGetRowAssoc()) == false){ //Mensagem de aviso: fluxo não encontrado - saída de dados em forma de tabela
			echo "<p align='center'><font size='2'>N&atildeo h&aacute altas registradas para os crit&eacuterios escolhidos.</font></p>";
		}
		else{		
		while (($row = $select->resGetRowAssoc()) !== false) {
			$dsc_mnibge_alta = $row['dsc_mnibge_alta'];
			$dsc_mnibge_hosp = $row['dsc_mnibge_hosp'];
			$dsc_hosp = preg_replace('/(.*?) - (.*?)$/','$1',$row['dsc_hosp']);
			//$dsc_hosp = preg_replace('/(.*?) - (.*?)$/','$1<br><i>($2)</i>',$row['dsc_hosp']); //repeticao cidade removida
			$total_hosp = $row['total'];

			if (!$row['cod_mregiao_alta'] && $procede_regiao == '13')
				continue;

			if ($row['cod_mregiao_alta'] && $procede_regiao == '-1')
				continue;

			$demanda_hosp[$dsc_hosp][$dsc_mnibge_alta] += $total_hosp;
			$demanda_munic[$dsc_mnibge_hosp][$dsc_mnibge_alta] += $total_hosp;

			$hosp_munic[$dsc_mnibge_hosp][$dsc_hosp] += $total_hosp;
			$lista_mnibge_alta[$dsc_mnibge_alta] += $total_hosp;
			$lista_mnibge_hosp[$dsc_mnibge_hosp] += $total_hosp;

			$total += $total_hosp;
		}

		if ($hosp_munic[$dsc_mnibge_hosp])
			ksort($hosp_munic[$dsc_mnibge_hosp]);

		if ($lista_mnibge_alta)
			ksort($lista_mnibge_alta);

		if ($lista_mnibge_hosp)
			ksort($lista_mnibge_hosp);
	 
		echo "<div align='justify' class='tabela_quadro' id='tabela' style='margin-left:20px; margin-top:60px;'>";
			echo "<div class='tabela_quadro_titulo'><span class='icon_tabela'></span>Resultados</div>";
			echo "<table id='tabDados' border='0' class='tabela_resultado' cellspacing='3' style='width:99.5%;'>";
		if ($lista_mnibge_alta) {
			echo "<tr><td class='tabela_titulo'>
					<div style='float: right;'>ORIGEM</div>
					<div style='float: left;vertical-align: bottom; margin-top:150px; padding-left:50%;'><p style='vertical-align:bottom; text-align:center;'>DESTINO</p></div>
				  </td>";
			foreach ($lista_mnibge_alta as $dsc_mnibge_alta => $x) {

				if (strpos($dsc_mnibge_alta, 'ZZZZZ') !== false) {
					$dsc_mnibge_alta = str_replace('ZZZZZ','',$dsc_mnibge_alta);
					$style = 'externo';
				}
				else {
					$style = '';
				}
				echo "<td class='verticaltext'><div style='text-align:left; width:300px; margin-left:-130%;'>".$dsc_mnibge_alta."</div></td>";
			}
			echo "<td class='verticaltext'><div style='text-align:left; width:300px; margin-left:-130%;'>T O T A L</div></td></tr>";
			
		}
		echo "<tr style='background-color:#999; height:1px; padding: 0px; margin: 0px;'>";
		echo "<td></td><td></td>";
			foreach ($lista_mnibge_alta as $dsc_mnibge_alta => $x) {
				echo "<td></td>";}
		echo "</tr>";
 			 
		if ($lista_mnibge_alta && $lista_mnibge_hosp) {
			$cor = 'cor1';
			$linha_cor = 'linha_alternada';
			foreach ($lista_mnibge_hosp as $dsc_mnibge_hosp => $total_hosp) {
				if ($cor == 'cor0' || $linha_cor == 'linha_alternada'){
					$cor = 'cor1';
					$linha_cor = 'linha_normal';}
				else{
					$linha_cor = 'linha_alternada';}

				$md5 = md5($dsc_mnibge_hosp);

				$expand = "<a href=\"javascript:void($('.$md5').toggle());\" style='font-size: 10px;'>[expandir]</a>";

				echo "<tr class='".$linha_cor." hovertable' style='height:45px; width:100%;'>
				<td align='left' style='width:500px;'> 
						<div style='padding-left:5px;'>
							<div float='left'  style='display:inline-block; width:3px; height: 45px; background-color: #c3c3c3; vertical-align: middle; '><a href='#'></a></div>
							<div float='right' style='width:90%; display:inline-block; padding-left:5px; '>$dsc_mnibge_hosp $expand</div>						
						</div>
					</td></td>";
				foreach ($lista_mnibge_alta as $dsc_mnibge_alta => $x) {
					echo "<td style='text-align: center; vertical-align:middle; width: 100px;'>". $demanda_munic[$dsc_mnibge_hosp][$dsc_mnibge_alta]*1 ."</td>";
				}
				echo "<td style='text-align: center; vertical-align:middle;'>". $total_hosp*1 ."</td></tr>";

				$cor_hosp = 'cor1';
				$linha_cor_sub = 'linha_alternada_sub';
				foreach ($hosp_munic[$dsc_mnibge_hosp] as $dsc_hosp => $total_hosp) {

					if ($cor_hosp == 'cor0'){
						$cor_hosp = 'cor1';
						$linha_cor_sub = 'linha_normal_sub'; }
					else{
						$cor_hosp = 'cor0';
						$linha_cor_sub = 'linha_alternada_sub'; }

					echo "<tr class='".$linha_cor_sub." hovertable $md5 style='display: none;'>";
					echo "<td align='left' style='padding-left: 40px;'>
							<div style='padding-left: 5px;' >
								<div float='left'  style='display:inline-block; width:3px; height: 40px; background-color: #999; vertical-align: middle; padding-top: 0px;'><a href='#'></a></div>
								<div float='right' style='width:90%; display:inline-block; padding-left: 15px; vertical-align: middle'>".$dsc_hosp."</div>
							</div>
					 	</td>";
					foreach ($lista_mnibge_alta as $dsc_mnibge_alta => $x) {
						echo "<td style='text-align: center; vertical-align:middle;'>". $demanda_hosp[$dsc_hosp][$dsc_mnibge_alta]*1 ."</td>";
					}
					echo "<td style='text-align: center; vertical-align:middle;'>". $total_hosp*1 ."</td></tr>";
				}
			}
		}

		if ($lista_mnibge_alta) {
			echo "<tr class='linha_total' style='height: 45px; '>";
			echo "<td><div style='padding-left:5px;'>
						<div float='left'  style='display:inline-block; width:3px; height: 60px; background-color: #999; vertical-align: middle; '><a href='#'></a></div>
						<div float='right' style='width:90%; display:inline-block; padding-left:10px; '>Total </div>
						</div>
				  </td>";
			foreach ($lista_mnibge_alta as $dsc_mnibge_alta => $total_alta) {
				echo "<td style='text-align: center'>". $total_alta*1 ."</td>";
			}
			echo "<td style='text-align: center'>". $total*1 ."</td></tr>";
		}
		echo "
			</table>
			</div>
			<div>
				<br><br>
				 <div style='display:inline-block; text-align: right; font-size:10px;'> * Incluindo RN sem patologias no Cap.21</div><br>
			</div>
			</div>";

		}
	}*/
	
?>
