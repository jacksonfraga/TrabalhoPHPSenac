<?php

class UsuarioPersistencia {
	private $tipoRegistro;
	function __construct() {
	   $this->tipoRegistro = "usuario";
	}

	function validarLogin($usuario)
	{
		//return $usuario->getLogin() == "admin" and $usuario->getSenha() == "123";

		$arquivo = file('clientes.txt'); // Lê todo o arquivo para um vetor

		if ($arquivo) {

			foreach($arquivo as $k=>$linha)
			{

				$registro = str_getcsv($linha);

				if (strtoupper($registro[0]) != strtoupper($this->tipoRegistro)) {
					continue;
				}

				if ($usuario->getLogin() == $registro[1])
				{
					return $usuario->getSenha() == $registro[2];
				}
			}
		}

		return false;
	}
}

?>