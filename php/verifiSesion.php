<?php
	require('connect-bd.php');
	if(comprobar(
		$_POST['usuario'],
		hash("sha256", $_POST['contrasena'])
		)){
		@session_start();
		$_SESSION['loggedin'] = true;
    	$_SESSION['username'] = $_POST['usuario'];
		
		header('Location: ../index.php');

	}
	else{
		header('Location: ../login.php');
	}
?>