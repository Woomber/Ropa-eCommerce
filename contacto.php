<html>
  <head>
	<meta charset="utf-8"/>
    <title>Pellier - Ropa Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
     <link rel="stylesheet" type="text/css" href="css/contacto.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CP6oCzHdshMAbkxceKoqjUhmFRrjsIE"></script>
    <script type="text/javascript" src="javaScript/contacto.js"></script>
    </head>
  <body>
    <?php include 'html/header.html' ?>
    <?php include 'html/menu.html' ?>

    <h1>Contacto</h1>

    <div id="map"></div>

    <div id="datosContenido">
      <div class="nombre">Nombre: <input type="text" name="nombre"></div>

      <div class="correo">Correo: <input type="text" name="correo"></div>

      <div class="telefono">Teléfono: <input type="text" name="telefono"></div>

      <div class="mensaje">Mensaje: <br><textarea name="mensaje" rows="5" cols="35"></textarea></div>

      <button>Enviar</button>

    </div>
     <?php include 'html/footer.html' ?>
</body>
</html>