<?php

class carroCompras extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->carroCompras = [];
    }

    function render(){
        // $carroCompras = $this->model->get();
        // $this->view->carroCompras = $carroCompras;
        $this->view->render("carrito/index");
    }

    public function agregarProducto(){
        $id_usuario = 1;
        $idProducto = $_POST["idProducto"];
        $cantidad = 1; //$_POST["cantidadProductos"]
        $this->model->agregarProducto($id_usuario,$idProducto,$cantidad);
        //header("Location : producto/mostrarProducto/$idProducto");
    }

    public function mostrarCarroCompras(){
        // $idProducto = $param[0];
        // $producto = $this->model->getById($idProducto);

        // session_start();
        // $_SESSION["id_producto"] = $producto->idproducto;


        $carroCompras = $this->model->get();
        $this->view->carroCompras = $carroCompras;
        $this->view->render("carrito/index");
    }
}


?>