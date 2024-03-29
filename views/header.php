<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['correo'])) {
    $cuenta = true;
} else {
    $cuenta = false;
}

?>
<?php include_once "libs/scriptsJS.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>public/css/miperfil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>



<body>
    <div class="header">
        <div class="header__contenedor">
            <div class="header__logo">
                <a href="<?php echo constant("URL");?>">
                    <img src="<?php echo constant("URL"); ?>public/img/logo.png" alt="" srcset="">
                </a>
            </div>
            <form class="header__search" action="<?php echo constant("URL");?>producto/busquedaProducto" method="get">
                <div class="header__search">
                    <div class="search">
                        <input type="text" name="barra_busqueda" class="search__input" placeholder="Buscar productos...">
                        <button class="search__boton" name="buscar">
                            <i class="search__icon fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="header__usuario-carro">
                <div class="header__usuario">
                    <form id="login" method="post" action="<?php echo constant("URL");?>usuario/validar">
                        <a class="btn__carro" href="<?php echo constant("URL");?>usuario/render" id="btn_link-perfil">
                            <button type="button" class="btn header_btnMicuenta" id="btnMicuenta" data-bs-toggle="dropdown">
                                <i class="fa-regular fa-circle-user iconUsuario"></i>
                            </button>
                        </a>

                        <ul class="dropdown-menu menuLogin">
                            <label for="iniciarsession" class="form-label inisesion" id="inisesion" hidden>Iniciar Sesión</label>
                            <label for="miperfil" class="form-label miPerfil">Mi Perfil</label>
                            <li>
                                <div class="mb-6 nav_input">
                                    <input type="email" class="form-control CorreoElec" id="CorreoElec" name="txtCorreo" placeholder="Correo Electrónico" autofocus="autofocus">
                                </div>
                            </li>
                            <br/>
                            <li>
                                <div class="mb-6 nav_input">
                                    <input type="password" class="form-control Contraseña" id="Contrasena" name="txtClave" placeholder="Contraseña">
                                </div>
                            </li>
                            <br/>
                            <li>
                                <div class="mb-6 nav_cont_boton">
                                    <button class="btn btnSesion nav_input" type="submit" id="btnSesion" name="btnIniciarSesion">Iniciar Sesión</button>
                                    <a class="btn btnPerfil" id="btnPerfil" href="<?php echo constant("URL");?>usuario/render" role="button">Mi Perfil</a>
                                </div>  
                            </li>
                            <br/>
                            <li><hr class="dropdown-divider"></li>
                                <button type="button" class="btn btn-registrar nav_input" id="btn-registrar" >Registrate aqui!</button>
                                <div id="cerrarSesion" class="cs"><a class="cerrarsession" href="<?php echo constant("URL");?>usuario/cerrarSesion">Cerrar Sesion</a></div>
                        </ul> 
                    </form>
                </div>
                <div class="header__carro">
                    <a class="btn__carro" href="<?php echo constant("URL");?>carroCompras/render">
                        <button type="button" class="btn header_btnMicuenta ">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="nav__contenedor">
            <ul>
                <li>
                    <button type="button" class="btn btn_cat btnCat"></button>
                    <button type="button" class="btn btn_cat_cerrar btnCatCerrar"></button>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" id="nav_link" class="c1">Componentes</a>
                    <div class="nav_categorias c1" id="c1">
                        <div class="nav_opciones">
                            <a href="<?php echo constant("URL");?>producto/categoria/procesadores" class="nav_componentes">Procesadores</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/discos-duros" class="nav_componentes">Discos Duros</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/placas-madres" class="nav_componentes">Placas Madres</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" id="nav_link" class="c2">Suministro Oficina</a>
                    <div class="nav_categorias c2" id="c2">
                        <div class="nav_opciones">
                            <a href="<?php echo constant("URL");?>producto/categoria/tinta" class="nav_suministros">Tintas</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/papel-impresora" class="nav_suministros">Papel impresora</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/escritorios" class="nav_suministros">Escritorios</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" id="nav_link" class="c3">Audio</a>
                    <div class="nav_categorias c3" id="c3">
                        <div class="nav_opciones">
                            <a href="<?php echo constant("URL");?>producto/categoria/audifonos" class="nav_audio">Audifonos</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/parlantes" class="nav_audio">Parlantes</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/instrumentos" class="nav_audio">Instrumentos<br /><br /> musicales</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" id="nav_link" class="c4">Conectividad y Redes</a>
                    <div class="nav_categorias c4" id="c4">
                        <div class="nav_opciones">
                            <a href="<?php echo constant("URL");?>producto/categoria/switch" class="nav_redes">Switch</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/router" class="nav_redes">Router</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/cableado" class="nav_redes">Cableado</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" id="nav_link" class="c5">Gaming</a>
                    <div class="nav_categorias c5" id="c5">
                        <div class="nav_opciones">
                            <a href="<?php echo constant("URL");?>producto/categoria/tarjetas-de-video" class="nav_game">Tarjetas de Video</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/juegos" class="nav_game">Juegos</a>
                            <a href="<?php echo constant("URL");?>producto/categoria/consolas" class="nav_game">Consolas</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <form method="post" action="<?php echo constant("URL");?>usuario/registrarCliente" id="registrate">
        <div class="modal fade" id="modalRegistrarse" tabindex="-1" aria-labelledby="modalRegistrarse" aria-hidden="true" data-backdrop="static" data-keyboard="false" role="dialog">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title col-md-10">Registro</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="DatosPersonales" class="form-label datosPer">Datos Personales</label>
                                    <div class="col-md-6"><input type="text" class="form-control rut" placeholder="RUT" aria-label="Rut" name="rut" ></div>
                                    <div class="col-md-6"><input type="text" class="form-control Nombres" placeholder="Nombres" aria-label="Nombres" name="nombre" ></div>
                                    <br><br><br>
                                    <div class="col-md-6"><input type="text" class="form-control Apellido-Paterno" placeholder="Apellido Paterno" aria-label="Apellido Paterno" name="apep" ></div>
                                    <div class="col-md-6"><input type="text" class="form-control Apellido-Materno" placeholder="Apellido Materno" aria-label="Apellido Materno" name="apem" ></div>
                                    <br><br><br>
                                    <div class="col-md-6"><input type="date" class="form-control FechaNac" placeholder="Fecha de Nacimiento" aria-label="Fecha de Nacimiento" name="fechaNac" ></div>
                                    <div class="col-md-6"><input type="text" class="form-control Fono" id="fono" placeholder="+56 958622987" aria-label="+56 958622987" name="fono" ></div>
                                    <br><br><br>
                                    <label for="CrearUsuario" class="form-label creaUsu">Crear Usuario</label>
                                    <div class="col-md-6"><input type="email" class="form-control Correo-Electronico" id="CorreoElectronico"  name="mail" placeholder="Correo Electrónico" aria-label="Correo Electronico"></div>
                                    <div class="col-md-6"><input type="password" class="form-control Clave" id="Clave" placeholder="Contraseña"  name="clave" aria-label="Contraseña"></div>
                                    <br><br><br>
                                    <label for="Direccion" class="form-label direc" >Dirección</label>
                                    <div class="col-md-6">
                                        <select class="form-select region" name="selectRegion" id="selectRegion" aria-labelledby="Default select example">
                                            <option value="0">Seleccionar Region</option>
                                            <?php
                                                include_once "models/usuarioModelo.php";
                                                $crud = new UsuarioModelo;
                                                $crud->listarRegion();
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select comuna" name="selectComuna" id="selectComuna" aria-label="Default select example">
                                            <option value="0">Seleccionar Comuna</option>
                                        </select>
                                    </div>    

                                    <br><br><br>
                                    <div class="col-md-6"><input type="text" class="form-control Direccion" id="direccion" placeholder="Pasaje Blanco Encalda" aria-label="Pasaje Blanco Encalda" name="calle"></div>
                                    <div class="col-md-6"><input type="text" class="form-control NumeroDirec" id="numeroDirec" placeholder="#2006" aria-label="#2006" name="numeroDirec"></div>

                                </div>
                        </div>
                        <div class="modal-footer"><button type="submit" class="btn btnRegistrar">Registrar</button></div>
                        <br>
                    </div>
                </div>
        </div>
    </form>
    <div class="nav_cont_cat">
    <div class="nav_cat">
        <div class="nav_titulo_cat"><label for="TituloCategoria" class="form-label nav_cat_titulo">HOLA </label><span class="nav_cat_titulo"><?php echo " ".$nombres;?></span></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Categorias</th>
                </tr>
            </thead>
            <tbody>
                <?php $crud->listarCategorias(); ?>
            </tbody>
        </table>
        </div>
    </div>
   
    <?php 
    if(!$cuenta){
        echo '<script>
            var btn_perfil = document.getElementById("btnMicuenta");
            var a = document.getElementById("btn_link-perfil"); 

            a.remove();
            var form = document.getElementById("login"); 
            form.prepend(btn_perfil);
        </script>';
    }else{
        echo '<script>
            var btn_perfil = document.getElementById("btnMicuenta");
            
            btn_perfil.removeAttribute("data-bs-toggle");
        </script>';
    }

    ?>
    <script src="<?php echo constant("URL"); ?>js/header.js"></script>

