<html>
  <head>
    <meta charset="utf-8"/>
    <title>Pellier - Ropa Online</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </head>
  <body>
    <?php include 'php/header.php' ?>
    <?php include 'html/menu.html' ?>

    <div id="imgCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#imgCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#imgCarousel" data-slide-to="1"></li>
        <li data-target="#imgCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/car01.jpg" alt="Los Angeles">
        </div>

        <div class="item">
          <img src="img/car02.jpg" alt="Chicago">
        </div>

        <div class="item">
          <img src="img/car03.jpg" alt="New York">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#imgCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#imgCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <script>
    // Activate Carousel
    $("#imgCarousel").carousel();
    </script>

<?php include 'html/buttons.html' ?>

    <?php include 'html/footer.html' ?>
  </body>
</html>
