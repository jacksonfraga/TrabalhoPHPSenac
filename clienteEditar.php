<?php
	include 'config.php';
	include "domain/cliente.php";
	include "domain/clientePersistencia.php";
	
	var $cliente;
	$clientePersistencia = new ClientePersistencia();
	
	if ($_SERVER['REQUEST_METHOD'] == "GET")
	{
		if (isset($_REQUEST["hideId"]))
		{
			$hideId = $_REQUEST["hideId"];
			$cliente = $clientePersistencia.getById($hideId);
		}
	} 
	else if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
	}
	
	
	if (isset($_REQUEST["hideId"]))
		$hideId = $_REQUEST["hideId"];
	if (isset($_REQUEST["txtNome"]))
		$txtNome = $_REQUEST["txtNome"];
	if (isset($_REQUEST["txtCidade"]))
		$txtCidade = $_REQUEST["txtCidade"];
	if (isset($_REQUEST["txtRG"]))
		$txtRG = $_REQUEST["txtRG"];
	if (isset($_REQUEST["txtPai"]))
		$txtPai = $_REQUEST["txtPai"];
	if (isset($_REQUEST["txtEndereco"]))
		$txtEndereco = $_REQUEST["txtEndereco"];
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
	if (isset($_REQUEST["hideFoto"]))
		$hideFoto = $_REQUEST["hideFoto"];

	require('libs/Smarty.class.php');
	$smarty = new Smarty;
	
	$smarty->template_dir = 'templates/';

	$smarty->assign('nomeSistema',$nomeSistema);
	$smarty->assign('nomeEmpresa',$nomeEmpresa);
	$smarty->assign('enderecoEmpresa',$enderecoEmpresa);
			
	$smarty->assign('Cliente', $cliente);

	$smarty->display('clienteEditar.tpl');
?>