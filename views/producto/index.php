<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
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

    <?php 
    
    $producto = new ProductoModelo; 
    $producto = $this->producto;
    ?>
    <div class="detalle">
        <div class="detalle__contenedor">
            <div class="detalle__img">
                <img src="<?php echo $producto->foto_ref ?>" class="" 
                fetchpriority="high" importance="high" loading="lazy" draggable="false">
            </div>
            <div class="detalle__datos">
                <div class="detalle__nombre-producto">
                    <h1 class="detalle__titulo"><?php echo $producto->nombre ?></h1>
                </div>
                <div class="detalle__marca">
                    <span><?php echo $producto->marca ?></span>
                </div>
                <div class="detalle__precio">
                    <span class="precio-transf">Pago con transferencia</span>
                    <span class="precio transferencia">$<?php echo number_format($producto->precio,0) ?></span>
                </div>
                <div class="detalle__precio">
                    <span class="precio-otros">Otros medios de pago</span>
                    <span class="precio otros-medios">$<?php echo number_format($producto->precio*1.05,0)?></span>
                </div>
                <?php if($producto->cantidad < 1){ ?>
                <div class="detalle__stock --red">
                    <span>Stock: 
                        <?php echo "Sin Stock";?>
                    </span>
                </div>
                <?php }else{?>
                    <div class="detalle__stock">
                    <span>Stock: <?php echo $producto->cantidad;?> unidades.</span>
                </div>
                <?php }?>
                <div class="detalle__separador"></div>
                <div class="detalle__agregar-carro">
                    <form action="<?php echo constant("URL");?>carroCompras/agregarProducto" method="post">
                        <?php if($producto->cantidad < 1){ ?>
                            <button class="detalle__btn-agregar-carro --nostock" name="idProducto" value="<?php echo $producto->idproducto?>" disabled>Agregar al carrito</button>
                        <?php }else{?>
                            <button class="detalle__btn-agregar-carro" name="idProducto" value="<?php echo $producto->idproducto?>" >Agregar al carrito</button>
                        <?php }?>
                        <input id="cantidadProductos" type="hidden" name="cantidadProductos" value="1">
                    </form>
                </div>
                <div class="detalle__cantidad-productos">
                    <div id="restar" class="restar-producto">
                        <i class="fa-solid fa-minus"></i>
                    </div>
                    <div id="cantidad" class="producto__cantidad">1</div>
                    <div id="sumar" class="agregar-producto sumar">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div hidden id="stock"><?php echo $producto->cantidad?></div>
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
                    <div class="descripcion__container">
                        <?php echo $producto->descripcion ?>
                    </div> 
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



<script src="<?php echo constant("URL");?>js/producto.js"></script>
<?php include "libs/scriptsJS.php"?>

<?php require "views/footer.php"?>

</body>
</html>