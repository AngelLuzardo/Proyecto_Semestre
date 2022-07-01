<?php 

    class CarroComprasModelo extends Model{

        public $id;


        public function __construct(){
            parent::__construct();
        }
            
        public function agregarProducto($id_usuario,$id_producto,$cantidad){
            $con=new Database();
            $con->connect();


            $query = "INSERT INTO carrito (id_usuario,id_producto,cantidad) VALUES($id_usuario,$id_producto,$cantidad)";
            if ($con->conn->query($query) === TRUE) {
                echo "Producto Agregado Correctamente";
            } else {
                echo "Producto NO agregado";
            }
            $con->disconnect();
         
    
        }

    }
