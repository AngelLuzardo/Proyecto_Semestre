<?php 

    class CarroComprasModelo extends Model{

        public $id_producto;
        public $cantidad;
        public $nombre_producto;
        public $precio_producto;
        public $total;
        public $foto_referencial;
        public $marca;

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

        public function mostrarCarrito($id_usuario){

            $con=new Database();
            $con->connect();

            $itemsCarrito = [];

            $query = "SELECT carrito.id_producto, SUM(carrito.cantidad) as cantidad,
            producto.nombre,producto.precio, producto.precio*SUM(carrito.cantidad) as total, producto.foto_referencial, 
            marca.nombre as marca FROM carrito INNER JOIN producto on id_producto = producto.idproducto 
            INNER JOIN marca on producto.marca = marca.idmarca WHERE id_usuario = 2  GROUP BY carrito.id_producto"; 

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

    }
