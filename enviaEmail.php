<?php
	include 'config.php';
	include 'autenticar.php';
	
	require('libs/Smarty.class.php');
	$smarty = new Smarty;
	$mensagem = "";
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$mensagem = "Mensagem enviada com sucesso!<br />";
	}
	
	$smarty->template_dir = 'templates/';

	$smarty->assign('nomeSistema',$nomeSistema);
	$smarty->assign('nomeEmpresa',$nomeEmpresa);
	$smarty->assign('enderecoEmpresa',$enderecoEmpresa);
	$smarty->assign('mensagem',$mensagem);

	$smarty->display('enviaEmail.tpl');	
?>