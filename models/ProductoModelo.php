<?php
    
    class ProductoModelo extends Model{
        
        public $idproducto; 
        public $nombre; 
        public $tipo; 
        public $descripcion; 
        public $caracteristicas; 
        public $precio; 
        public $foto_ref; 
        public $cantidad; 
        public $categoria;
        public $marca;

        public function __construct(){
            parent::__construct();
        }
        
        public function insertar(){
    


        }

        public function getById($id){
            
            $con=new Database();
            $producto = new ProductoModelo;   
            $con->connect();
            

            $sql = "SELECT idproducto,producto.nombre as nombre,descripcion,precio,foto_referencial,cantidad, categoria.nombre as categoria,
             marca.nombre as marca FROM producto INNER JOIN categoria ON producto.categoria_id = categoria.idcategoria INNER JOIN marca ON 
             producto.marca = marca.idmarca WHERE producto.idproducto =$id"; 
            $resultado=$con->conn->query($sql);

            if($resultado->num_rows > 0){
                while($col = $resultado->fetch_assoc()){
                
                    $producto->idproducto = $col["idproducto"];
                    $producto->nombre = $col["nombre"];
                    $producto->tipo = "";
                    $producto->descripcion = $col["descripcion"];
                    $producto->caracteristicas = "";
                    $producto->precio = $col["precio"];
                    $producto->foto_ref = $col["foto_referencial"];
                    $producto->cantidad = $col["cantidad"];
                    $producto->categoria = $col["categoria"];
                    $producto->marca = $col["marca"];
                }
            }
            $con->disconnect();
            return $producto;
        }


        public function listarProductos(){
            $con=new Database();
            $con->connect();
            $listaProductos = [];

            $query = "SELECT idproducto,producto.nombre as nombre,descripcion,precio,foto_referencial,cantidad, categoria.nombre as categoria,
            marca.nombre as marca FROM producto INNER JOIN categoria ON producto.categoria_id = categoria.idcategoria INNER JOIN marca ON 
            producto.marca = marca.idmarca ORDER BY producto.precio"; 

            $resultado=$con->conn->query($query);
            
            try{
                
                if($resultado->num_rows > 0){

                   
                    while($col = $resultado->fetch_assoc()){
                    
                        $item = new ProductoModelo();
    
                        $item->id_producto = $col["idproducto"];
                        $item->nombre = $col["nombre"];
                        $item->precio = $col["precio"];
                        $item->foto_ref = $col["foto_referencial"];
                        $item->marca = $col["marca"];

                        array_push($listaProductos, $item);
                    }
                }else{
                    $listaProductos = [];
                  
                }
            }catch(Exception){
                return [];
            }
            
            $con->disconnect();
            return $listaProductos;


        }


        public function productoMarcas($marca){
            $con=new Database();
            $con->connect();
            $listaProductos = [];

            $query = "SELECT idproducto,producto.nombre as nombre,descripcion,precio,foto_referencial,cantidad, categoria.nombre as categoria,
            marca.nombre as marca FROM producto INNER JOIN categoria ON producto.categoria_id = categoria.idcategoria INNER JOIN marca ON 
            producto.marca = marca.idmarca WHERE marca.nombre = '$marca' ORDER BY producto.precio"; 

            $resultado=$con->conn->query($query);
            
            try{
                
                if($resultado->num_rows > 0){

                   
                    while($col = $resultado->fetch_assoc()){
                    
                        $item = new ProductoModelo();
    
                        $item->id_producto = $col["idproducto"];
                        $item->nombre = $col["nombre"];
                        $item->precio = $col["precio"];
                        $item->foto_ref = $col["foto_referencial"];
                        $item->marca = $col["marca"];

                        array_push($listaProductos, $item);
                    }
                }else{
                    $listaProductos = [];
                  
                }
            }catch(Exception){
                return [];
            }
            
            $con->disconnect();
            return $listaProductos;
        }

        public function productoCategoria($categoria){
            $con=new Database();
            $con->connect();
            $listaProductos = [];

            $query = "SELECT idproducto,producto.nombre as nombre,descripcion,precio,foto_referencial,cantidad, categoria.nombre as categoria,
            marca.nombre as marca FROM producto INNER JOIN categoria ON producto.categoria_id = categoria.idcategoria INNER JOIN marca ON 
            producto.marca = marca.idmarca WHERE categoria.nombre = '$categoria' ORDER BY producto.precio"; 

            $resultado=$con->conn->query($query);
            
            try{
                
                if($resultado->num_rows > 0){

                   
                    while($col = $resultado->fetch_assoc()){
                    
                        $item = new ProductoModelo();
    
                        $item->id_producto = $col["idproducto"];
                        $item->nombre = $col["nombre"];
                        $item->precio = $col["precio"];
                        $item->foto_ref = $col["foto_referencial"];
                        $item->marca = $col["marca"];

                        array_push($listaProductos, $item);
                    }
                }else{
                    $listaProductos = [];
                  
                }
            }catch(Exception){
                return [];
            }
            
            $con->disconnect();
            return $listaProductos;
        }

        

    }






?>