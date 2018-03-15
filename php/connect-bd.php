<?php

  $mysql_host = 'localhost';
  $mysql_user = 'id4661080_root';
  $mysql_pass = 'gatitos321';
  $mysql_bd   = 'id4661080_proyectodb';

  $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_bd);
  $mysqli->set_charset("UTF8");
  if($mysqli->connect_errno){
    echo "Error en la conexión.";
    exit;
  }

  function findByProduct($id){
    global $mysqli;
    $sql = "SELECT productos.*, marcas.nombre as marca FROM productos
    INNER JOIN marcas ON marcas.id = productos.id_marca
    WHERE productos.id = $id";

    if(!$resultado = $mysqli->query($sql)){
      echo "Error al consultar.";
      exit;
    }

    return $resultado->fetch_assoc();
  
  }

function findByCategory($id){
  global $mysqli;
  $sql = "SELECT id_categoria, productos.*, marcas.nombre as marca FROM categorias_productos
  LEFT JOIN productos ON categorias_productos.id_producto = productos.id
  INNER JOIN marcas ON marcas.id = productos.id_marca
  WHERE id_categoria = $id";

  if(!$resultado = $mysqli->query($sql)){
    echo "Error al consultar.";
    exit;
  }

  return $resultado;

}
function comprobar($usuario, $contrasena){
  global $mysqli;
  $sql = "SELECT Nombre_Usuario, Password FROM clientes 
  WHERE Nombre_Usuario = '".$usuario."' AND Password ='".$contrasena."'";
  $resultado = $mysqli->query($sql);
  $row_cnt = $resultado->num_rows;
  if($row_cnt==0){
    return false;
  }
  else return $resultado->fetch_assoc();
}
function sqlClose(){
  global $mysqli;
  $mysqli->close();
}


?>
