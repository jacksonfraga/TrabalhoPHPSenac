<html>
<head>
	<title>{$nomeSistema}</title>
	<link rel="stylesheet" type="text/css" href="site.css" />
	<link href="css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.js"></script>
	<style type="text/css">
		.div-link:hover img {
			background-color: #DAA520;
		}
	</style>
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
			<h3>Cadastro de Cliente</h3>
			<div><a href="clientePost.php">NOVO ITEM</a><div>
			<div>
				<table class="grid">
				<thead>
					<tr>
						<td class="grid-date">DATA</td>
						<td class="grid-title">CONTE&Uacute;DO</td>
						<td class="grid-btn">FOTO</td>
						<td class="grid-btn">EDITAR</td>
						<td class="grid-btn">EXCLUIR</td>
					</tr>

				<thead>
				<tbody>
					{foreach $clientes as $cliente}
					
					<tr>
						<td>{$cliente->getNome()}</td>
						<td>{$cliente->getCPF()}</td>
						<td class="center"><div class="div-link btn-foto" ><a href="foto.php?id={$cliente->getId()}"><img src="images/button-view.png" alt="Ver foto" /></a></div></td>
						<td class="center"><div class="div-link" ><a href="clientePost.php?id={$cliente->getId()}"><img src="images/button-edit.png" alt="Editar" /></a></div></td>
						<td class="center"><div class="div-link" ><a href="clientes.php?deleteId={$cliente->getId()}"><img src="images/button-delete.png" alt="Excluir" /></a></div></td>
					</tr>
					{/foreach}
				</tbody>
				</table>
			</div>
			<br />
			<a href="admin.php">Voltar</a>
		</div>
	</div>
	<div class="footer">{$nomeEmpresa} - {$enderecoEmpresa}</div>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('.btn-foto a').click(function(event){
				event.preventDefault();
				
				$('<div>').load(this.href).dialog({ modal : true });
			})
		});
	</script>
</body>
