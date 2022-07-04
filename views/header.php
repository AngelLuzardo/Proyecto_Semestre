<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.css"> 
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/default.css">
    
    
   
</head>
<body>
<div class="header">
        <div class="header__contenedor">
            <div class="header__logo">
                            
            </div>
            <div class="header__search">
                <div class="search">
                    <input type="text" name="barra_busqueda" class="search__input" placeholder="Buscar productos...">
                    <button class="search__boton">
                        <i class="search__icon fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                
            </div>
            <div class="header__usuario-carro">
                <div class="header__usuario">
                    <!-- <i class="fa-solid fa-user"></i> -->
                    <form id="login" method="post" action="">
                            <button type="button" class="btn header_btnMicuenta " data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-circle-user iconUsuario"></i>
                            </button>
                            <ul class="dropdown-menu header_menuLogin">
                                <label for="iniciarsession" class="form-label">Iniciar Sesión</label>
                                <li>
                                    <div class="mb-6">
                                        <input type="email" class="form-control form_CorreoElec" id="CorreoElec" placeholder="Correo Electrónico" autofocus="autofocus">
                                    </div>
                                </li>
                                <br/>
                                <li>
                                    <div class="mb-6">
                                        <input type="password" class="form-control form_Contraseña" id="Contraseña" placeholder="Contraseña">
                                    </div>
                                </li>
                                <br/>
                                <li>
                                    <div class="mb-6">
                                        <button class="btn header_btnSesion" type="submit" id="btnSesion">Iniciar Sesión</button>
                                    </div>  
                                </li>
                                <br/>
                                <li><hr class="dropdown-divider"></li>
                                    <button type="button" class="btn header_btn-registrar" id="btn-registrar" >Registrate aqui!</button>
                                <!--<li><a class="dropdown-item linkRegistrate" id="linkRegistrate" data-bs-toggle="modal" data-bs-target="modalRegistrarse" href="#"></a></li>-->
                            </ul> 
                        </form>
                </div>
                <!-- <p>Mi cuenta</p> -->
                <div class="header__carro">
                    <a class="btn__carro" href="<?php echo constant("URL");?>carroCompras/render" >
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
                <li><a href="#">Componentes</a></li>
                <li><a href="#">Suministro Oficina</a></li>
                <li><a href="#">Audio</a></li>
                <li><a href="#">Conectividad y Redes</a></li>
                <li><a href="#">Gaming</a></li>
            </ul>
        </div>
</div>

<div class="modal fade" id="modalRegistrarse" tabindex="-1" aria-labelledby="modalRegistrarse" aria-hidden="true" data-backdrop="static" data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title col-md-10">Registro</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo constant('URL');?>registar/registrarCliente" id="registrate">
                        <div class="row mb-3">
                            <label for="DatosPersonales" class="form-label datosPer">Datos Personales</label>
                            <div class="col-md-6"><input type="text" class="form-control rut" placeholder="RUT" aria-label="Rut" autofocus></div>
                            <div class="col-md-6"><input type="text" class="form-control Nombres" placeholder="Nombres" aria-label="Nombres"></div>
                            <br><br><br>
                            <div class="col-md-6"><input type="text" class="form-control Apellido-Paterno" placeholder="Apellido Paterno" aria-label="Apellido Paterno"></div>
                            <div class="col-md-6"><input type="text" class="form-control Apellido-Materno" placeholder="Apellido Materno" aria-label="Apellido Materno"></div>
                            <br><br><br>
                            <div class="col-md-6"><input type="date" class="form-control FechaNac" placeholder="Fecha de Nacimiento" aria-label="Fecha de Nacimiento"></div>
                            <div class="col-md-6"><input type="text" class="form-control Fono" id="fono" placeholder="+56 958622987" aria-label="+56 958622987"></div>
                            <br><br><br>
                            <label for="CrearUsuario" class="form-label creaUsu">Crear Usuario</label>
                            <div class="col-md-6"><input type="email" class="form-control Correo-Electronico" id="CorreoElectronico" placeholder="Correo Electrónico" aria-label="Correo Electronico"></div>
                            <div class="col-md-6"><input type="password" class="form-control Clave" id="Clave" placeholder="Contraseña" aria-label="Contraseña"></div>
                            <br><br><br>
                            <label for="Direccion" class="form-label direc">Dirección</label>
                            <div class="col-md-6">
                                <select class="form-select region" aria-labelledby="Default select example">
                                    <option selected>Selecciona Región</option>
                                    <option value="Antofagasta">One</option>
                                    <option value="Region Metropolitana">Two</option>
                                    <option value="Araucacia">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select comuna" aria-label="Default select example">
                                    <option selected>Selecciona Comuna</option>
                                    <option value="Tocopilla">One</option>
                                    <option value="Maipu">Two</option>
                                    <option value="Padre Las Casas">Three</option>
                                </select>
                            </div>    

                            <br><br><br>
                            <div class="col-md-6"><input type="text" class="form-control Direccion" id="direccion" placeholder="Pasaje Blanco Encalda" aria-label="Pasaje Blanco Encalda"></div>
                            <div class="col-md-6"><input type="number" class="form-control NumeroDirec" id="numeroDirec" placeholder="#2006" aria-label="#2006"></div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button type="button" class="btn btnRegistrar">Registrar</button></div>
                <br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        $(document).ready(function(){
            $("#btn-registrar").click(function(){
                $("#modalRegistrarse").modal("show");
            });
            
        });
        
    </script>