<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.css">
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>public/css/index.css">
</head>

<body>

    <?php require "views/header.php";

    $producto = new ProductoModelo;
    $listaProductos = [];
    $listaProductos = $this->productos;
    $total = 0;
    $otrosMedios = 0;
    ?>
    <div class="slider">
        <div class="slider__contenedor">
            <button class="slider__anterior">
                <i class="fa-solid fa-angle-left"></i>
            </button>
            <div class="slider__lista">
                <div class="slider__item">
                    <img src="public/img/slider1.png" alt="">
                </div>
                <div class="slider__item">
                    <img src="public/img/slider2.png" alt="">
                </div>
                <div class="slider__item">
                    <img src="public/img/slider3.png" alt="">
                </div>
                <div class="slider__item">
                    <img src="public/img/slider4.png" alt="">
                </div>
                <div class="slider__item">
                    <img src="public/img/slider5.png" alt="">
                </div>
            </div>
            <button class="slider__siguiente">
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>
        <div class="slider__indicadores"></div>
    </div>

    <div class="body">
        <div class="ofertas">
            <h2 class="ofertas__titulo">Productos destacados y Ofertas</h2>
            <div class="slideshow">
                <div class="slideshow__contenedor">
                    <button class="slideshow__anterior">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>

                    <div class="slideshow__lista">

                        <?php
                        foreach ($listaProductos as $item) {
                            if ($item->precio > 120000 && $item->precio < 1200000) { ?>
                                <div class="producto" id="producto">
                                    <a href="<?php echo constant("URL"); ?>producto/mostrarProducto/<?php echo $item->id_producto; ?>" class="producto__contenedor">
                                        <div class="producto__imagen">
                                            <img src=<?php echo $item->foto_ref ?> alt="">
                                        </div>
                                        <div class="producto__desc-container">
                                            <span class="producto__marca"><?php echo $item->marca ?></span>
                                            <span class="producto__titulo"><?php echo $item->nombre ?></span>
                                        </div>
                                        <div class="producto__precio-container">
                                            <span class="producto__precio-transf">$<?php echo number_format($item->precio * 1, 0, "", ".") ?></span>
                                            <span class="producto__medio-pago">Transferencia</span>
                                            <span class="producto__precio-otros">$<?php echo number_format($item->precio * 1.04, 0, "", ".") ?></span>
                                            <span class="producto__medio-pago">Otros medios de pago</span>
                                        </div>
                                    </a>
                                </div>
                        <?php }
                        } ?>

                    </div>


                    <button class="slideshow__siguiente">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>

                    <div role="tablist" class="slideshow__indicadores"></div>
                </div>

            </div>
        </div>
        <div class="marcas">
            <h2 class="marcas__titulo">Marcas Destacadas</h2>
            <div class="marcas__container">
                <a href="<?php echo constant("URL"); ?>producto/marcas/ASUS" class="marcas__img">
                    <img src="public/img/asus-logo.png" alt="">
                </a>
                <a href="<?php echo constant("URL"); ?>producto/marcas/AMD" class="marcas__img">
                    <img src="public/img/amd-logo.png" alt="">
                </a>
                <a href="<?php echo constant("URL"); ?>producto/marcas/EVGA" class="marcas__img">
                    <img src="public/img/evga-logo.png" alt="">
                </a>
                <a href="<?php echo constant("URL"); ?>producto/marcas/HP" class="marcas__img">
                    <img src="public/img/hp-logo.png" alt="">
                </a>
                <a href="<?php echo constant("URL"); ?>producto/marcas/SAMSUNG" class="marcas__img">
                    <img src="public/img/samsung-logo.png" alt="">
                </a>
            </div>

        </div>

    </div>

    <?php include_once "libs/scriptsJS.php" ?>

    <?php require "views/footer.php" ?>


    <script src="<?php echo constant("URL"); ?>js/app.js"></script>
</body>

</html>