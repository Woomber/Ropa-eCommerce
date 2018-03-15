<?php
    @session_start();
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
    <link rel="stylesheet" type="text/css" href="css/header.css"/>
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/validate-register.js"></script>
</head>
<body>
	<?php
    include("php/header.php");
    include("html/menu.html");

    if(@$_POST["calle"]){
        require("php/register-form-3.php");
    }
	else if(@$_POST["usuario"]){
		require("php/register-form-2.php");
	} else {
		require("php/register-form-1.php");
    }
    
    //Descomentar cuando ya haya estilo para que no estorbe con el botón
    //include("html/footer.html");
	?>
</body>
</html>