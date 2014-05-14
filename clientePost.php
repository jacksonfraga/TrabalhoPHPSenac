<?php
	include 'config.php';
	include 'autenticar.php';
	include "domain/cliente.php";
	include "domain/clientePersistencia.php";

	$errorMessage = "";
	$cliente = new Cliente();
	$clientePersistencia = new ClientePersistencia();

	if ($_SERVER['REQUEST_METHOD'] == "GET")
		if (isset($_REQUEST["id"]))
		{
			$cliente = $clientePersistencia->GetById($_REQUEST["id"]);
		}


	if (isset($_REQUEST["hideId"]))
		$cliente->setId($_REQUEST["hideId"]);
	if (isset($_REQUEST["txtNome"]))
		$cliente->setNome($_REQUEST["txtNome"]);
	if (isset($_REQUEST["txtCidade"]))
		$cliente->setCidade($_REQUEST["txtCidade"]);
	if (isset($_REQUEST["txtRG"]))
		$cliente->setRG($_REQUEST["txtRG"]);
	if (isset($_REQUEST["txtPai"]))
		$cliente->setPai($_REQUEST["txtPai"]);
	if (isset($_REQUEST["txtEndereco"]))
		$cliente->setEndereco($_REQUEST["txtEndereco"]);
	if (isset($_REQUEST["txtEstado"]))
		$cliente->setEstado($_REQUEST["txtEstado"]);
	if (isset($_REQUEST["txtEmail"]))
		$cliente->setEmail($_REQUEST["txtEmail"]);
	if (isset($_REQUEST["txtMae"]))
		$cliente->setMae($_REQUEST["txtMae"]);
	if (isset($_REQUEST["txtFone"]))
		$cliente->setFone($_REQUEST["txtFone"]);
	if (isset($_REQUEST["txtCPF"]))
		$cliente->setCPF($_REQUEST["txtCPF"]);
	if (isset($_REQUEST["hideFoto"]))
		$cliente->setFoto($_REQUEST["hideFoto"]);
		
	if (isset($_FILES['userfile']) and ($_FILES['userfile']['size'] > 0))
	{
		$uploaddir = 'images/fotos/';	
		$ext = end((explode(".", $_FILES['userfile']['name'])));	
		date_default_timezone_set('America/Sao_Paulo');	
		$dataHora = date('Ymdhis', time());
		
		$uploadPath = $uploaddir . "/Foto_" . $cliente->getId() . "_" . $dataHora . "." . $ext;
		
		//if ($_FILES['userfile']['size'] > 1048576)// 1Mb
		if ($_FILES['userfile']['size'] > 524288) // 500Kb
		{
			$errorMessage = "O tamanho da foto foi excedido ".$_FILES['userfile']['size']."\n";
		} else if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadPath)) {
				$cliente->setFoto($uploadPath);
		} else {			
			$errorMessage = "Não possível copiar a foto\n";
		}
	}
	

	if (($_SERVER['REQUEST_METHOD'] == "POST") and ($errorMessage == ""))
	{
		$id = $clientePersistencia->Post($cliente);
		$redirect = "clientes.php";	
		header("location:$redirect");
	}

	require('libs/Smarty.class.php');
	$smarty = new Smarty;

	$smarty->template_dir = 'templates/';
	
	$smarty->assign('nomeSistema',$nomeSistema);
	$smarty->assign('nomeEmpresa',$nomeEmpresa);
	$smarty->assign('enderecoEmpresa',$enderecoEmpresa);
	$smarty->assign('errorMessage',$errorMessage);

	$smarty->assign('cliente', $cliente);
	$smarty->display('clientePost.tpl');
?>