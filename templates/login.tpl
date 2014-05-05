<html>
<head>
	<title>{$nomeSistema}</title>
	<link rel="stylesheet" type="text/css" href="site.css" />
</head>
<body>
	<div class="header">{$nomeSistema}</div>
	<div class="title">Administa&ccedil;&atilde;o do Site</div>
	<div class="container">
		<div class="login">
		
		<form action="login.php" method="post">
			<div><div class="label">Usu&aacute;rio:</div><input type="text" id="txtUser" name="txtUser" value="{$txtUser}" /></div>
			<div><div class="label">Senha:</div><input type="password" id="txtPass" name="txtPass" value="{$txtPass}" /></div>
			<div><div class="label"></div><span class="msg-error">{$messageError}</span></div>
			<div><div class="label"></div><input type="submit" value="Entrar" /></div>
		</form>
		</div>
	</div>
	<div class="footer">{$nomeEmpresa} - {$enderecoEmpresa}</div>
</body>
</html>