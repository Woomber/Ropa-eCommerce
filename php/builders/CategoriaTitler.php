<?php

switch($cat) {
  case 1:
    $cat_title = "Temporada";
    break;
  case 2:
    $cat_title = " Chamarras";
    break;
  case 3:
    $cat_title = "Camisas";
    break;
  case 4:
    $cat_title = "Pantalones";
    break;
  case 5:
    $cat_title = "Vestidos";
    break;
  case 6:
    $cat_title = "Calzado";
    break;
}

switch($cat){
  case 1:
    switch($typ){
      case 0:
        break;
      case 1:
        $cat_title .= " Primavera 2018"; break;
      case 2:
        $cat_title .= " Invierno 2017"; break;
      case 3:
        $cat_title .= " Otoño 2017"; break;
      case 4:
        $cat_title .= " Verano 2017"; break;
    }
    break;
  case 5:
    switch($typ){
      case 0:
        break;
      case 1:
        $cat_title .= " Cortos"; break;
      case 2:
        $cat_title .= " Largos"; break;
    }
    break;
    default:
    switch($typ){
      case 0:
        break;
      case 1:
        $cat_title .= " Hombre"; break;
      case 2:
        $cat_title .= " Mujer"; break;
      case 3:
        $cat_title .= " Niños"; break;
      case 4:
        $cat_title .= " Niñas"; break;
      }
}


?>

 <h1 id="category-title"><?php echo $cat_title; ?></h1>