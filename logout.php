<?php
	
	session_start();
	$_SESSION["authorization"] = NULL;
	
	$redirect = "login.php";	
	header("location:$redirect");	
	
?>
