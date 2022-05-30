<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/producto.css">
</head>
<body>
     
<?php require "views/header.php"?>

<div class="body">

    <!-- <?php var_dump($this->producto);?> -->
    <div class="detalle">
        <div class="detalle__contenedor">
            <div class="detalle__img">
                <img src="https://pcnitro.cl/19051-large_default/gv-r69xtaorus-m-16gd-tarjeta-de-video-aorus-amd-radeon-rx-6900-xt-master-16gb-4k-pcle-40-rgb.jpg" class="" 
                fetchpriority="high" importance="high" loading="lazy" draggable="false">
            </div>
            <div class="detalle__datos">
                <div class="detalle__nombre-producto">
                    <h1 class="detalle__titulo">Monitor Gamer Viewsonic XG2402 24" 144 Hz, 1ms, 2 x HDMI 1.4 , DisplayPort 1.2</h1>
                </div>
                <div class="detalle__marca">
                    <span>VIEWSONIC</span>
                </div>
                <div class="detalle__precio">
                    <span class="precio-transf">Pago con transferencia</span>
                    <span class="precio transferencia">$189.990</span>
                </div>
                <div class="detalle__precio">
                    <span class="precio-otros">Otros medios de pago</span>
                    <span class="precio otros-medios">$196.640</span>
                </div>
                <div class="detalle__stock">
                    <span>Stock: 16 unidades.</span>
                </div>
                <div class="detalle__separador"></div>
                <div class="detalle__agregar-carro">
                    <button class="detalle__btn-agregar-carro">Agregar al carrito</button>
                </div>
                <div class="detalle__cantidad-productos">
                    <div class="restar-producto detalle__cantidad">
                        <i class="fa-solid fa-minus"></i>
                    </div>
                    <span class="detalle__cantidad">1</span>
                    <div class="agregar-producto detalle__cantidad">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="detalle__envio">
                    <h2>Metodos de entrega</h2>
                    <ul>
                        <li>Despacho a domicilio</li>
                        <li>Retiro en agencias de Chilexpress, Starken o Bluexpress</li>
                        <li>Retiro en tienda</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav-tab">
            <ul>
                <li data-tab-target=".tab-content__descripcion" class="nav-tab__tab active">Descripcion</li>
                <li data-tab-target=".tab-content__garantia" class="nav-tab__tab">Garantia</li>
            </ul>
            <div class="tab-content">
                <div class="tab-content__descripcion active" data-tab-content>
                    <h2>Descripción</h2>
                    <p>
                        El XG2402 de ViewSonic® es un monitor de 24" Full HD con toda la velocidad y las características que 
                        necesitan los entusiastas del juego más intransigentes. Con una increíble velocidad de actualización nativa de 
                        144Hz, así como tecnología AMD FreeSync™, las capacidades de velocidad de actualización variables de este monitor 
                        prácticamente eliminan los cortes e interrupciones en la pantalla y ofrecen un juego fluido durante las escenas de 
                        acción de ritmo rápido. Un tiempo de respuesta ultra rápido de 1 ms y un bajo retardo de entrada ofrecen un rendimiento
                        de pantalla sin interrupciones, incluso en las secuencias con uso intensivo de gráficos. Para obtener una ventaja 
                        competitiva para ganar el juego, la función Game Mode optimiza la visualización para FPS, RTS y MOBA. Además de eso,
                        la función de estabilización de negros nivel 22 lo ayuda a encontrar a los enemigos que acechan en la oscuridad, mientras
                        que el monitor mantiene los colores y el contraste brillantemente enriquecidos. Con un soporte ergonómico inspirado en los
                        jugadores que cuenta con una funcionalidad integrada de gancho para auriculares y administración de cables, la XG2402 tiene
                        todo lo que necesita para que conquiste sus juegos y misiones de entretenimiento.
                    </p>
                    <h2>144Hz Refresh Rate</h2>
                    <p>
                        Con una velocidad de actualización de 144Hz, este monitor proporciona una gran fluidez visual y
                        gráficos impresionantes, independientemente de la rapidez con la que se desarrolla la acción en el juego.
                        Dígale adiós a los molestos marcadores y a la borrosidad que genera el movimiento, y dele la bienvenida a 
                        un excelente juego con los elementos visuales más regulares posibles.

                        *La imagen de este documento es para demostración de una imagen bajo diferentes resoluciones (o esquemas) 
                        solo como demostración y puede no ser la imagen de visualización real del producto.
                    </p>
                </div>
                <div class="tab-content__garantia" data-tab-content>
                    <div class="tab-content__duracion">
                        <h2>Duracion de garantia</h2>
                        <p>Garantía del fabricante de 12 meses.
                            Todo producto nuevo cuenta con una garantía legal de seis meses contados desde la fecha de compra en caso de falla de 
                            fábrica (Ley del consumidor 19.496). Si pasados los primeros 6 meses y hasta el término del mes 12, tu producto presenta
                            una falla de fábrica, puedes solicitar reparación del producto acercándote a cualquiera de nuestras tiendas a lo largo del país o 
                            directamente al servicio técnico autorizado del fabricante. Pasados los primeros 6 meses, si PC Factory determina que el producto es 
                            irreparable podría realizar cambios de productos o devolución de dinero en vez de la reparación.
                        </p>
                    </div>
                    <div class="tab-content__condiciones">
                        <h2>Condiciones</h2>
                        <p>
                            Para hacer uso de la Garantía del Fabricante, acércate a cualquiera de nuestras tiendas a lo largo del país 
                            (o directamente al servicio técnico autorizado del fabricante), para que mediante un diagnóstico se certifique que la falla es de 
                            fabricación y no es atribuible a un hecho imputable al usuario. Para gestionar la garantía te recomendamos presentar la boleta o factura original, 
                            el producto sin daño físico, embalajes completos y todos los accesorios del producto. Para mayor información sobre cómo opera la garantía, puedes 
                            contactar a nuestros ejecutivos de Servicio Post Venta al: + 56 2 2560 0023 o a través del Formulario de Contacto.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>






</div>






<?php require "views/footer.php"?>
<script src="https://kit.fontawesome.com/3879fbe72a.js" crossorigin="anonymous"></script>
<script src="<?php echo constant("URL");?>js/producto.js"></script>
</body>
</html>