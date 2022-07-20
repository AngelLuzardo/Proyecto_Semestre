<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/vistaProductos.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/index.css">
</head>
<body>
     
<?php require "views/header.php"?>

<div class="body">

    <?php 
    $producto = new ProductoModelo; 
    $listaProductos = [];
    $listaProductos = $this->productos;
    $total = 0;
    $otrosMedios = 0;
    ?>
    <div class="detalle">
        <div class="detalle__contenedor">
            
        <?php 
        if($listaProductos == []){
            ?>
            <div class="descripcion__mensaje">
                <span>No hay productos para mostrar</span>
            </div>
        <?php
        }
        foreach($listaProductos as $item){?>
            <div class="producto" id="producto">
                <a href="<?php echo constant("URL");?>producto/mostrarProducto/<?php echo $item->id_producto;?>" class="producto__contenedor">
                    <div class="producto__imagen">
                        <img src=<?php echo $item->foto_ref?> alt="">
                    </div>
                    <div class="producto__desc-container">
                        <span class="producto__marca"><?php echo $item->marca?></span>
                        <span class="producto__titulo"><?php echo $item->nombre?></span>
                    </div>
                    <div class="producto__precio-container">
                        <span class="producto__precio-transf">$<?php echo number_format($item->precio*1,0,"",".")?></span>
                        <span class="producto__medio-pago">Transferencia</span>
                        <span class="producto__precio-otros">$<?php echo number_format($item->precio*1.04,0,"",".")?></span>
                        <span class="producto__medio-pago">Otros medios de pago</span> 
                    </div>
                </a>    
            </div>   
            <?php }?>
            
        </div>
    </div>
</div>


<?php require "views/footer.php"?>

</body>

</html>