<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
    <title>Pellier - Ropa Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	<form>
		<div id="datosTodos">
		<div class="datosUsuario">
			<p>Usuario</p>
			<input type="text" name="usuario" required="required">
			<p>Contraseña</p>
			<input type="password" name="contrasena" required="required">
		</div>
		<div class="datosNombre">
			<p>Nombres</p>
			<input type="text" name="nombre" required="required">
			<p>Apellido paterno</p>
			<input type="text" name="apellidoP" required="required">
			<p>Apellido Materno</p>
			<input type="text" name="apellidoM" required="required">
		</div>
		<div class="datosEmail">
			<p>Email</p>
			<input type="text" name="email" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.com]+[.mx]">
			<p>Confirmacion email</p>
			<input type="text" name="confirmar" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.com]+[.mx]">
		</div>
		<div class="datosTarjeta">
			<p>Targeta</p>
			<input  type=text name="targeta" required="required" size="3" maxlength = 4>
			<input  type=text name="targeta1" required="required" size="3" maxlength = 4>
			<input  type=text name="targeta2" required="required" size="3" maxlength = 4>
			<input  type=text name="targeta4" required="required" size="3" maxlength = 4>
			<p>CAV</p>
			<input  type=text pattern="[0-9]" name="cav" required="required" size="2" maxlength = 3>
			<p>Fecha de expiración</p>
			<input type="text" name="fechaEx" required="required" size="4" placeholder="mm/aa">
		</div>
		<button>Siguiente</button>
		</div>
	</form>
</body>
</html>