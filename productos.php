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
    <link rel="stylesheet" type="text/css" href="css/product-list.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </head>
  <body>
    <?php include 'html/header.html' ?>
    <?php include 'html/menu.html' ?>
    <?php require 'php/productos-filter.php' ?>

    <h1 id="category-title"><?php echo $cat_title; ?></h1>

        <div id="productos">
            <div class="producto">
                <img src="img/blusablanca.png">
                <div class="info">
                    <div class="titulo">
                        <h2>Titulo de algo</h2>
                    </div>
                    <div class="marca">
                        <p>marca x</p>
                    </div>
                    <div class="tallas">
                        <p>Tallas: ch, m, g</p>
                    </div>
                    <div class="precio">
                        <p>$15.20</p>
                    </div>
                </div>
            </div>
            <div class="producto">
                <img src="img/blusablanca.png">
                <div class="info">
                    <div class="titulo">
                        <h2>Titulo de algo</h2>
                    </div>
                    <div class="marca">
                        <p>marca x</p>
                    </div>
                    <div class="tallas">
                        <p>Tallas: ch, m, g</p>
                    </div>
                    <div class="precio">
                        <p>$15.20</p>
                    </div>
                </div>
            </div>
            <div class="producto">
                <img src="img/blusablanca.png">
                <div class="info">
                    <div class="titulo">
                        <h2>Titulo de algo</h2>
                    </div>
                    <div class="marca">
                        <p>marca x</p>
                    </div>
                    <div class="tallas">
                        <p>Tallas: ch, m, g</p>
                    </div>
                    <div class="precio">
                        <p>$15.20</p>
                    </div>
                </div>
            </div>
        </div>

    <?php include 'html/footer.html' ?>
  </body>
</html>
