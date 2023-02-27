<?php
function triangulodavida($nome, $nomesocial, $nomecasado, $apelido)
{
	function calculonome ($nome)
		{
			$nome = strtolower($nome);
			$nome = str_replace(" ", "", $nome);
			$datanome = preg_split("/(?<!^)(?!$)/u", $nome);
			$cnt = count($datanome);
			$tudo = "";
			$vldnum = 0;
			while($cnt > $vldnum){
				switch ($datanome[$vldnum]) {
					case 'a':
					$tudo .= "1";
					break;

					case 'b':
					$tudo .= '2'; 
					break;

					case 'c':
					$tudo .= '3'; 
					break;

					case 'd':
					$tudo .= '4';
					break;

					case 'e':
					$tudo .= "5";
					break;

					case 'f':
					$tudo .= '8';
					break;

					case 'g':
					$tudo .= '3';
					break;

					case 'h':
					$tudo .= '5';
					break;

					case 'i':
					$tudo .= "1";
					break;

					case 'j':
					$tudo .= '1';
					break;

					case 'k':
					$tudo .= '2';
					break;

					case 'l':
					$tudo .= '3';
					break;

					case 'm':
					$tudo .= '4';
					break;

					case 'n':
					$tudo .= '5';
					break;

					case 'o':
					$tudo .= "7";
					break;

					case 'p':
					$tudo .= '8';
					break;

					case 'q':

					$tudo .= '1';
					break;

					case 'r':
					$tudo .= '2';
					break;

					case 's':
					$tudo .= '3';
					break;

					case 't':
					$tudo .= '4';
					break;

					case 'u':
					$tudo .= "6";
					break;

					case 'v':
					$tudo .= '6';
					break;

					case 'w':
					$tudo .= '6';
					break;

					case 'x':
					$tudo .= '6';
					break;

					case 'y':
					$tudo .= '1';
					break;

					case 'z':
					$tudo .= '7';
					break;

					case 'ç':
					$tudo .= '6';
					break;
					
					case 'ä':
					$tudo = "2";
					break;

					case 'ã':
					$tudo .= "4";
					break;

					case 'â':
					$tudo .= "2";
					break;

					case 'á':
					$tudo .= "3";
					break;

					case 'à':
					$tudo .= "2";
					break;

					case 'ë':
					$tudo = "10";
					break;

					case 'ê':
					$tudo .= "10";
					break;

					case 'é':
					$tudo .= "7";
					break;

					case 'è':
					$tudo .= "10";
					break;

					case 'ï':
					$tudo .= "2";
					break;

					case 'î':
					$tudo .= "2";							
					break;

					case 'í':
					$tudo .= "3";
					break;

					case 'ì':
					$tudo .= "2";
					break;

					case 'ö':
					$tudo .= "14";
					break;

					case 'õ':
					$tudo .= "10";
					break;

					case 'ô':
					$tudo .= "14";
					$vldnum++;
					break;

					case 'ó':
					$tudo .= "9";
					break;

					case 'ò':
					$tudo .= "14";
					break;

					case 'ü':
					$tudo .= "12";
					break;

					case 'û':
					$tudo .= "12";
					break;

					case 'ú':
					$tudo .= "8";
					break;

					case 'ù':
					$tudo .= "12";
					break;

					default:

					break;
				}
				$vldnum++;
			}
			return $tudo;
		}
		
		function str_shuffle_unicode($str) {
				$tmp = preg_split('/(?<!^)(?!$)/u', $str);
		    	shuffle($tmp);
			    return join("", $tmp);
		}


		function randon($tmn, $id)
		{
			switch ($id) {
				case 1:
					$str= 'aeiou';
					break;
				case 2:
					$str= 'äãâáà';
					break;
				case 3:
					$str= 'ëêéè';
					break;
				case 4:
					$str= 'ïîíì';
					break;
				case 5:
					$str= 'öõôóò';
					break;
				case 6:
					$str= 'üûúù';
					break;
				
				default:
					$str = "";
				break;
			}
			$shuffled = str_shuffle_unicode($str);
			$total = $shuffled;
	    	$shuffled1 = str_shuffle_unicode($total);
	    	$result = mb_substr($shuffled1, 0, $tmn, "UTF-8");
	    	return $result;
		}	

		function somarsequencia($seq)
		{
			$soma = str_split($seq);
			$cntd = 0;
			$tmnseq = count($soma);
			$linha = "";
			$vld = "";
			while ($tmnseq > $cntd) {
				if (isset($soma[$cntd]) && isset($soma[$cntd+1])) {
					$vld = $soma[$cntd]+$soma[$cntd+1];
					$cnt = strlen($vld);
					if ($cnt == 2) {
						$divvld = str_split($vld); $linha .= $divvld[0]+$divvld[1];
					}else{
						$linha .=$vld;
					}
				}
				$cntd++;
			}
			return $linha;
		}

		function regradetres($vl1, $vl2, $vl3)
		{
			$retorno = $vl3*$vl2/$vl1;
			$retorno = number_format($retorno, 0);
			return $retorno;
		}

		function vlrptds($seq)
		{
			$rptds = "";
			$arr = str_split($seq);
			$cnt = count($arr);
			$nm = 0;
			$nm1 = 0;
			$nm2 = 0;
			while ($cnt > $nm) {
				if (isset($arr[$nm]) && isset($arr[$nm+1]) && isset($arr[$nm+2])) {

					if($arr[$nm] == $arr[$nm+1] && $arr[$nm+1] == $arr[$nm+2]){
						$rptds .= $nm.","; $nm1 = $nm+1; $nm2 = $nm+2;
						$rptds .= $nm1.",";
						$rptds .= $nm2;
					}
				}
				$nm++;
			}
			return $rptds;
		}

		function gerartriangulo($seq)
		{
			$vlrspt = vlrptds($seq);
			if (empty($vlrspt)) {
				$mtrxrpt = array(0=>$vlrspt);
			}else{
				$vlrsptd = explode(",", $vlrspt);
				$mtrxrpt = array(0=>$vlrsptd);
			} 
			$arrseq = str_split($seq);
			$mtrxtrg = array(0=>$arrseq);
			$vlrseq = strlen($seq);
			$nmrlinhas = "";
			$cntd = 1;
			$cntd1 = 0;
			while($cntd < $vlrseq){
				unset($arrseq, $arrseq1);
				$seq1 = somarsequencia($seq);
				$vlrspt = vlrptds($seq1);
				$arrseq = explode(",", $vlrspt);
				$mtrxrpt[] = $arrseq;
				$arrseq1  = str_split($seq1);
				$mtrxtrg[] = $arrseq1;
				$seq = $seq1;
				$cntd++;
				$cntd1++;
			}
			$nmrlinhas = count($mtrxtrg);
			$retorno = array($nmrlinhas, $mtrxtrg, $mtrxrpt);
			return $retorno;
		}

		function limpar_nome($nome, $nmrlinhas, $mtrxtrg, $mtrxrpt)
		{
			$nome = strtolower($nome);
			$nome = str_replace(' ','',$nome);
			$divnome = preg_split("/(?<!^)(?!$)/u", $nome);
			$qtdnome = count($divnome);
			$cntd = 0;
			$cntd1 = 0;
			$cntd2 = 0;		
			$cntdnv = 0;
			$novonome = $divnome;
			$novonome1 = $divnome;
			$novonome2 = $divnome;
			while($cntdnv < $nmrlinhas){
				$linha = $mtrxrpt[$cntdnv];
				$linhatr = $mtrxtrg[$cntdnv];
				$linhabs = $mtrxtrg[0];
				if (empty($linha)) {
					$cntdnv++;
				}else{
					$qtdlinha = count($linhatr);
					$qtdtot = count($linhabs);
					$key = $linha[0];
					$cntlinha = count($linha);
					$prctk1 = regradetres($qtdlinha, 100, $cntlinha);
					$key2 = regradetres(100, $qtdtot, $prctk1);
					$bks2 = 3;
					while($cntd1 < $bks2){
						if (isset($divnome[$key2+$cntd1])) {
							switch ($divnome[$key2+$cntd1]) {
								case 'a':
									$novonome[$key2+$cntd1] = randon(1, 2);
									$novonome1[$key2+$cntd1] = randon(1, 2);
									$novonome2[$key2+$cntd1] = randon(1, 2);
									break;
								case 'e':
									$novonome[$key2+$cntd1] = randon(1, 3);
									$novonome1[$key2+$cntd1] = randon(1, 3);
									$novonome2[$cntdnv] = randon(1, 3);
									break;
								case 'i':
									$novonome[$key2+$cntd1] = randon(1, 4);
									$novonome1[$key2+$cntd1] = randon(1, 4);
									$novonome2[$key2+$cntd1] = randon(1, 4);
									break;
								case 'o':
									$novonome[$key2+$cntd1] = randon(1, 5);
									$novonome1[$key2+$cntd1] = randon(1, 5);
									$novonome2[$key2+$cntd1] = randon(1, 5);
									break;
								case 'u':
									$novonome[$key2+$cntd1] = randon(1, 6);
									$novonome1[$key2+$cntd1] = randon(1, 6);
									$novonome2[$key2+$cntd1] = randon(1, 6);
									break;
								default:
									// code...
								break;
							}
						}
						$cntd1++;
					}
					$cntdnv++;
				}	
			}
			$novonome = implode("", $novonome); $novonome1 = implode("", $novonome1); $novonome2 = implode("", $novonome2);
			$arraynomelimpo = array($novonome, $novonome1, $novonome2);

			return $arraynomelimpo;		
		}

		function extra ($nome)
		{
			$nome = strtolower($nome);
			$nome = str_replace(' ','',$nome);
			$divnome = preg_split("/(?<!^)(?!$)/u", $nome);
			$qtdnome = count($divnome);
			$cntd = 0;
			$cntd1 = 0;
			$novonome = array();
			$novonome1 = array();
			$novonome2 = array();
			while ($cntd < $qtdnome) {
				if ($cntd1 < 4) {
					while ($cntd1 < 4) {
						if (isset($divnome[$cntd])) {
							switch ($divnome[$cntd]) {
								case 'a':
									$novonome[$key2+$cntd1] = randon(1, 2);
									$novonome1[$key2+$cntd1] = randon(1, 2);
									$novonome2[$key2+$cntd1] = randon(1, 2);
									break;
								case 'e':
									$novonome[$key2+$cntd1] = randon(1, 3);
									$novonome1[$key2+$cntd1] = randon(1, 3);
									$novonome2[$cntdnv] = randon(1, 3);
									break;
								case 'i':
									$novonome[$key2+$cntd1] = randon(1, 4);
									$novonome1[$key2+$cntd1] = randon(1, 4);
									$novonome2[$key2+$cntd1] = randon(1, 4);
									break;
								case 'o':
									$novonome[$key2+$cntd1] = randon(1, 5);
									$novonome1[$key2+$cntd1] = randon(1, 5);
									$novonome2[$key2+$cntd1] = randon(1, 5);
									break;
								case 'u':
									$novonome[$key2+$cntd1] = randon(1, 6);
									$novonome1[$key2+$cntd1] = randon(1, 6);
									$novonome2[$key2+$cntd1] = randon(1, 6);
									break;
								default:
									// code...
								break;
							}
						}
						$cntd1++;
					}
					$cntd++;
				}else{
					$cntd = $qtdnome;
				}
			}
			$novonome = implode("", $novonome); $novonome1 = implode("", $novonome1); $novonome2 = implode("", $novonome2);
			$arraynomelimpo = array($novonome, $novonome1, $novonome2);

			return $arraynomelimpo;	
		}

		function limpar_nome_1($nome, $nmrlinhas, $mtrxtrg, $mtrxrpt)
		{
			$nome = strtolower($nome);
			$nome = str_replace(' ','',$nome);
			$divnome = preg_split("/(?<!^)(?!$)/u", $nome);
			$qtdnome = count($divnome);
			$cntd = 0;
			$cntd1 = 0;
			$cntd2 = 0;		
			$cntdnv = 0;
			$novonome = $divnome;
			while($cntdnv < $nmrlinhas){
				$linha = $mtrxrpt[$cntdnv];
				$linhatr = $mtrxtrg[$cntdnv];
				$linhabs = $mtrxtrg[0];
				if (empty($linha)) {
					$cntdnv++;
				}else{
					$qtdlinha = count($linhatr);
					$qtdtot = count($linhabs);
					$key = $linha[0];
					$cntlinha = count($linha);
					$prctk1 = regradetres($qtdlinha, 100, $cntlinha);
					$key2 = regradetres(100, $qtdtot, $prctk1);
					$bks2 = 3;
					while($cntd1 < $bks2){
						if (isset($divnome[$key2+$cntd1])) {
							switch ($divnome[$key2+$cntd1]) {
								case 'a':
									$novonome[$key2+$cntd1] = randon(1, 2);
									break;
								case 'e':
									$novonome[$key2+$cntd1] = randon(1, 3);
									break;
								case 'i':
									$novonome[$key2+$cntd1] = randon(1, 4);
									break;
								case 'o':
									$novonome[$key2+$cntd1] = randon(1, 5);
									break;
								case 'u':
									$novonome[$key2+$cntd1] = randon(1, 6);
									break;
								default:
									// code...
								break;
							}
						}
						$cntd1++;
					}
					$cntdnv++;
				}	
			}
			$novonome = implode("", $novonome); $nomearray = array($novonome);
			

			return $nomearray;		
		}


		function str_matrix($matriz)
		{
			$vlrclmatrix = count($matriz);
			$cntdcl = 0;
			$cntdln = 0;
			$tudo = "";
			while($vlrclmatrix > $cntdln){
				if (empty($matriz[$cntdln])) {
					$cntdln++;
				}else{
					$linhas = $matriz[$cntdln];
					$vlrlnmatrix = count($linhas);
					while($cntdcl < $vlrlnmatrix){
						if(empty($linhas[$cntdcl])){
							$cntdcl++;
						}else{
							$tudo .= $linhas[$cntdcl];
							$cntdcl++;
						}
					}
					$cntdln++;
				}
			}
			return $tudo;
		}
		


		$start = 1;
		$trinagulo1 = array();
		$trinagulo2 = array();
		$trinagulo3 = array();
		$novonome1 = array();
		$novonome2 = array();
		$novonome3 = array();

		while ($start < 5) {
			switch ($start) {
				case 1:
					$seqNM = calculonome($nome);
					$retornoNM = gerartriangulo($seqNM);
					$triangulo = $retornoNM[1];
					if (empty($retornoNM[2])) {
						$dadosNM = extra($nome);
						$seqNM1 = calculonome($dadosNM[0]);
						$seqNM2 = calculonome($dadosNM[1]);
						$seqNM3 = calculonome($dadosNM[2]);
						$retornoNM1 = gerartriangulo($seqNM1);
						$retornoNM2 = gerartriangulo($seqNM2);
						$retornoNM3 = gerartriangulo($seqNM3);
						while (!empty($retornoNM1[2]) && !empty($retornoNM2[2]) && !empty($retornoNM3[2])) {
							unset($dadosNM, $retornoNM1, $retornoNM2, $retornoNM3);
							$dadosNM = limpar_nome_1($nome);
							$seqNM1 = calculonome($dadosNM[0]);
							$seqNM2 = calculonome($dadosNM[1]);
							$seqNM3 = calculonome($dadosNM[2]);
							$retornoNM1 = gerartriangulo($seqNM1);
							$retornoNM2 = gerartriangulo($seqNM2);
							$retornoNM3 = gerartriangulo($seqNM3);
						}
						$trinagulo1[] = $retornoNM1[1];
						$trinagulo1[] = $retornoNM2[1];
						$trinagulo1[] = $retornoNM3[1];
						$nomenovo1[] = $dadosNM[0];
						$nomenovo1[] = $dadosNM[1];
						$nomenovo1[] = $dadosNM[2];
					}
					else{
						$dadosNM = limpar_nome($nome, $retornoNM[0], $retornoNM[1], $retornoNM[2]);
						$seqNM1 = calculonome($dadosNM[0]);
						$seqNM2 = calculonome($dadosNM[1]);
						$seqNM3 = calculonome($dadosNM[2]);
						$retornoNM1 = gerartriangulo($seqNM1);
						$retornoNM2 = gerartriangulo($seqNM2);
						$retornoNM3 = gerartriangulo($seqNM3);
						$str_matrix_NM1 = str_matrix($retornoNM1[2]);
						$str_matrix_NM2 = str_matrix($retornoNM2[2]);
						$str_matrix_NM3 = str_matrix($retornoNM3[2]);
						$vldwhl = 0;
						if (empty($str_matrix_NM1)) {
							$triangulo1[] = $retornoNM1[1];
							$novonome1[] = $dadosNM[0];
						}else{

							// while (!empty($vldstrbs)) {
							// 	$nomevld = $dadosNM[0];
							// 	unset($dadosNM, $vldstrbs);
							// 	$dadosNM = limpar_nome_1($nomevld, $retornoNM[0], $retornoNM[1], $retornoNM[2]);
							// 	$seqNM1 = calculonome($dadosNM[0]);
							// 	unset($retornoNM1);
							// 	$retornoNM1 = gerartriangulo($seqNM1);
							// 	$vldstrbs = str_matrix($retornoNM1[2]);
							// 	echo $vldstrbs;
							// }
						}
						
						// if (empty($str_matrix_NM2)) {
						// 	$triangulo2[] = $retornoNM2[1];
						// 	$novonome2[] = $dadosNM[1];
						// }else{
						// 	$cntdrw = 0;
						// 	while ($vldwhl == 0) {
						// 		if($cntdrw == 0){
						// 			$nomew2 = $dadosNM[1];
						// 		}else{
						// 			$nomew2 = $dadosNM[0];
						// 		}

						// 		$dadosNM = limpar_nome_1($nomew2 , $retornoNM[0], $retornoNM[1], $retornoNM[2]);
						// 		unset($dadosNM);
						// 		$seqNM1 = calculonome($dadosNM[0]);
						// 		unset($retornoNM1);
						// 		$retornoNM1 = gerartriangulo($seqNM1);
						// 		$vldstrbs = str_matrix($retornoNM1[2]);
						// 		if(empty($vldstrbs)){
						// 			$vldwhl++;
						// 		}
						// 		$cntdrw++;
						// 	}
						// }
						// if (!empty($retornoNM3[2])) {
						// 	$arratvld3 = $retornoNM3[2];
						// 	while (!empty($arratvld3)) {
						// 		unset($arratvld3);
						// 		$nomevld = $dadosNM[2];
						// 		unset($dadosNM);
						// 		$dadosNM = limpar_nome_1($nomevld, $retornoNM[0], $retornoNM[1], $retornoNM[2]);
						// 		$seqNM1 = calculonome($dadosNM[0]);
						// 		$retornoNM3 = gerartriangulo($seqNM1);
						// 		$arratvld3 = $retornoNM3[2];
						// 	}
						// }
						
						// $trinagulo1[] = $retornoNM1[1];
						// $trinagulo1[] = $retornoNM2[1];
						// $trinagulo1[] = $retornoNM3[1];
						// $nomenovo1[] = $dadosNM[0];
						// $nomenovo1[] = $dadosNM[1];
						// $nomenovo1[] = $dadosNM[2];
					}
				break;
				case 2:
					// code...
					break;
				case 3:
					// code...
					break;
				case 4:
					// code...
					break;
				
				default:
					// code...
					break;
			}
			$start++;
		}
			// $trinagulos = array($trinagulo1);
			// $nomes_novos = array($nomenovo1);
			// $nomes_brutos = array($nome, $nomecasado, $nomesocial, $apelido);
			// return array($trinagulos, $nomes_novos, $nomes_brutos);
			return $triangulo;
		

} 
   $retorno = triangulodavida("Pablo Guilherme Leite de Souza", "Pablo Guilherme", "Pablo Guilherme Leite de Souza", "Papinha");
   // $triangulos = $retorno[1];
   // $triangulo1 = $triangulos[0];
   // $linha1 = $triangulo1[1];
   // echo $linha1;
//   	$trinagulosgerais = $retorno[0]; $nomesgerais = $retorno[1];
//   	$trinagulo1 = $trinagulosgerais[0]; $nomenovo1 = $nomesgerais[0];
//    $matrix = $trinagulo1[0]; $nomeop1 = $nomenovo1[0];
//    $cnt = 0; $qtdlinha = count($matrix);
//    	echo '<p style="text-align: center; font-size: 18px;">'.$nomeop1.'</p>';
//    while ($cnt < $qtdlinha) {
//    	echo '<p style="text-align: center; font-size: 15px;">'.implode("", $matrix[$cnt])."</p>";
//    	$cnt++;
//    }

	$cntdr = count($retorno);
	$cntd= 0;
	while ($cntd < $cntdr) {
		
	}

   

// ?>

 <!-- <p style="text-align: center;"></p> -->