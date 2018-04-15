<?php

require("php/controllers/CategoriaController.php");

if(isset($_GET["cat"])){
  $cat = $_GET["cat"];
} else {
  $cat = 0;
}

if(isset($_GET["typ"])){
  $typ = $_GET["typ"];
} else {
  $typ = 0;
}

include("CategoriaTitler.php");

$controller = new CategoriaController;
$categoria = $controller->getById($cat);

?>

<div id="productos">

<?php 
foreach($categoria->productos as $producto){
?>

<a href='producto.php?id=<?php echo $producto->id; ?>' class='link-elem'>
<div class='producto'>
    <img src='<?php echo $producto->getImagen(); ?>'>
    <div class='info'>
        <div class='titulo'>
            <h2><?php echo $producto->nombre; ?></h2>
        </div>
        <div class='marca'>
            <p><?php echo $producto->marca; ?></p>
        </div>
        <div class='desc'>
            <p><?php echo $producto->descripcion; ?></p>
        </div>
        <div class='precio'>
            <p>$<?php echo $producto->precio; ?>.00</p>
        </div>
    </div>
</div></a>
<?php
}
?>

</div>