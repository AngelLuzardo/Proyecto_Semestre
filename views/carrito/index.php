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
        $itemsCarrito = [];
        $itemsCarrito = $this->carroCompras;
        $total = 0;
        $otrosMedios = 0;
        $listaProductos = [];

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
                    if ($itemsCarrito == []) {
                    ?>
                        <div class="descripcion__mensaje">
                            <span>No hay productos en el carrito</span>
                        </div>
                    <?php
                    }
                    foreach ($itemsCarrito as $item) { ?>
                        <div class="producto">
                            <div class="producto__imagen">
                                <img src=<?php echo $item->foto_referencial ?> class="" fetchpriority="high" importance="high" loading="lazy" draggable="false">
                            </div>
                            <div class="producto__nombre-producto">
                                <h3 class="producto__titulo"><?php echo $item->nombre_producto ?></h3>
                                <div class="producto__marca">
                                    <span><?php echo $item->marca ?></span>
                                </div>
                                <div class="producto__cantidad-productos">
                                    <div class="producto__restar-producto">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <div id="cantidad" class="producto__cantidad"><?php echo $item->cantidad ?></div>
                                    <div class="producto__agregar-producto">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <div hidden id="stock"><?php echo $item->stock ?></div>
                                </div>
                            </div>
                            <div class="producto__contenedor-precio">
                                <div class="producto__precio">
                                    <span>$<?php echo number_format($item->precio_producto * 1, 0, "", ".") ?></span>
                                </div>
                                <div class="producto__precio">
                                    <span>$<?php echo number_format($item->precio_producto * 1.04, 0, "", ".") ?></span>
                                </div>
                            </div>
                            <div class="producto__btn-container">
                                <form action="<?php echo constant("URL"); ?>carroCompras/eliminarProducto/<?php echo $item->id_producto ?>" method="post">
                                    <button class="producto__btn-eliminar-producto">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php

                        $itemLista["idProducto"] = $item->id_producto;
                        $itemLista["cantidad"] = $item->cantidad;
                        array_push($listaProductos,$itemLista);
                       
                        $total += $item->total;
                        $otrosMedios += $item->total;
                    } 
                        $_SESSION["total_compra"] = $total;
                        $_SESSION["listaProductos"] = $listaProductos;
                    ?>




                    <div class="carro__total-compra">
                        <div class="total">Total:</div>
                        <div class="detalle">
                            <div class="detalle__total-transf">
                                <span>$<?php echo number_format($total * 1, 0, "", ".") ?></span>
                            </div>
                            <div class="detalle__total-otros">
                                <span>$<?php echo number_format($otrosMedios * 1.04, 0, "", ".") ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carro__detalle">
                <div class="carro__metodos-pago">
                    <div class="carro__logo-metodos">
                        <img src="<?php echo constant("URL"); ?>public/img/webpay-logo.png" alt="">
                    </div>
                    <div class="carro__logo-metodos">
                        <img src="<?php echo constant("URL"); ?>public/img/mercado-pago-logo.png" alt="">
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
                    <a href="<?php echo constant("URL");?>carroCompras/procesarCompra">
                        <button class="btn-pago">Continuar compra</button>
                    </a>
                </div>
            </div>

        </div>

    </div>


    <script src="<?php echo constant("URL"); ?>js/producto.js"></script>
    <?php include_once "libs/scriptsJS.php" ?>
    <?php require "views/footer.php" ?>




</body>

</html>