<?php
require("Controller.php");
require("php/models/Categoria.php");

class CategoriaController extends Controller {
    private $tabla = "categoria";
    private $fields = array(
        "id" => "id_categoria",
        "nombre"  => "id_categoria",
        "id_p" => "id",
        "nombre_p"  => "nombre",
        "desc" => "descripcion",
        "precio" => "precio",
        "marca" => "marca",
         "imagen" => "imagen",
        "ancho" => "anchoImagen",
        "alto" => "altoImagen",
        "tipo" => "tipoImagen"
    );

    public function getById($id){
        if(!$this->start()) {
            $this->stop();
            return false;
        }

        $result = $this->query("SELECT id_categoria, productos.*, marcas.nombre as marca FROM categorias_productos
  LEFT JOIN productos ON categorias_productos.id_producto = productos.id
  INNER JOIN marcas ON marcas.id = productos.id_marca
  WHERE id_categoria = $id");

        if($result) $this->status = 200;
        else $this->status = 404;

        $categoria = new Categoria;

        while($fila = $result->fetch_array()){
            $categoria->set(
                $fila[$this->fields["id"]],
                $fila[$this->fields["nombre"]]
            );
            $producto = new Producto;
            $producto->set(
                $fila[$this->fields["id_p"]],
                $fila[$this->fields["nombre_p"]],
                $fila[$this->fields["desc"]],
                $fila[$this->fields["precio"]],
                $fila[$this->fields["marca"]]
            );
              $producto->imagen = new Imagen();
            $producto->imagen->set(
                $fila[$this->fields["imagen"]],
                $fila[$this->fields["alto"]],
                $fila[$this->fields["ancho"]],
                $fila[$this->fields["tipo"]]
            );
            $categoria->addProducto($producto);
        }
        
        $this->stop();
        return $categoria; 

    }

}

?>