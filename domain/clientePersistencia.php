<?php

class ClientePersistencia {
	
	function GetAll()
	{
		$items = array();
		
		// Exemplo de scrip para exibir os nomes obtidos no arquivo CSV de exemplo
		$delimiter = ',';
		$enclosure = '"';
		
		// Abrir arquivo para leitura		
		$fcliente = fopen(getcwd() . '\clientes.txt', 'r');
		
		if ($fcliente) { 

			// Ler cabecalho do arquivo
			$cabecalho = fgetcsv($fcliente, 0, $delimiter, $enclosure);

			// Enquanto nao terminar o arquivo
			while (!feof($fcliente)) { 

				// Ler uma linha do arquivo
				$linha = fgetcsv($fcliente, 0, $delimiter, $enclosure);
				if (!$linha) {
					continue;
				}

				// Montar registro com valores indexados pelo cabecalho
				$registro = array_combine($cabecalho, $linha);

				// Obtendo o nome
				$cliente = new Cliente();			

				$cliente->setId($registro['Id'].PHP_EOL);
				$cliente->setNome($registro['Nome'].PHP_EOL);
				$cliente->setCidade($registro['Cidade'].PHP_EOL);
				$cliente->setRG($registro['RG'].PHP_EOL);
				$cliente->setPai($registro['Pai'].PHP_EOL);
				$cliente->setEndereco($registro['Endereco'].PHP_EOL);
				$cliente->setEstado($registro['Estado'].PHP_EOL);
				$cliente->setEMail($registro['EMail'].PHP_EOL);
				$cliente->setMae($registro['Mae'].PHP_EOL);
				$cliente->setFone($registro['Fone'].PHP_EOL);
				$cliente->setCPF($registro['CPF'].PHP_EOL);
				$cliente->setFoto($registro['Foto'].PHP_EOL);

				$items[] = $cliente;
			}
							
			fclose($fcliente);
		}
			
		return $items;
		
	}
	
	function GetById($id)
	{
		
	}
	
	function Delete($id)
	{
	
	}
	
	function Post($cliente)
	{
		
	}
}

// $items = array();

// while($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    // $items[] = $row;
// }
// echo 'Count of Order Items...', count($items);

?>