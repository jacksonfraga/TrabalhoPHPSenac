<?php
	include 'config.php';
	include 'autenticar.php';
	include "domain/cliente.php";
	include "domain/clientePersistencia.php";
		
	$clientePersistencia = new ClientePersistencia();
	
	if (isset($_REQUEST["deleteId"]))
	{
		$clientePersistencia->Delete($_REQUEST["deleteId"]);
	}
	
	
	$clientes = $clientePersistencia->GetAll();
	
	require('libs/Smarty.class.php');
	$smarty = new Smarty;
	
	$smarty->template_dir = 'templates/';

	$smarty->assign('nomeSistema',$nomeSistema);
	$smarty->assign('nomeEmpresa',$nomeEmpresa);
	$smarty->assign('enderecoEmpresa',$enderecoEmpresa);
	
	$smarty->assign('clientes',$clientes);

	$smarty->display('clientes.tpl');
?>
