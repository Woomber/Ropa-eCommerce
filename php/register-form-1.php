<h1 class="titulo-form">Paso 1: Datos personales</h1>
<form method="POST" onsubmit="return validateForm1()">
    <div id="datosTodos">
        <div class="datosUsuario">
            <p>Usuario *</p>
            <input type="text" name="usuario" required="required">
            <p>Contraseña *</p>
            <input type="password" name="contrasena" required="required">
        </div>
        <div class="datosNombre">
            <p>Nombres *</p>
            <input type="text" name="nombre" required="required">
            <p>Apellido paterno *</p>
            <input type="text" name="apellidoP" required="required">
            <p>Apellido Materno *</p>
            <input type="text" name="apellidoM" required="required">
        </div>
        <div class="datosEmail">
            <p>Email *</p>
            <input type="text" name="email" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.com]+[.mx]">
            <p>Confirmar email *</p>
            <input type="text" name="confirmar" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.com]+[.mx]">
        </div>
        <div class="datosTarjeta">
            <p>Tarjeta *</p>
            <input type=text name="tarjeta1" required="required" size="3" pattern="[0-9]{4}" maxlength=4>
            <input type=text name="tarjeta2" required="required" size="3" pattern="[0-9]{4}" maxlength=4>
            <input type=text name="tarjeta3" required="required" size="3" pattern="[0-9]{4}" maxlength=4>
            <input type=text name="tarjeta4" required="required" size="3" pattern="[0-9]{3,4}" maxlength=4>
            <p>CAV</p>
            <input type=text pattern="[0-9]{3}" name="cav" required="required" size="2" maxlength=3>
            <p>Fecha de expiración</p>
            <input type="text" name="fechaEx" required="required" pattern="[0-9]{2}/[0-9]{2}" size="5" placeholder="mm/aa">
        </div>
        <input type="submit" value="Siguiente" />
    </div>
</form>