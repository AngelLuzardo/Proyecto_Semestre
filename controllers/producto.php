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

        $_SESSION["id_producto"] = $producto->idproducto;


        $this->view->producto = $producto;
        $this->view->render("producto/index");
    }

    public function listaProductos(){
        $listaProductos = $this->model->listarProductos();
        $this->view->productos = $listaProductos;
        $this->view->render("producto/lista");
    }

    public function listaProductosDestacados(){
        $listaProductos = $this->model->listarProductos();
        return $listaProductos;
    }

    public function marcas($param = null){
        
        $marca = $param[0];

        $listaProductos = $this->model->productoMarcas($marca);
        $this->view->productos = $listaProductos;
        $this->view->render("producto/lista");
    }
    public function categoria($param = null){
        
        $categoria = $param[0];

        $listaProductos = $this->model->productoCategoria($categoria);
        $this->view->productos = $listaProductos;
        $this->view->render("producto/lista");
    }
}


?>