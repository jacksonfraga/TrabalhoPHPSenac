<html>
<head>
	<title>{$nomeSistema}</title>
	<link rel="stylesheet" type="text/css" href="site.css" />
</head>
<body>
	<div class="header">{$nomeSistema}</div>
	<div class="title">Administa&ccedil;&atilde;o do Site<div class="sair"><a href="logout.php">Sair</a></div></div>
	<div class="container">
		<div class="menu">
			{include file="menu.tpl"}
		</div>
		<div class="content">
			
		</div>
	</div>
	<div class="footer">{$nomeEmpresa} - {$enderecoEmpresa}</div>
</body>
</html>