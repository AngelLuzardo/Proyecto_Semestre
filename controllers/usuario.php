<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
class Usuario extends Controller{
    function __construct()
    {
       parent::__construct();
    }

    function render(){
        if(!isset($_SESSION["rut"])){
            $url = constant("URL");
            $_SESSION['mensaje'] = "Debe iniciar sesion";
            $_SESSION['codigo'] = "error";
            header('Location: '.$url);
            
            exit();
        }else{
            $this->view->render("perfil/index");
        }
        
    }

    public function registrarCliente(){
        date_default_timezone_set('America/Santiago');
        try {
            $rut = $_POST["rut"];
            $nombres = $_POST["nombre"];
            $apellidop = $_POST["apep"];
            $apellidom = $_POST["apem"];
            $fecha_nac = $_POST["fechaNac"];
            $fono = $_POST["fono"];
            $mail = $_POST["mail"];
            $clave = $_POST["clave"];
            $idComuna = $_POST["selectComuna"];
            $calle = $_POST["calle"];
            $numero = $_POST["numeroDirec"];
            $estado = 1;
            $idTipo = 1;

            
            $this->model->insertarPersona($rut,$nombres,$apellidop,$apellidom,$estado,$idTipo);
            $this->model->insertarCliente($rut,$fecha_nac);
            $this->model->insertarTelefono($fono,$rut);
            $this->model->insertarCorreo($mail,$rut);
            $this->model->insertarClave($rut,$clave);
            $this->model->insertarDireccion($calle,$numero,$idComuna,$rut);
            echo "Cuenta Creada con exito";
            $url = constant("URL");
            header('Location: '.$url);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function modificarDireccion(){
        if(isset($_SESSION['correo'])){
            $rut = $_SESSION['rut'];

            $calle = $_POST['txtDireccion'];
            $numero = $_POST['txtNumeracion'];

            
            $this->model->modificarDireccion($calle,$numero,$rut);
    
            $url = constant("URL")."usuario/render";
            header('Location: '.$url);
    
        }
    }

    public function cambiarContrasena(){
        if(isset($_SESSION['correo'])){
            $rut = $_SESSION['rut'];
            $clave = $_POST['txtClaveNueva'];

            $this->model->modificarClave($rut,$clave);
    
            $url = constant("URL")."usuario/render";
            header('Location: '.$url);
        }
    }

    function getComunas(){
        $selectRegion = filter_input(INPUT_POST,'selectRegion');
        $regionSelect = filter_input(INPUT_POST,'regionSelect');
        $con=new Database();
        $con->connect();
        if(isset($selectRegion)){
            $sql = "SELECT cod_comuna, nombre FROM comuna WHERE Region_idRegion = $selectRegion";
        }else{
            $sql = "SELECT cod_comuna, nombre FROM comuna WHERE Region_idRegion = $regionSelect";
        }

        $datos = $con->conn->query($sql);

        if($datos->num_rows > 0){
            while($row = $datos->fetch_assoc()){
                echo "<option value=".$row['cod_comuna'].">".$row['nombre']."</option>";
            }
        }else{
            echo "0 Resultados";
        }

        $con->disconnect();   
    }

    function cerrarSesion(){
        unset($_SESSION['correo']);
        unset($_SESSION['rut']);
        session_destroy();

        $url = constant("URL");
        header('Location: '.$url);
        exit();
    }

    function validar(){
        $correo = $_POST["txtCorreo"];
        $clave = $_POST["txtClave"];
        if($this->model->validar($correo,$clave)){
            $this->view->render("perfil/index");
        }else{
            $url = constant("URL");
            $_SESSION['mensaje'] = "Debe iniciar sesion";
            $_SESSION['codigo'] = "error";
            header('Location: '.$url);
            
            exit();
        }
    }

    function modificarUsuario(){
        if(isset($_SESSION['correo'])){
            $rut = $_SESSION['rut']; 
            $nombres = $_POST['txtNombre'];
            $apellidop = $_POST['txtApeP'];
            $apellidom = $_POST['txtApeM'];
            $estado = 1;
            $idTipo = 1;

            $this->model->modificarDatosPerosna($rut,$nombres,$apellidop,$apellidom,$estado,$idTipo);

            $this->view->render("perfil/index");
        }
    }

  
}


?>