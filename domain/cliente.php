<?php

class Cliente
{
	private $Id, $Nome, $Cidade, $RG, $Pai, $Endereco, $Estado, $EMail, $Mae, $Fone, $CPF, $Foto;

	public function getId() {
		return $this->Id;
	}

	public function setId($value) {
		$this->Id = $value;
	}

	public function getNome() {
		return $this->Nome;
	}

	public function setNome($value) {
		$this->Nome = $value;
	}

	public function getCidade() {
		return $this->Cidade;
	}

	public function setCidade($value) {
		$this->Cidade = $value;
	}

	public function getRG (){
		return $this->RG;
	}

	public function setRG($value) {
		$this->RG = $value;
	}

	public function getPai (){
		return $this->Pai;
	}

	public function setPai($value) {
		$this->Pai = $value;
	}

	public function getEndereco (){
		return $this->Endereco;
	}

	public function setEndereco($value) {
		$this->Endereco = $value;
	}

	public function getEstado (){
		return $this->Estado;
	}

	public function setEstado($value) {
		$this->Estado = $value;
	}

	public function getEMail (){
		return $this->EMail;
	}

	public function setEMail($value) {
		$this->EMail = $value;
	}

	public function getMae (){
		return $this->Mae;
	}

	public function setMae($value) {
		$this->Mae = $value;
	}

	public function getFone (){
		return $this->Fone;
	}

	public function setFone($value) {
		$this->Fone = $value;
	}

	public function getCPF (){
		return $this->CPF;
	}

	public function setCPF($value) {
		$this->CPF = $value;
	}

	public function getFoto (){
		return $this->Foto;
	}

	public function setFoto($value) {
		$this->Foto = $value;
	}
}
?>