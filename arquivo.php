<?php
	date_default_timezone_set('America/Sao_Paulo');



	$arr = file('jackson.txt'); // Lê todo o arquivo para um vetor

	foreach($arr as $k=>$linha)
	{
		$linha = str_replace("\\,", "<<||>>", $linha);
		$registro = str_getcsv($linha);

		$ultimoID = $registro[0];
		if($registro[0] == 2)
		{
			$registro[2] = date("h:m:s");

			$linha = implode(",", $registro) . "\n";
			$linha = str_replace("<<||>>", "\\,", $linha);

			$arr[$k] = $linha;
			//unset($arr[$k]); // Elininando a linha
		}


	}

	file_put_contents('jackson.txt',$arr);



	echo str_replace("\n", '<br />', file_get_contents('jackson.txt'));

?>