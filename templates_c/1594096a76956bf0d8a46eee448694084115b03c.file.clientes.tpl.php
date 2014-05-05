<?php /* Smarty version Smarty-3.1.18, created on 2014-05-04 22:29:49
         compiled from "templates\clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82865366e8093383e8-83739953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1594096a76956bf0d8a46eee448694084115b03c' => 
    array (
      0 => 'templates\\clientes.tpl',
      1 => 1399253362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82865366e8093383e8-83739953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5366e809541745_77805433',
  'variables' => 
  array (
    'nomeSistema' => 0,
    'clientes' => 0,
    'cliente' => 0,
    'nomeEmpresa' => 0,
    'enderecoEmpresa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366e809541745_77805433')) {function content_5366e809541745_77805433($_smarty_tpl) {?><html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['nomeSistema']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="site.css" />
</head>
<body>
	<div class="header"><?php echo $_smarty_tpl->tpl_vars['nomeSistema']->value;?>
</div>
	<div class="title">Administa&ccedil;&atilde;o do Site<div class="sair"><a href="logout.php">Sair</a></div></div>
	<div class="container">
		<div class="menu">
			<<?php ?>?php
				include 'menu.php';
			?<?php ?>>
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
					<?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->key => $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->_loop = true;
?>
					
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNome();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getCPF();?>
</td>
						<td>X</td>
						<td>Y</td>
						<td>Z</td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="footer"><?php echo $_smarty_tpl->tpl_vars['nomeEmpresa']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['enderecoEmpresa']->value;?>
</div>
</body>
<?php }} ?>
