<?php

    require("connect-bd.php");

    if(!@isset($_POST["usuario"])){
        header("Location: ../login.php");
    }

    if(userExists($_POST["usuario"])){
        die("Ese usuario ya existe :c");
    }
        
    sendClientInfo(
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
    ) or die("Error de conexión con la base de datos 1");
    
    sendCCInfo(
        $_POST["usuario"],
        $_POST["tarjeta1"] . $_POST["tarjeta2"] . $_POST["tarjeta3"] . $_POST["tarjeta4"],
        $_POST["cav"],
        substr($_POST["fechaEx"], 0, 2),
        substr($_POST["fechaEx"], 3, 2)
    ) or die("Error de conexión con la base de datos 2");

    if(isset($_POST["calleF"])){
        sendDireccionInfo(
            $_POST["usuario"],
            0,
            $_POST["calle"],
            $_POST["numInt"],
            $_POST["numExt"],
            $_POST["colonia"],
            $_POST["ciudad"],
            $_POST["estado"],
            $_POST["cp"]
        ) or die("Error de conexión con la base de datos 3");
        sendDireccionInfo(
            $_POST["usuario"],
            1,
            $_POST["calleF"],
            $_POST["numIntF"],
            $_POST["numExtF"],
            $_POST["coloniaF"],
            $_POST["ciudadF"],
            $_POST["estadoF"],
            $_POST["cpF"]
        ) or die("Error de conexión con la base de datos 4");
        
    } else {
        sendDireccionInfo(
            $_POST["usuario"],
            true,
            $_POST["calle"],
            $_POST["numInt"],
            $_POST["numExt"],
            $_POST["colonia"],
            $_POST["ciudad"],
            $_POST["estado"],
            $_POST["cp"]
        ) or die("Error de conexión con la base de datos 5");
    }

    sqlClose();
    
?>
<div class="mensaje">
    <p>Datos enviados.</p>
    <a href="../login.php">Iniciar sesión</a>
</div>