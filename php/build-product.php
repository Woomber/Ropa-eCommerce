<?php
  require('connect-bd.php');

  function buildByProduct($id){

    $prod = findByProduct($id);

    $nombre = $prod['nombre'];
    $precio = $prod['precio'];
    $desc = $prod['descripcion'];
    $marca = $prod['marca'];
    $img = 'img/blusablanca.png';

    echo "
        <div class='imagen'><img src='img/blusablanca.png'></div>
        <div class='contenido'>
            <div class='titulo'><h1 id='product-title'>$nombre</h1></div>
            <div class='marca'><p>Marca: $marca</p></div>
            <div class='descripcion'><p>Descripción: $desc</p></div>
            <div class='precio'><p>Precio: $$precio.00</p></div>
            <button onclick=\"popup(1,'seguro')\">Comprar</button>
        </div>
    ";
  }

  function buildByCategory($id){
      $productos = findByCategory($id);

      while($prod = $productos->fetch_assoc()){

        $id = $prod['id'];
        $nombre = $prod['nombre'];
        $precio = $prod['precio'];
        $desc = $prod['descripcion'];
        $marca = $prod['marca'];
        $img = 'img/blusablanca.png';

        echo "<a href='producto.php?id=$id' class='link-elem'><div class='producto'>
            <img src=$img>
            <div class='info'>
                <div class='titulo'>
                    <h2>$nombre</h2>
                </div>
                <div class='marca'>
                    <p>$marca</p>
                </div>
                <div class='desc'>
                    <p>$desc</p>
                </div>
                <div class='precio'>
                    <p>$$precio.00</p>
                </div>
            </div>
        </div></a>";
      }


      sqlClose();

  }

 ?>
