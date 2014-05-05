<?php
	include 'config.php';
	
	$txtNome = "";
	$txtCidade = "";
	$txtRG = "";
	$txtPai = "";
	$txtEnd = "";
	$txtEstado = "";
	$txtEmail = "";
	$txtMae = "";
	$txtFone = "";
	$txtCPF	 = "";
	
	if (isset($_REQUEST["txtNome"]))
		$txtNome = $_REQUEST["txtNome"];
	if (isset($_REQUEST["txtCidade"]))
		$txtCidade = $_REQUEST["txtCidade"];
	if (isset($_REQUEST["txtRG"]))
		$txtRG = $_REQUEST["txtRG"];
	if (isset($_REQUEST["txtPai"]))
		$txtPai = $_REQUEST["txtPai"];
	if (isset($_REQUEST["txtEnd"]))
		$txtEnd = $_REQUEST["txtEnd"];
	if (isset($_REQUEST["txtEstado"]))
		$txtEstado = $_REQUEST["txtEstado"];
	if (isset($_REQUEST["txtEmail"]))
		$txtEmail = $_REQUEST["txtEmail"];
	if (isset($_REQUEST["txtMae"]))
		$txtMae = $_REQUEST["txtMae"];
	if (isset($_REQUEST["txtFone"]))
		$txtFone = $_REQUEST["txtFone"];
	if (isset($_REQUEST["txtCPF"]))
		$txtCPF = $_REQUEST["txtCPF"];
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
			<h3>Cadastro de Cliente</h3>
			<div>NOVO ITEM</div>
			<div>
			<?php
				if (isset($_REQUEST["txtNome"]))
				{
					echo "<div>Cadastrado com sucesso!</div>";
				}
				
			?>
			<form action="novoCliente.php" method="post">
				<div class="row">
					<div class="field"><div class="label">Nome: </div><input type="text" value="<?php echo $txtNome; ?>" id="txtNome" name="txtNome" /></div>
					<div class="field"><div class="label">Cidade: </div><input type="text" value="<?php echo $txtCidade; ?>" id="txtCidade" name="txtCidade" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">RG: </div><input type="text" value="<?php echo $txtRG; ?>" id="txtRG" name="txtRG" /></div>
					<div class="field"><div class="label">Pai: </div><input type="text" value="<?php echo $txtPai; ?>" id="txtPai" name="txtPai" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">End: </div><input type="text" value="<?php echo $txtEnd; ?>" id="txtEnd" name="txtEnd" /></div>
					<div class="field"><div class="label">Estado: </div><input type="text" value="<?php echo $txtEstado; ?>" id="txtEstado" name="txtEstado" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">EMail: </div><input type="text" value="<?php echo $txtEmail; ?>" id="txtEmail" name="txtEmail" /></div>
					<div class="field"><div class="label">M&atilde;e: </div><input type="text" value="<?php echo $txtMae; ?>" id="txtMae" name="txtMae" /></div>
				</div>
				<div class="row">
					<div class="field"><div class="label">Fone: </div><input type="text" value="<?php echo $txtFone; ?>" id="txtFone" name="txtFone" /></div>
					<div class="field"><div class="label">CPF: </div><input type="text" value="<?php echo $txtCPF; ?>" id="txtCPF" name="txtCPF" /></div>
				</div>
				<div>
					<input type="submit" value="OK" />
					<input type="reset" value="Limpar" />
				</div>
				
			</form>
			</div>
			<a href="admin.php">Voltar</a>
		</div>
	</div>
	<div class="footer"><?php echo $nomeEmpresa; ?> - <?php echo $enderecoEmpresa; ?></div>
</body>
</html>
