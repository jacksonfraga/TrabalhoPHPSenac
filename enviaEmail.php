<?php
	include 'config.php';
	include 'autenticar.php';
	
	require('libs/Smarty.class.php');
	$smarty = new Smarty;
	
	$smarty->template_dir = 'templates/';

	$smarty->assign('nomeSistema',$nomeSistema);
	$smarty->assign('nomeEmpresa',$nomeEmpresa);
	$smarty->assign('enderecoEmpresa',$enderecoEmpresa);

	$smarty->display('enviaEmail.tpl');	
?>