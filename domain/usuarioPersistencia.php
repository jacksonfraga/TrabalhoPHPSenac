<?php

class UsuarioPersistencia {
	
	function validarLogin($usuario)
	{
		return $usuario->getLogin() == "admin" and $usuario->getSenha() == "123";
	}
}

?>