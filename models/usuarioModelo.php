<?php 

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    class UsuarioModelo extends Model{


        
        public function __construct(){
            parent::__construct();
        }
        
        
        function insertarPersona($rut, $nombres, $apellidop, $apellidom,$estado,$idTipo){
            $con=new Database();
            $con->connect();
            $sql = "INSERT INTO persona (rut, nombres, ape_paterno, ape_materno,estado,tipo_usuario_idtipo_usuario)
            VALUE ('$rut', '$nombres', '$apellidop', '$apellidom','$estado','$idTipo')";
            if ($con->conn->query($sql) === TRUE) {
                echo "Registrado correctamente";
            }else 
            {
                echo "No puede duplicar rut";
            }        
            $con->disconnect();
        }
    
        function insertarCliente($rut, $fechaNac){
            $con=new Database();
            $con->connect();
            $sql = "INSERT INTO cliente (persona_rut, fecha_nacimiento) VALUE ('$rut', '$fechaNac')";
            if ($con->conn->query($sql) === TRUE) {
                echo "Registrado correctamente";
            } else {
                echo "No puede duplicar rut";
            }        
            $con->disconnect();
        }
    
        function insertarTelefono($fono, $rut){
            $con=new Database();
            $con->connect();
            $sql = "INSERT INTO telefono (numero, persona_rut) VALUE ('$fono', '$rut')";
            if ($con->conn->query($sql) === TRUE) {
                echo "Registrado correctamente";
            } else {
                echo "No puede duplicar id";
            }        
            $con->disconnect();
        }
        
        function insertarCorreo($mail, $rut){
            $con=new Database();
            $con->connect();
            $sql = "INSERT INTO correo (mail, persona_rut) VALUE ('$mail', '$rut')";
            if ($con->conn->query($sql) === TRUE) {
                echo "Registrado correctamente";
            } else {
                echo "No puede duplicar ID";
            }        
            $con->disconnect();
        }
    
        function insertarClave($rut, $clave){
            $con=new Database();
            $con->connect();
            $sql = "INSERT INTO contrasena (Persona_rut, clave) VALUE ('$rut', '$clave')";
            if ($con->conn->query($sql) === TRUE) {
                echo "Registrado correctamente";
            } else {
                echo "No puede duplicar rut";
            }        
            $con->disconnect();
        }
        
        function insertarDireccion($calle,$numero, $idComuna,$rut){
            $con=new Database();
            $con->connect();
            $sql = "INSERT INTO direccion (calle, numero, comuna_cod_comuna, persona_rut) VALUE ('$calle','$numero','$idComuna','$rut')";
            if($con->conn->query($sql) === TRUE) {
                echo "Registrado correctamente";
            }else{
                echo "No puede duplicar ID";
            }
            $con->disconnect();
        }
    
        function listarRegion(){
            $con=new Database();
            $con->connect();
            $sql = "SELECT * FROM region";
            $resultado=$con->conn->query($sql);
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    echo "<option value=".$row['idRegion'].">".$row['nombre']."</option>";
                }
            }else{
                echo "0 Resultados";
            }
            $con->disconnect();
        }
        function validar($correo,$clave){
            $con=new Database();
                  
            
                $con->connect();
                $sql = "SELECT persona.rut,persona.nombres,persona.ape_paterno,persona.ape_materno, cliente.fecha_nacimiento,
                telefono.numero as fono, region.nombre as nombreregion,comuna.nombre,direccion.calle,direccion.numero, correo.mail,
                contrasena.clave FROM cliente INNER JOIN persona ON persona.rut = cliente.persona_rut INNER JOIN telefono ON 
                telefono.persona_rut = cliente.persona_rut INNER JOIN direccion ON direccion.persona_rut = cliente.persona_rut 
                INNER JOIN correo ON correo.persona_rut = cliente.persona_rut INNER JOIN contrasena ON contrasena.persona_rut = 
                cliente.persona_rut INNER JOIN comuna ON comuna.cod_comuna = direccion.comuna_cod_comuna INNER JOIN region ON 
                region.idRegion = comuna.Region_idRegion WHERE correo.mail='$correo' and contrasena.clave='$clave'";
                $result = $con->conn->query($sql);
                
                if ($result->num_rows>0) {
                    while ($res = $result->fetch_assoc()) {
                        $_SESSION['rut'] = $res['rut'];
                        $_SESSION['correo']= $res['mail'];
                        $_SESSION['clave']= $res['clave'];
                        $_SESSION['nombres']= $res['nombres'];
                        $_SESSION['apellidop']= $res['ape_paterno'];
                        $_SESSION['apellidom']= $res['ape_materno'];
                        $_SESSION['fecha_nac']= $res['fecha_nacimiento'];
                        $_SESSION['region']= $res['nombreregion'];
                        $_SESSION['comuna']= $res['nombre'];
                        $_SESSION['fono']= $res['fono'];
                        $_SESSION['calle']= $res['calle'];
                        $_SESSION['numero']= $res['numero'];
                        $con->disconnect();
                        
                    }
                    return true;
                }else{
                    return false;
                }
            
        }
    
        function modificarDatosPerosna($rut,$nombres,$apellidop,$apellidom,$estado,$idTipo){
            $con=new Database();
            if(isset($_POST['btnGuardarDatos'])){
                $con->connect();
                
                $sql = "UPDATE persona SET nombres='$nombres', ape_paterno='$apellidop',ape_materno='$apellidom',estado='$estado',tipo_usuario_idtipo_usuario='$idTipo'
                WHERE rut = '$rut'";
                if($con->conn->query($sql) === TRUE){
                    $_SESSION["mensaje"] = "Actualizado correctamente";
                    $_SESSION["codigo"] = "success";
                } else {
                    $_SESSION["mensaje"] = "No se pudo actualizar";
                    $_SESSION["codigo"] = "error";
                }
                $con->disconnect();
            }            
        }
    
        function modificarClave($rut,$clave){
            $con=new Database();
                $con->connect();
                $sql = "UPDATE contrasena SET clave='$clave' WHERE Persona_rut='$rut'";
                if($con->conn->query($sql) === TRUE){
                    echo "Actualizado correctamente";
                } else {
                    echo "No puede actualizar";
                }
                $con->disconnect();

        }
    
        function modificarDireccion($calle,$numero,$rut){
            $con=new Database();
            
                $con->connect();
                $sql = "UPDATE direccion set calle='$calle',numero='$numero' WHERE persona_rut='$rut'";
                if($con->conn->query($sql) === TRUE){
                    echo "Actualizado correctamente";
                } else {
                    echo "No puede actualizar";
                }
                $con->disconnect();
            
        }
        function listarCategorias(){
            $con=new Database();
            $con->connect();
            $sql = "SELECT * FROM categoria";
            $result = $con->conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    
                    echo "<tr>
                            <td><a class='btn btn_categoria' href='".constant('URL')."producto/categoria/".$row["nombre"]."' role='button'>".$row["nombre"]."</a></td>  
                          </tr>";            
                }
            } else {
            echo "0 results";
            }
            $con->disconnect();
        }
        
        

    }
