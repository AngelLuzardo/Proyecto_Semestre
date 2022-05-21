<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/index.css"> 
</head>
<body>
    
    <?php require "views/header.php"?>


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
                        <div class="producto" id="producto">
                                <a href="<?php echo constant("URL");?>producto/mostrarProducto/1" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>
                        
                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>

                        <div class="producto" id="producto">
                                <a href="#" class="producto__contenedor">
                                    <div class="producto__imagen">
                                        <img src="public/img/pro1.png" alt="">
                                    </div>
                                    <div class="producto__desc-container">
                                        <span class="producto__marca">Zotac</span>
                                        <span class="producto__titulo">Tarjeta de video Zotac GeForce GTX 1650 AMP, 4GB, GDDR6, 128-Bit, HDMI</span>
                                    </div>
                                    <div class="producto__precio-container">
                                        <span class="producto__precio-transf">$200.000</span>
                                        <span class="producto__medio-pago">Transferencia</span>
                                        <span class="producto__precio-otros">$210.000</span>
                                        <span class="producto__medio-pago">Otros medios de pago</span> 
                                    </div>
                                </a>    
                        </div>
                        
                    </div>
                    

                    <button class="slideshow__siguiente">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>

                    <div role="tablist" class="slideshow__indicadores"></div>
                </div>
                
            </div>
        </div>
    </div>
    
    <?php require "views/footer.php"?>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/3879fbe72a.js" crossorigin="anonymous"></script>
    <script src="<?php echo constant("URL");?>js/app.js"></script>
</body>
</html>