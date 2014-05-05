<?php
	// Edite o seu arquivo php.ini, adicione o diretório da biblioteca do Smarty
	// para o include_path e reinicie o servidor web.
	// Então o código a seguir funcionaria:
	require('libs/Smarty.class.php');
	$smarty = new Smarty;
	
	$smarty->template_dir = 'templates/';
	// $smarty->compile_dir = '/web/www.example.com/smarty/guestbook/templates_c/';
	// $smarty->config_dir = '/web/www.example.com/smarty/guestbook/configs/';
	// $smarty->cache_dir = '/web/www.example.com/smarty/guestbook/cache/';

	$smarty->assign('name','Ned');

	$smarty->display('exemplo1.tpl');
?>

