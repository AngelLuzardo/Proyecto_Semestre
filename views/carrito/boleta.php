<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>public/css/carroCompras.css">
    <title>Document</title>
</head>

<body>

    <?php require "views/header.php" ?>

    <div class="body">

        <?php
        $boleta = [];
        $items_boleta = $this->boleta;
        $total_compra = 0;
        ?>
        
            <div class="boleta">
                <div class="boleta__container">
                    <div class="boleta__titulo">
                        <h3>Boleta Electronica</h3>
                    </div>
                    <div class="boleta__datos-cliente">
                        <p>
                            <span class="boleta__elemento">Nombre Cliente: </span>
                            <span><?php echo $items_boleta[0]["nombre_cliente"]." ".$items_boleta[0]["ape_paterno"] ?></span>
                        </p>
                        <p>
                            <span class="boleta__elemento">RUT: </span>
                            <span><?php echo $items_boleta[0]["rut"]?></span>
                        </p>
                        <p>
                            <span class="boleta__elemento">Correo electronico: </span>
                            <span><?php echo $items_boleta[0]["correo"]?></span>
                        </p>
                        <p>
                            <span class="boleta__elemento">Direccion: </span>
                            <span><?php echo $items_boleta[0]["calle"]." ".$items_boleta[0]["numero"].". ".$items_boleta[0]["comuna"].", ".$items_boleta[0]["region"]?></span>
                        </p>
                        <p>
                            <span class="boleta__elemento">ID compra: </span>
                            <span><?php echo $items_boleta[0]["boleta_id"]?></span>
                        </p>
                        <p>
                            <span class="boleta__elemento">Fecha: </span>
                            <span><?php echo $items_boleta[0]["fecha_compra"]?></span>
                        </p>
                        <p>
                            <span class="boleta__elemento">Metodo de pago: </span>
                            <span>Efectivo</span>
                        </p>
                    </div>
                    <div class="boleta__productos">
                        <span>ID</span>
                        <span>PRODUCTO</span>
                        <span>CANTIDAD</span>
                        <span>PRECIO UNITARIO</span>
                        <span>TOTAL</span>
                    </div>

                    <?php 
                        $arrItems = count($items_boleta);
                        for ($i = 0;$i < $arrItems; $i++){
                        $precio = number_format($items_boleta[$i]["precio"],0);
                        $total =  number_format($items_boleta[$i]["total"],0);   
                    ?>

                    <div class="boleta__items">
                        <span><?php echo $items_boleta[$i]["producto_id"]?></span>
                        <span><?php echo $items_boleta[$i]["nombre_producto"]?>
                        </span>
                        <span><?php echo $items_boleta[$i]["cantidad"]?></span>
                        <span>$<?php echo $precio?></span>
                        <span>$<?php echo $total?></span>
                    </div>

                    <?php 
                        $total_compra += $items_boleta[$i]["total"];
                    } ?>
                    <div class="boleta__productos">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span>TOTAL COMPRA</span>
                        <span>$<?php echo number_format($total_compra,0)?></span>
                    </div>
                    <button class="btn-volver">
                        <a href="<?php echo constant("URL"); ?>">Volver a inicio</a>
                    </button>
                </div>
            </div>

        

    </div>


    <script src="<?php echo constant("URL"); ?>js/producto.js"></script>
    <?php include_once "libs/scriptsJS.php" ?>
    <?php require "views/footer.php" ?>




</body>

</html>