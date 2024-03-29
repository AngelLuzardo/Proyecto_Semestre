

<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

class carroCompras extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->carroCompras = [];
       $this->view->boleta = [];
    }

    function render(){

        if(!isset($_SESSION["rut"])){
            $_SESSION['mensaje'] = "Debe iniciar sesion";
            $_SESSION['codigo'] = "error";
        }else{
            $rut = $_SESSION["rut"];
            $itemsCarro = $this->model->mostrarCarrito($rut);
            $this->view->carroCompras = $itemsCarro;  
        }
        $this->view->render("carrito/index");
    }

    public function agregarProducto(){
        
        $idProducto = $_POST["idProducto"];
        if(isset($_SESSION["rut"])){
            $rut = $_SESSION["rut"];
            $cantidad   = $_POST["cantidadProductos"];
            $this->model->agregarProducto($rut,$idProducto,$cantidad);
        }else{
            $_SESSION['mensaje'] = "Debe iniciar sesion";
            $_SESSION['codigo'] = "error";
        }

        $url = constant("URL")."producto/mostrarProducto/$idProducto";
        header('Location: '.$url);
        die();  

    }

    public function eliminarProducto($param = null)
    {
        if(!isset($_SESSION["rut"])){
            $_SESSION['mensaje'] = "Debe iniciar sesion";
            $_SESSION['codigo'] = "error";
        }else{
            $rut = $_SESSION["rut"];
            $idProducto = $param[0];
            echo $rut.$idProducto;
            $this->model->eliminarProducto($rut,$idProducto);
        }

        $url = constant("URL")."carroCompras/render";
        header('Location: '.$url);
        die();
    }

    public function modificarCantidadProducto($param = null)
    {
        $id_usuario = 1;
        $idProducto = $param[0];
        $cantidad = $param[1];


        $this->model->modificarCantidadProducto($id_usuario,$idProducto,$cantidad);

        
        $url = constant("URL")."carroCompras/render";
        header('Location: '.$url);
        die();
    }

     public function procesarCompra()
    {
        if(!isset($_SESSION["rut"]) || $_SESSION["total_compra"] === 0){
            $_SESSION['mensaje'] = "Debe iniciar sesion";
            $_SESSION['codigo'] = "error";
            $url = constant("URL")."carroCompras/render";
            header('Location: '.$url);
            die();
        }else{
            $rut = $_SESSION["rut"];
            $precio_total = $_SESSION["total_compra"];
            $listaProductos = $_SESSION["listaProductos"];
            $id_compra = $this->model->nuevaBoleta($rut,$precio_total);

            $this->model->generarBoleta($id_compra,$listaProductos);
    
            $this->model->vaciarCarro($rut);
            $url = constant("URL")."carroCompras/boleta/$id_compra";
            header('Location: '.$url);
            die();
        }

    }

    public function boleta($param){
        $sql_boleta = $this->model->obtenerBoleta($param[0]);
        $this->view->boleta = $sql_boleta;
        $this->view->render("carrito/boleta");
    }
}


?>

