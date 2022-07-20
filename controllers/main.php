<?php
include "models/ProductoModelo.php";
class Main extends Controller{
    function __construct()
    {
       parent::__construct();
     
       $Producto = new ProductoModelo;
       $listaProductos = $Producto->listarProductos();
       $this->view->productos = $listaProductos;
       $this->view->render("main/index");
    }
}


?>