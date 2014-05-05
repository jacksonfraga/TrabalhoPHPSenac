<?php
	include 'config.php';
?>
<html>
<head>
	<title><?php echo $nomeSistema; ?></title>
	<link rel="stylesheet" type="text/css" href="site.css" />
</head>
<body>
	<div class="header"><?php echo $nomeSistema; ?></div>
	<div class="title">Administa&ccedil;&atilde;o do Site<div class="sair"><a href="logout.php">Sair</a></div></div>
	<div class="container">
		<div class="menu">
			<?php
				include 'menu.php';
			?>
		</div>
		<div class="content">
			
		</div>
			<a href="admin.php">Voltar</a>
	</div>
	<div class="footer"><?php echo $nomeEmpresa; ?> - <?php echo $enderecoEmpresa; ?></div>
</body>
</html>
