<?php
require("Controller.php");
require("php/models/Producto.php");

class ProductoController extends Controller {
    private $tabla = "productos";
    private $fields = array(
        "id" => "id",
        "nombre"  => "nombre",
        "desc" => "descripcion",
        "precio" => "precio",
        "marca" => "marca"
    );

    public function getById($id){
        if(!$this->start()) {
            $this->stop();
            return false;
        }

        $result = $this->query("SELECT productos.*, marcas.nombre as marca FROM productos
    INNER JOIN marcas ON marcas.id = productos.id_marca
    WHERE productos.id = $id");

        if($result) $this->status = 200;
        else $this->status = 404;

        $producto = new Producto();

        if($fila = $result->fetch_array()){
            $producto->set(
                $fila[$this->fields["id"]],
                $fila[$this->fields["nombre"]],
                $fila[$this->fields["desc"]],
                $fila[$this->fields["precio"]],
                $fila[$this->fields["marca"]]
            );
        }
        
        $this->stop();
        return $producto; 

    }

}

?>