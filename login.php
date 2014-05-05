<?php
	include 'domain/Usuario.php';
	include 'domain/UsuarioPersistencia.php';
	include 'config.php';

	$messageError = "";
	$txtUser = "";
	$txtPass = "";
	
	if (isset($_REQUEST["txtUser"]) and $_REQUEST["txtUser"] != "")
	{
		$txtUser = $_REQUEST["txtUser"];
		
		if (isset($_REQUEST["txtPass"]) and $_REQUEST["txtPass"] != "")
		{
			$txtPass = $_REQUEST["txtPass"];
			
			$usuario = new Usuario();
			$usuario->setLogin($txtUser);
			$usuario->setSenha($txtPass);
			
			$usuarioPersistencia = new UsuarioPersistencia();
			
			if ($usuarioPersistencia->validarLogin($usuario))
			{	
				session_start();
				$_SESSION["authorization"] = $usuario;
				// deveria fazer a validação do login
				$redirect = "admin.php";	
				header("location:$redirect");	
			}
			else
				$messageError = "Usuário ou senha inválidos";
		}
		else
			$messageError = "Informe o campo Senha";
	}
	else
		$messageError = "Informe o campo Usuário";
		
		if ($_SERVER['REQUEST_METHOD'] == "GET")
			$messageError = "";
			
		require('libs/Smarty.class.php');
	$smarty = new Smarty;
	
	$smarty->template_dir = 'templates/';

	$smarty->assign('nomeSistema',$nomeSistema);
	$smarty->assign('nomeEmpresa',$nomeEmpresa);
	$smarty->assign('enderecoEmpresa',$enderecoEmpresa);
	$smarty->assign('messageError',$messageError);
	$smarty->assign('txtUser',$txtUser);
	$smarty->assign('txtPass',$txtPass);

	$smarty->display('login.tpl');
?>