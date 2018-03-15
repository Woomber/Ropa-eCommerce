<?php

  $mysql_host = 'den1.mysql1.gear.host';
  $mysql_user = 'pellier';
  $mysql_pass = 'Me4n0VUK0~-V';
  $mysql_bd   = 'pellier';

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

function userExists($usr){
  global $mysqli;
  $sql = "SELECT Nombre_Usuario FROM clientes WHERE Nombre_Usuario = '" . $usr . "'";
  $resultado = $mysqli->query($sql);
  $row_cnt = $resultado->num_rows;
  if($row_cnt==0){
    return false;
  }
  else return $resultado->fetch_assoc();
}

function sendClientInfo($usr, $pwd, $nombre, $ap, $am, 
$tel, $email, $rfc, $razon, $tipo){
  global $mysqli;

  $sql = "INSERT INTO clientes VALUES (" .
    "'". $usr . "', ".
    "'". $nombre . "', ".
    "'". $ap . "', ".
    "'". $am . "', ".
    "'". $tel . "', ".
    "'". $email . "', ".
    "'". $pwd . "', ".
    "'". $rfc . "', ".
    "'". $razon . "', ".
    $tipo . ")";

  return $mysqli->query($sql) === TRUE;  

}

function sendCCInfo($usr, $num, $cvv, $mm, $yy){
  global $mysqli;
  
  $sql = "INSERT INTO tarjeta VALUES (" .
    "'". $usr . "', ".
    "'". $num . "', ".
    "'". $cvv . "', ".
    "'". $mm . "', ".
    "'". $yy . "')";

   return $mysqli->query($sql) === TRUE;  
}

function sendDireccionInfo($usr, $fact, $calle, $nint, $next,
$colonia, $ciudad, $edo, $cp){
  global $mysqli;
  
  $sql = "INSERT INTO direcciones VALUES (" .
    "'". $usr . "', ".
    $fact . ", ".
    "'". $calle . "', ".
    "'". $nint . "', ".
    "'". $next . "', ".
    "'". $colonia . "', ".
    "'". $ciudad . "', ".
    "'". $edo . "', ".
    "'". $cp . "')";

   return $mysqli->query($sql) === TRUE;
}

function sqlClose(){
  global $mysqli;
  $mysqli->query("commit");
  $mysqli->close();
}


?>
