<?php

class Producto extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->productos = [];
    }

    function render(){
        $productos = $this->model->get();
        $this->view->productos = $productos;
        $this->view->render("producto/index");
    }


    public function mostrarProducto($param = null){
        $idProducto = $param[0];
        $producto = $this->model->getById($idProducto);

        session_start();
        $_SESSION["id_producto"] = $producto->idproducto;


        $this->view->producto = $producto;
        $this->view->render("producto/index");
    }

    public function listaProductos($param = null){
        $listaProductos = $this->model->listarProductos();
        $this->view->productos = $listaProductos;
        $this->view->render("producto/lista");
    }
}


?>