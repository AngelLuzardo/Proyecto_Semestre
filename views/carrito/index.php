<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/carroCompras.css">
    <title>Document</title>
</head>
<body>
     
<?php require "views/header.php"?>

<div class="body">

    <?php 
        $itemsCarrito = [];
        $itemsCarrito = $this->carroCompras;
        $total = 0;
        $otrosMedios = 0;
    ?>
    <div class="carro">
        <div class="carro__productos">
            <div class="carro__container">

                    <div class="producto__nombre-descripcion">
                        <div class="descripcion">
                            <div class="descripcion__imagen"></div>
                            <div class="descripcion__nombre">
                                <span>Nombre de producto</span>
                            </div>
                            <div class="descripcion__contenedor-precio">
                                <div class="descripcion__precio">
                                    <span class="precio-transf">Precio transferencia</span>
                                </div>
                                <div class="descripcion__precio">
                                    <span class="precio-otros">Otros medios de pago</span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php 
                if($itemsCarrito == []){
                    ?>
                    <div class="descripcion__mensaje">
                        <span>No hay productos en el carrito</span>
                    </div>
                <?php
                }
                foreach($itemsCarrito as $item){?>
                    <div class="producto">
                    <div class="producto__imagen">
                        <img src=<?php echo $item->foto_referencial?>
                        class="" fetchpriority="high" importance="high" loading="lazy" draggable="false">
                    </div>
                    <div class="producto__nombre-producto">
                        <h3 class="producto__titulo"><?php echo $item->nombre_producto?></h3>
                        <div class="producto__marca">
                            <span><?php echo $item->marca?></span>
                        </div>
                        <div class="producto__cantidad-productos">
                            <div class="restar-producto detalle__cantidad">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <span class="producto__cantidad"><?php echo $item->cantidad?></span>
                            <div class="agregar-producto detalle__cantidad">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                        <div class="producto__contenedor-precio">
                            <div class="producto__precio">
                                <span>$<?php echo number_format($item->precio_producto*1,0,"",".")?></span>
                            </div>
                            <div class="producto__precio">
                                <span>$<?php echo number_format($item->precio_producto*1.04,0,"",".")?></span>
                            </div>
                        </div>
                    </div>
                <?php
                    $total += $item->total;
                    $otrosMedios += $item->total;
                }?>




                <div class="carro__total-compra">
                    <div class="total">Total:</div>
                    <div class="detalle">
                        <div class="detalle__total-transf">
                            <span>$<?php echo number_format($total*1,0,"",".")?></span>
                        </div>
                        <div class="detalle__total-otros">
                            <span>$<?php echo number_format($otrosMedios*1.04,0,"",".")?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carro__detalle">
            <div class="carro__metodos-pago">
                <div class="carro__logo-metodos">
                    <img src="<?php echo constant("URL");?>public/img/webpay-logo.png" alt="">
                </div>
                <div class="carro__logo-metodos">
                    <img src="<?php echo constant("URL");?>public/img/mercado-pago-logo.png" alt="">
                </div>
            </div>
            <div class="carro__envio">
                <h2>Metodos de entrega</h2>
                <ul>
                    <li>Despacho a domicilio</li>
                    <li>Retiro en agencias de Chilexpress, Starken o Bluexpress</li>
                    <li>Retiro en tienda</li>
                </ul>
            </div>
            <div class="detalle__boton-pago">
                <a href="#">
                    <button class="btn-pago">Continuar compra</button>
                </a>
            </div>
        </div>

    </div>

</div>



<?php require "views/footer.php"?>
<script src="https://kit.fontawesome.com/3879fbe72a.js" crossorigin="anonymous"></script>
<script src="<?php echo constant("URL");?>js/producto.js"></script>
</body>
</html>