<html>
<head>
  <meta charset="utf-8" />
  <title>Pellier</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/main.css" />
  <link rel="stylesheet" type="text/css" href="../css/header.css" />
  <link rel="stylesheet" type="text/css" href="../css/footer.css" />
  <link rel="stylesheet" type="text/css" href="../css/menu.css" />
  <link rel="stylesheet" type="text/css" href="../css/contact.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<?php

    require("connect-bd.php");

    if(!@isset($_POST["usuario"])){
        header("Location: ../login.php");
    }

        try {
    if(userExists($_POST["usuario"])){
        throw new Exception("Ese usuario ya existe :c");
    }

    if(sendClientInfo(
        $_POST["usuario"],
        hash("sha256", $_POST["contrasena"]),
        $_POST["nombre"],
        $_POST["apellidoP"],
        $_POST["apellidoM"],
        $_POST["telefono"],
        $_POST["email"],
        $_POST["rfc"],
        $_POST["razonSocial"],
        ($_POST["tipoPersona"] == "fisica")? 1 : 0
    ) == false) throw new Exception("Error de conexión con la base de datos.");
    
    if(sendCCInfo(
        $_POST["usuario"],
        $_POST["tarjeta1"] . $_POST["tarjeta2"] . $_POST["tarjeta3"] . $_POST["tarjeta4"],
        $_POST["cav"],
        substr($_POST["fechaEx"], 0, 2),
        substr($_POST["fechaEx"], 3, 2)
     ) == false) throw new Exception("Error de conexión con la base de datos.");

    if(isset($_POST["calleF"])){
        if(sendDireccionInfo(
            $_POST["usuario"],
            0,
            $_POST["calle"],
            $_POST["numInt"],
            $_POST["numExt"],
            $_POST["colonia"],
            $_POST["ciudad"],
            $_POST["estado"],
            $_POST["cp"]
        ) == false) throw new Exception("Error de conexión con la base de datos.");
        if(sendDireccionInfo(
            $_POST["usuario"],
            1,
            $_POST["calleF"],
            $_POST["numIntF"],
            $_POST["numExtF"],
            $_POST["coloniaF"],
            $_POST["ciudadF"],
            $_POST["estadoF"],
            $_POST["cpF"]
        ) == false) throw new Exception("Error de conexión con la base de datos.");
        
    } else {
        if(sendDireccionInfo(
            $_POST["usuario"],
            true,
            $_POST["calle"],
            $_POST["numInt"],
            $_POST["numExt"],
            $_POST["colonia"],
            $_POST["ciudad"],
            $_POST["estado"],
            $_POST["cp"]
         ) == false) throw new Exception("Error de conexión con la base de datos.");
    }

    sqlClose();
    
?>
    <div class="status">
    <p>Ha sido registrado con éxito.</p>
    <p><a href="../login.php">Iniciar sesión</a></p>
</div>

<?php 
} catch(Exception $ex){
    ?>
    <div class="status">
    <p><?php echo $ex->getMessage(); ?></p>
    <p><a href="../register.php">Volver</a></p>
    </div>
<?php } ?>