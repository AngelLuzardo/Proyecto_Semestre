<?php 

    class CarroComprasModelo extends Model{

        public $id_producto;
        public $cantidad;
        public $nombre_producto;
        public $precio_producto;
        public $total;
        public $foto_referencial;
        public $stock;
        public $marca;
        
        public function __construct(){
            parent::__construct();
            
        }
        
        

        
        public function agregarProducto($persona_rut ,$id_producto,$cantidad){
            $con=new Database();
            $con->connect();
            session_start();

            $query = "INSERT INTO carrito (persona_rut ,id_producto,cantidad) VALUES('$persona_rut',$id_producto,$cantidad)";

            
                if ($con->conn->query($query) === TRUE) {
                    $_SESSION["mensaje"] = "Tu producto ha sido agregado al carrito";
                    $_SESSION["codigo"] = "success";
                } else {
                    $_SESSION['mensaje'] = "Tu producto no pudo ser agregado";
                    $_SESSION['codigo'] = "error";
                }

            $con->disconnect();
         
    
        }

        public function mostrarCarrito($persona_rut){

            $con=new Database();
            $con->connect();
            $itemsCarrito = [];

            $query = "SELECT carrito.id_producto, SUM(carrito.cantidad) AS cantidad,
            producto.nombre,producto.precio, producto.precio*SUM(carrito.cantidad) AS total, producto.foto_referencial,
            producto.cantidad AS stock, marca.nombre AS marca FROM carrito INNER JOIN producto
            ON id_producto = producto.idproducto INNER JOIN marca ON producto.marca = marca.idmarca
            WHERE persona_rut = '$persona_rut'  GROUP BY carrito.id_producto"; 

            $resultado=$con->conn->query($query);
            
           

            try{
                
                if($resultado->num_rows > 0){

                   
                    while($col = $resultado->fetch_assoc()){
                    
                        $item = new CarroComprasModelo();
    
                        $item->id_producto = $col["id_producto"];
                        $item->cantidad = $col["cantidad"];
                        $item->nombre_producto = $col["nombre"];
                        $item->precio_producto = $col["precio"];
                        $item->total = $col["total"];
                        $item->foto_referencial = $col["foto_referencial"];
                        $item->stock = $col["stock"];
                        $item->marca = $col["marca"];
    
                
    
                        array_push($itemsCarrito, $item);
                    }
                }else{
                    $itemsCarrito = [];
                  
                }
            }catch(Exception){
                return [];
            }
            
            $con->disconnect();
            return $itemsCarrito;
            
        }

        public function eliminarProducto($persona_rut ,$id_producto){
            $con=new Database();
            $con->connect();
 
            $query = "DELETE FROM carrito WHERE persona_rut  = $persona_rut  and id_producto = $id_producto"; 
            try{
                $con->conn->query($query);
            }catch(Exception $e){
                return $e;
            }
            

            $con->disconnect();
        }
        
        public function restarStock($id_producto,$cantidad){
            $con=new Database();
            $con->connect();
 
            $query = "UPDATE producto SET cantidad=cantidad-$cantidad WHERE idproducto = $id_producto"; 
            try{
                $con->conn->query($query);
            }catch(Exception $e){
                return $e;
            }
            
            $con->disconnect();
        }

        public function vaciarCarro($rut){
            $con=new Database();
            $con->connect();

            try{
                $query = "DELETE FROM carrito WHERE persona_rut = $rut;"; 
                $con->conn->query($query);
            }catch(Exception){ 
            }
        
            $con->disconnect();
            
        }

        public function nuevaBoleta($rut_cliente,$precio_total){
            $con=new Database();
            $con->connect();
            $id = 0;
            $query = "INSERT INTO boleta (numero_boleta, precio_neto, costo_iva, precio_total, fecha_compra, cliente_persona_rut) 
            VALUES (null,233,23,432,'2022/10/08','111222')"; 

            if ($con->conn->query($query) === TRUE) {
                $_SESSION["mensaje"] = "Compra procesada";
                $_SESSION["codigo"] = "success";
            } else {
                $_SESSION['mensaje'] = "Tu compra no pudo ser procesada";
                $_SESSION['codigo'] = "error";
            }

            $query = "SELECT LAST_INSERT_ID() AS numero_boleta"; 

            $resultado=$con->conn->query($query);

            try{
                
                if($resultado->num_rows > 0){

                   
                    while($col = $resultado->fetch_assoc()){
                    
                        $id = $col["numero_boleta"];
                       
                    }
                }
            }catch(Exception){
                
            }
            
            return $id;
            $con->disconnect();
            
        }

        public function generarBoleta($idBoleta,$listaProductos){
            $con=new Database();
            $con->connect();

            try{
                foreach($listaProductos as $producto){
                    $id_producto = $producto['idProducto'];
                    $cantidad = $producto['cantidad'];
    
                    $query = "INSERT INTO boleta_producto (boleta_id, producto_id, cantidad) VALUES ($idBoleta,$id_producto,$cantidad);"; 
                    if ($con->conn->query($query) === TRUE) {
                        $_SESSION["mensaje"] = "Compra procesada";
                        $_SESSION["codigo"] = "success";
                    } else {
                        $_SESSION['mensaje'] = "Tu compra no pudo ser procesada";
                        $_SESSION['codigo'] = "error";
                    }
                    $this->restarStock($id_producto,$cantidad);
                }
               
            }catch(Exception){ 
            }
        
            $con->disconnect();
            
        }


         public function obtenerBoleta($numero_boleta)
        {
            $con=new Database();
            $con->connect();
            $boleta = [];

            $query = "SELECT boleta_producto.boleta_id, boleta_producto.producto_id, boleta_producto.cantidad,
            boleta.fecha_compra,producto.nombre as nombre_producto,producto.precio,SUM(producto.precio*boleta_producto.cantidad)
            as total,cliente.persona_rut,persona.nombres AS nombre_cliente,persona.ape_paterno, direccion.calle, direccion.numero,
            comuna.nombre as comuna, region.nombre as region,correo.mail AS correo FROM boleta_producto INNER JOIN producto
            ON boleta_producto.producto_id = producto.idproducto INNER JOIN boleta ON boleta_id = boleta.numero_boleta INNER JOIN
            cliente ON boleta.cliente_persona_rut = cliente.persona_rut INNER JOIN persona ON cliente.persona_rut = persona.rut 
            INNER JOIN direccion on cliente.persona_rut = direccion.persona_rut INNER JOIN comuna ON direccion.comuna_cod_comuna =
            comuna.cod_comuna INNER JOIN region ON comuna.Region_idRegion = region.idRegion INNER JOIN correo ON cliente.persona_rut
            = correo.persona_rut WHERE boleta_id = $numero_boleta GROUP BY producto_id"; 

            $resultado=$con->conn->query($query);
            
            try{
                
                if($resultado->num_rows > 0){

                   
                    while($col = $resultado->fetch_assoc()){

                        $item["boleta_id"] = $col["boleta_id"];
                        $item["producto_id"] = $col["producto_id"];
                        $item["cantidad"] = $col["cantidad"];
                        $item["fecha_compra"] = $col["fecha_compra"];
                        $item["nombre_producto"] = $col["nombre_producto"];
                        $item["precio"] = $col["precio"];
                        $item["total"] = $col["total"];
                        $item["rut"] = $col["persona_rut"];
                        $item["nombre_cliente"] = $col["nombre_cliente"];
                        $item["ape_paterno"] = $col["ape_paterno"];
                        $item["calle"] = $col["calle"];
                        $item["numero"] = $col["numero"];
                        $item["comuna"] = $col["comuna"];
                        $item["region"] = $col["region"];
                        $item["correo"] = $col["correo"];
                        
                
                        array_push($boleta, $item);
                    }
                }else{
                    $boleta = [];    
                }
            }catch(Exception){
                return [];
            }

        
            
            $con->disconnect();
            return $boleta;
        }
    }
