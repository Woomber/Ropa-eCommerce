<?php
	require('connect-bd.php');
	if(comprobar($_POST['usuario'],$_POST['contrasena'])){
		session_start();
		$_SESSION['loggedin'] = true;
    	$_SESSION['username'] = $_POST['usuario'];

    	//if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {}
    		header('Location: ../index.php');

	}
	else{
		header('Location: ../login.php');
	}
?>