<html>
<head>
	<title>{$nomeSistema}</title>
	<link rel="stylesheet" type="text/css" href="site.css" />
</head>
<body>
	<div class="header">{$nomeSistema}</div>
	<div class="title">
		<div>Administa&ccedil;&atilde;o do Site</div>
		<div class="sair"><a href="logout.php">Sair</a></div>
	</div>
	<div class="container">
		<div class="menu">
			{include file="menu.tpl"}
		</div>
		<div class="content">
			<h3>Envia E-Mail</h3>
			{$mensagem}			
			<form action="enviaEmail.php" method="POST">

				<div>De:<br /><input type="text" id="txtDe" /></div>
				<div>Para:<br /><input type="text" id="txtPara" /></div>
				<div>Assunto: <br /><input type="text" id="txtAssunto" /></div>
				<div>Mensagem: <br /><textarea rows="4" cols="50" id="txtMensagem"></textarea></div>
				<div><input type="Submit" value="Enviar" /> <input type="reset" value="Limpar" /></div>
			</form>
			<a href="admin.php">Voltar</a>
		</div>
	</div>
	<div class="footer">{$nomeEmpresa} - {$enderecoEmpresa}</div>
</body>
</html>