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
			<h3>Cadastro de cliente</h3>
			
			<div>
			
			<form action="clientePost.php" method="post" >				
				<input type="hidden" name="hideId" value="{$cliente->getId()}" />
				<div class="row">
					<div class="field"><div class="label">Nome: </div><input type="text" value="{$cliente->getNome()}" id="txtNome" name="txtNome" /></div>
					<div class="field"><div class="label">Cidade: </div><input type="text" value="{$cliente->getCidade()}" id="txtCidade" name="txtCidade" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">RG: </div><input type="text" value="{$cliente->getRG()}" id="txtRG" name="txtRG" /></div>
					<div class="field"><div class="label">Pai: </div><input type="text" value="{$cliente->getPai()}" id="txtPai" name="txtPai" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">End: </div><input type="text" value="{$cliente->getEndereco()}" id="txtEndereco" name="txtEndereco" /></div>
					<div class="field"><div class="label">Estado: </div><input type="text" value="{$cliente->getEstado()}" id="txtEstado" name="txtEstado" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">EMail: </div><input type="text" value="{$cliente->getEmail()}" id="txtEmail" name="txtEmail" /></div>
					<div class="field"><div class="label">M&atilde;e: </div><input type="text" value="{$cliente->getMae()}" id="txtMae" name="txtMae" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">Fone: </div><input type="text" value="{$cliente->getFone()}" id="txtFone" name="txtFone" /></div>
					<div class="field"><div class="label">CPF: </div><input type="text" value="{$cliente->getCPF()}" id="txtCPF" name="txtCPF" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">Foto: </div><input type="text" value="{$cliente->getFoto()}" id="hideFoto" name="hideFoto" /></div>
					
				</div>
				<div>
					<input type="submit" value="Salvar" >
				</div>
				
			</form>
			</div>
			<a href="admin.php">Voltar</a>
		</div>
	</div>
	<div class="footer">{$nomeEmpresa} - {$enderecoEmpresa}</div>
</body>
</html>
