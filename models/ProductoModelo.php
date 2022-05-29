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


        public function __construct(){
            parent::__construct();
        }
        
        public function insertar(){
    


        }

        public function getById($id){
            
            $con=new Database();
            $producto = new ProductoModelo;   
            $con->connect();
            

            $sql = "SELECT * FROM PRODUCTO WHERE idproducto='$id'"; 
            $resultado=$con->conn->query($sql);

            if($resultado->num_rows > 0){
                while($col = $resultado->fetch_assoc()){
                
                    $producto->idproducto = $col["idproducto"];
                    $producto->nombre = $col["nombre"];
                    $producto->tipo = $col["tipo"];
                    $producto->descripcion = $col["descripcion"];
                    $producto->caracteristicas = $col["caracteristicas"];
                    $producto->precio = $col["precio"];
                    $producto->foto_ref = $col["foto_referencial"];
                    $producto->cantidad = $col["cantidad"];
              
                }
            }
            $con->disconnect();
            return $producto;
        }


        public function listar(){



        }

    }






?>