<?php
	
	session_start();
	if (!isset($_SESSION["authorization"]))
	{
		$redirect = "login.php";	
		header("location:$redirect");	
	}
?>
