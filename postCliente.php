<?php
	include 'config.php';
	
	$txtNome = "";
	$txtCidade = "";
	$txtRG = "";
	$txtPai = "";
	$txtEnd = "";
	$txtEstado = "";
	$txtEmail = "";
	$txtMae = "";
	$txtFone = "";
	$txtCPF	 = "";
	
	print_r($_REQUEST);
	
	if (isset($_REQUEST["txtNome"]))
		$txtNome = $_REQUEST["txtNome"];
	if (isset($_REQUEST["txtCidade"]))
		$txtCidade = $_REQUEST["txtCidade"];
	if (isset($_REQUEST["txtRG"]))
		$txtRG = $_REQUEST["txtRG"];
	if (isset($_REQUEST["txtPai"]))
		$txtPai = $_REQUEST["txtPai"];
	if (isset($_REQUEST["txtEnd"]))
		$txtEnd = $_REQUEST["txtEnd"];
	if (isset($_REQUEST["txtEstado"]))
		$txtEstado = $_REQUEST["txtEstado"];
	if (isset($_REQUEST["txtEmail"]))
		$txtEmail = $_REQUEST["txtEmail"];
	if (isset($_REQUEST["txtMae"]))
		$txtMae = $_REQUEST["txtMae"];
	if (isset($_REQUEST["txtFone"]))
		$txtFone = $_REQUEST["txtFone"];
	if (isset($_REQUEST["txtCPF"]))
		$txtCPF = $_REQUEST["txtCPF"];
?>