<?php

    require("connect-bd.php");

    if(userExists($_POST["usuario"])){
        die("Ese usuario ya existe :c");
    }
        
    sendClientInfo(
        $_POST["usuario"],
        $_POST["contrasena"],
        $_POST["nombre"],
        $_POST["apellidoP"],
        $_POST["apellidoM"],
        $_POST["telefono"],
        $_POST["email"],
        $_POST["rfc"],
        $_POST["razonSocial"],
        $_POST["tipoPersona"] == "fisica"
    );
    
    sendCCInfo(
        $_POST["usuario"],
        $_POST["tarjeta1"] . $_POST["tarjeta2"] . $_POST["tarjeta3"] . $_POST["tarjeta4"],
        $_POST["cav"],
        substr($_POST["fechaEx"], 0, 2),
        substr($_POST["fechaEx"], 3, 2)
    );

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
        );
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
        );
        
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
        );
    }

    sqlClose();
    
?>
<div class="mensaje">
    <p>Datos enviados.</p>
    <a href="../login.php">Iniciar sesión</a>
</div>