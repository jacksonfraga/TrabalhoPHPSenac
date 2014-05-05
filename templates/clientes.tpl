<html>
<head>
	<title>{$nomeSistema}</title>
	<link rel="stylesheet" type="text/css" href="site.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>
<body>
	<div class="header">{$nomeSistema}</div>
	<div class="title">Administa&ccedil;&atilde;o do Site<div class="sair"><a href="logout.php">Sair</a></div></div>
	<div class="container">
		<div class="menu">
			{include file="menu.tpl"}
		</div>
		<div class="content">
			<h3>Cadastro de Cliente</h3>
			<div><a href="clienteNovo.php">NOVO ITEM</a><div>
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
						<td class="center"><input type="hidden" name="foto" value="{$cliente->getFoto()}" /><img src="images/button-view.png" alt="Ver foto" /></td>
						<td class="center"><img src="images/button-edit.png" alt="Editar" /></td>
						<td class="center"><img src="images/button-delete.png" alt="Excluir" /></td>
					</tr>
					{/foreach}
				</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="footer">{$nomeEmpresa} - {$enderecoEmpresa}</div>
</body>
