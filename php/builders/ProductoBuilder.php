<?php

require("php/controllers/ProductoController.php");

if(isset($_GET["id"])){
    $prod_id = $_GET["id"];
} else {
    $prod_id = 0;
}

$controller = new ProductoController;
$producto = $controller->getById($prod_id);

?>

<div class='producto'>
    <div class='imagen'><img src='<?php echo $producto->getImagen(); ?>'></div>
    <div class='contenido'>
        <div class='titulo'><h1 id='product-title'><?php echo $producto->nombre; ?></h1></div>
        <div class='marca'><p>Marca: <?php echo $producto->marca; ?></p></div>
        <div class='descripcion'><p>Descripción: <?php echo $producto->descripcion; ?></p></div>
        <div class='precio'><p>Precio: $<?php echo $producto->precio; ?>.00</p></div>
        <button class='btn'>Comprar</button>
    </div>
</div>