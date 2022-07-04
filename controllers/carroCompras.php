<?php

class carroCompras extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->carroCompras = [];
    }

    function render(){
        $itemsCarro = $this->model->mostrarCarrito(1);
        $this->view->carroCompras = $itemsCarro;
        $this->view->render("carrito/index");
    }

    public function agregarProducto(){
        $id_usuario = 1;
        $idProducto = $_POST["idProducto"];
        $cantidad   = 5; //$_POST["cantidadProductos"]

        $this->model->agregarProducto($id_usuario,$idProducto,$cantidad);

        $url = constant("URL")."producto/mostrarProducto/$idProducto";
        header('Location: '.$url);
        die();
    }

}


?>