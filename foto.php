<?php
	include 'config.php';
	include 'autenticar.php';
	include "domain/cliente.php";
	include "domain/clientePersistencia.php";
	
	$clientePersistencia = new ClientePersistencia();


	if (isset($_REQUEST["id"]))
	{
		$cliente = $clientePersistencia->GetById($_REQUEST["id"]);
		$foto = $cliente->getFoto();
		echo "<img src=\"$foto\" alt=\"Foto do Cliente\"/>";
	} else {
		echo "Não foi informado o identificador do cliente.";
	}
?>