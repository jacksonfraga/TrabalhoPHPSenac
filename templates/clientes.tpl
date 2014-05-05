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
			<?php
				include 'menu.php';
			?>
		</div>
		<div class="content">
			<h3>Cadastro de Cliente</h3>
			<div><a href="novoCliente.php">NOVO ITEM</a><div>
			<div>
				<table class="grid">
				<thead>
					<tr>
						<td class="grid-date">DATA</td>
						<td class="grid-title">CONTE&Uacute;DO</td>
						<td class="grid-btn">FOTO</td>
						<td class="grid-btn">EXCLUIR</td>
						<td class="grid-btn">EDITAR</td>
					</tr>

				<thead>
				<tbody>
					{foreach $clientes as $cliente}
					
					<tr>
						<td>{$cliente->getNome()}</td>
						<td>{$cliente->getCPF()}</td>
						<td>X</td>
						<td>Y</td>
						<td>Z</td>
					</tr>
					{/foreach}
				</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="footer">{$nomeEmpresa} - {$enderecoEmpresa}</div>
</body>
