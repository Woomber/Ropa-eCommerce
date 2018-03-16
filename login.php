<?php
    session_start();
    if (@$_SESSION['loggedin'] == true) { 
        header("Location: index.php");
    }
?>
<html>
<head>
	<meta charset="utf-8"/>
    <title>Pellier - Ropa Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include("php/header.php");
        include("html/menu.html");    
    ?>
    <div class="cuerpo">
  <form method="post" action="php/verifiSesion.php">
	<div id="ingreso">
        <h1>Iniciar sesión</h1>
		<p><i class="fas fa-user"></i>
		<input type="text" class="form-control" name="usuario" required="required">
		<p><i class="fas fa-key"></i>
		<input type="password" class="form-control" name="contrasena" required="required">
        <p><input class="btn btn-send" type="submit" name="publicar" value="Ingresar">
	</div>
    </form>
    </div>
  

    <?php include("html/footer.html"); ?>
</body>
</html>