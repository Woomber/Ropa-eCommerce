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
    <link rel="stylesheet" type="text/css" href="css/generalProductos.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </head>
  <body>
    <?php include 'html/header.html' ?>
    <?php include 'html/menu.html' ?>
    <?php require 'php/productos-filter.php' ?>
    <?php include 'html/emergentes.html' ?>

    <h1 id="category-title"><?php echo $cat_title; ?></h1>

        <div class="imagen"><img src="img/blusablanca.png"></div>
        <div class="contenido">
            <div class="titulo"><h2>ejem</h2></div>
            <div class="descripcion"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
            <div class="precio"><p>Precio: $123456.7890</p></div>
            <button onclick="popup(1,'seguro')">Comprar</button>
        </div>

    <?php include 'html/footer.html' ?>
  </body>
</html>
