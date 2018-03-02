<?php


  $mysql_host = 'localhost';
  $mysql_user = 'id4661080_root';
  $mysql_pass = 'gatitos321';
  $mysql_bd   = 'id4661080_proyectodb';

  $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_bd);
  if($mysqli->connect_errno){
    echo "Error en la conexión.";
    exit;
  }

function findByCategory($id){
  global $mysqli;
  $sql = "SELECT id_categoria, productos.* FROM categorias_productos
  LEFT JOIN productos ON categorias_productos.id_producto = productos.id
  WHERE id_categoria = $id";

  if(!$resultado = $mysqli->query($sql)){
    echo "Error al consultar.";
    exit;
  }

  return $resultado;

}

function sqlClose(){
  global $mysqli;
  $mysqli->close();
}


?>
