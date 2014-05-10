<?php

class Usuario {
	private $login, $senha;


	public function setLogin($value)
	{
		$this->login = $value;
	}
	public function getLogin()
	{
		return $this->login;
	}
	public function setSenha($value)
	{
		$this->senha = $value;
	}
	public function getSenha()
	{
		return $this->senha;
	}
}

?>