<?php
	function startsWith($haystack, $needle)
	{
		return $needle === "" || strpos($haystack, $needle) === 0;
	}

	
class ClientePersistencia {

	
	private $tipoRegistro;
	function __construct() {
	   $this->tipoRegistro = "cliente";
	}

	public function GetAll()
	{
		$items = array();

		$arquivo = file('clientes.txt'); // Lê todo o arquivo para um vetor

		if ($arquivo) {

			foreach($arquivo as $k=>$linha)
			{


				$linha = str_replace("\\,", "<<||>>", $linha);


				$registro = str_getcsv($linha);

				if (strtoupper($registro[0]) != strtoupper($this->tipoRegistro)) {
					continue;
				}

				// Obtendo o nome
				$cliente = new Cliente();

				$cliente->setId($registro[1]);
				$cliente->setNome($registro[2]);
				$cliente->setCidade($registro[3]);
				$cliente->setRG($registro[4]);
				$cliente->setPai($registro[5]);
				$cliente->setEndereco($registro[6]);
				$cliente->setEstado($registro[7]);
				$cliente->setEMail($registro[8]);
				$cliente->setMae($registro[9]);
				$cliente->setFone($registro[10]);
				$cliente->setCPF($registro[11]);
				$cliente->setFoto($registro[12]);

				$items[] = $cliente;
			}
		}

		return $items;

	}

	public function GetById($id)
	{
		$cliente = new Cliente();

		$arquivo = file('clientes.txt'); // Lê todo o arquivo para um vetor

		if ($arquivo) {

			foreach($arquivo as $k=>$linha)
			{

				$registro = str_getcsv($linha);

				if (strtoupper($registro[0]) != strtoupper($this->tipoRegistro)) {
					continue;
				}
				
				
				if ($registro[1] == $id)
				{
					// Obtendo o nome
					$cliente = new Cliente();

					$cliente->setId($registro[1]);
					$cliente->setNome($registro[2]);
					$cliente->setCidade($registro[3]);
					$cliente->setRG($registro[4]);
					$cliente->setPai($registro[5]);
					$cliente->setEndereco($registro[6]);
					$cliente->setEstado($registro[7]);
					$cliente->setEMail($registro[8]);
					$cliente->setMae($registro[9]);
					$cliente->setFone($registro[10]);
					$cliente->setCPF($registro[11]);
					$cliente->setFoto($registro[12]);
					
					break;
				}
			}
		}

		return $cliente;
	}

	function Delete($id)
	{

		$arquivo = file('clientes.txt'); // Lê todo o arquivo para um vetor

		if ($arquivo) {

			foreach($arquivo as $k=>$linha)
			{
				$registro = str_getcsv($linha);

				if (strtoupper($registro[0]) != strtoupper($this->tipoRegistro)) {
					continue;
				}

				if ($registro[1] == $id)
				{
					unset($arquivo[$k]); // Elininando a linha
				}
			}

			file_put_contents('clientes.txt',$arquivo);
		}
	}
	
	function Post($cliente)
	{
		$id = $cliente->getId();
		$lastID = 0;
		
		$valido = true;
		
		$messageErro = "";
		

		if($cliente->getNome() == '')
		{
			$valido = false;
			$messageErro .= "Informe o campo Nome<br />";
		}
		if($cliente->getCidade() == '')
		{
			$valido = false;
			$messageErro .= "Informe o campo Cidade<br />";
		}
		if($cliente->getRG() == '')
		{
			$valido = false;
			$messageErro .= "Informe o campo RG<br />";
		}
		if($cliente->getEndereco() == '')
		{
			$valido = false;
			$messageErro .= "Informe o campo Endereco<br />";
		}
		if($cliente->getEstado() == '')
		{
			$valido = false;
			$messageErro .= "Informe o campo Estado<br />";
		}
		if($cliente->getEMail() == '')
		{
			$valido = false;
			$messageErro .= "Informe o campo EMail<br />";
		}
		if($cliente->getMae() == '')
		{
			$valido = false;
			$messageErro .= "Informe o campo Mae<br />";
		}
		if($cliente->getCPF() == '')
		{
			$valido = false;
			$messageErro .= "Informe o campo CPF<br />";
		}
		
		if (!$valido)
		{
			throw new Exception($messageErro . "<br />");
		}

		$arquivo = file('clientes.txt'); // Lê todo o arquivo para um vetor

		if ($arquivo) {

			foreach($arquivo as $k=>$linha)
			{
				$registro = str_getcsv($linha);				
				
				if (strtoupper($registro[0]) != strtoupper($this->tipoRegistro)) {
					continue;
				}

				if ($registro[1] > $lastID)
					$lastID = $registro[1];

				if ($registro[1] == $id)
				{
					unset($registro);
					
					$registro[] = $this->tipoRegistro;
					$registro[] = $cliente->getId();
					$registro[] = $cliente->getNome();
					$registro[] = $cliente->getCidade();
					$registro[] = $cliente->getRG();
					$registro[] = $cliente->getPai();
					$registro[] = $cliente->getEndereco();
					$registro[] = $cliente->getEstado();
					$registro[] = $cliente->getEMail();
					$registro[] = $cliente->getMae();
					$registro[] = $cliente->getFone();
					$registro[] = $cliente->getCPF();
					$registro[] = $cliente->getFoto();
					
					foreach($registro as $j=>$field)
					{
						$registro[$j] = str_replace(",", "\,", $field);
					}

		
					
					$arquivo[$k] = join(",", $registro) . "\n";
					
					

					break;
				}

			}


		}

		if (!$id)
		{

			$id = $lastID+1;
			$novoRegistro = array($this->tipoRegistro,
				$id,
				$cliente->getNome(),
				$cliente->getCidade(),
				$cliente->getRG(),
				$cliente->getPai(),
				$cliente->getEndereco(),
				$cliente->getEstado(),
				$cliente->getEMail(),
				$cliente->getMae(),
				$cliente->getFone(),
				$cliente->getCPF(),
				$cliente->getFoto()
			);


			foreach($novoRegistro as $j=>$field)
			{
				$novoRegistro[$j] = str_replace(",", "\,", $field);
			}
			$strNovo = join(",", $novoRegistro);
			echo $strNovo . "<br><br><br>";
			
			if (!startsWith($strNovo, "\n"))
				$strNovo = "\n" . $strNovo;
				
			$arquivo[] = $strNovo;

		}


		file_put_contents('clientes.txt', $arquivo);

		return $id;
	}
}

// $items = array();

// while($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    // $items[] = $row;
// }
// echo 'Count of Order Items...', count($items);

?>