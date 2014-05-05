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

				$cliente->setId($registro['Id']);
				$cliente->setNome($registro['Nome']);
				$cliente->setCidade($registro['Cidade']);
				$cliente->setRG($registro['RG']);
				$cliente->setPai($registro['Pai']);
				$cliente->setEndereco($registro['Endereco']);
				$cliente->setEstado($registro['Estado']);
				$cliente->setEMail($registro['EMail']);
				$cliente->setMae($registro['Mae']);
				$cliente->setFone($registro['Fone']);
				$cliente->setCPF($registro['CPF']);
				$cliente->setFoto($registro['Foto']);

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