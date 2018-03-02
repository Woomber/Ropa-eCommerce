<?php
  require('connect-bd.php');

  function buildByCategory($id){
      $productos = findByCategory($id);

      while($prod = $productos->fetch_assoc()){
        echo $prod['nombre'];
      }

    
      sqlClose();

  }

 ?>
