<?php require "views/header.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>


<div class="container-fluid" id="cont_miperfil">
  <div class="cont1">
    <div class="cont_bienvenido">
        <div class="cont_saludo ">
            <div class="cont_icono"></div>
            <label for="" class="form-label saludo">Bienvenido</label>
            <label for="" class="form-label nombre"><?php echo " ".$nombres." ".$apellidop?></label>
        </div>
    </div>
    <div class="cont_datos">
        <div class="cont_opciones">
            <div class="cont_botones">
                <a class="btn btn_datos" id="btn-datos" href="#" role="button">Datos Personales</a>
                <span class="cont_line"></span>
                <a class="btn btn_clave" id="btn-clave" href="#" role="button">Cambio de Contraseña</a>
                <span class="cont_line"></span>
                <a class="btn btn_direccion" id="btn-direccion" href="#" role="button">Direcciones</a>
                <span class="cont_line"></span>
                <a class="btn btn_direccion" id="btn-direccion" href="<?php echo constant("URL"); ?>usuario/cerrarSesion" role="button">Cerrar Sesion</a>
                <span class="cont_line"></span>
            </div>
        </div>
        <div class="cont_input">
            <div class="cont_datosPer">
                <div class="datosPer">
                    <label for="" class="cont_titulo">Datos Personales</label>
                    <br/><br/>
                    <form class="row g-3 form_datos_per" action="<?php echo constant("URL"); ?>usuario/modificarUsuario" method="post">
                        <input type="hidden" class="form-control" id="txtCorreo" name="txtCorreo" value="<?php echo $mail?>">
                        <input type="hidden" class="form-control" id="txtClave" name="txtClave" value="<?php echo $clave?>">
                        <div class="col-md-4">
                            <label for="txtNombre" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $nombres?>">
                        </div>
                        <div class="col-md-4">
                            <label for="txtApeP" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="txtApeP" name="txtApeP" value="<?php echo $apellidop?>">
                        </div>
                        <div class="col-md-4">
                            <label for="txtApeM" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="txtApeM" name="txtApeM" value="<?php echo $apellidom?>">
                        </div>
                        <br/><br/>
                        <div class="col-md-4">
                            <label for="txtRut" class="form-label">Rut</label>
                            <input type="text" class="form-control" id="txtRut" value="<?php echo $rut?>" disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="txtFono" class="form-label">Numero Telefonico</label>
                            <input type="text" class="form-control" id="txtFono" value="<?php echo $fono?>" disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="txtCorreo" class="form-label">Correo Electronico</label>
                            <input type="text" class="form-control" id="txtCorreo" value="<?php echo $mail?>" disabled>
                        </div>
                        <div class="col-6 btnguardatos">
                            <button type="submit" class="btn btnGuardarDatos" id="btnGuardarDatos" name="btnGuardarDatos">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="cont_datosClave">
                <div class="cont_clave">
                    <label for="" class="cont_titulo">Cambio de Contraseña</label>
                    <br/>
                    <form class="row g-3 form_datos_per" action="cambiarClave.php" method="post">
                        <div class="col-md-12">
                            <label for="txtClaveActual" class="form-label">Contraseña Actual</label>
                            <input type="password" class="form-control" id="txtClaveActual" name="txtClaveActual">
                        </div>
                        <div class="col-md-12">
                            <label for="txtClaveNueva" class="form-label">Contraseña Nueva</label>
                            <input type="password" class="form-control" id="txtClaveNueva" name="txtClaveNueva">
                        </div>
                        <div class="col-6 btnguardatos">
                            <button type="submit" class="btn btnGuardarDatos" id="btnGuardarDatos" name="btnGuardarDatos">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contDireccion">
                <div class="contDirec">
                    <label for="" class="cont_titulo">Cambio de Dirección</label>
                    <br/>
                    <form class="row g-3 form_datos_per" action="cambiarDireccion.php" method="post">
                        <div class="col-md-6">
                            <select class="form-select region" name="regionSelect" id="regionSelect" aria-labelledby="Default select example">
                                <!-- <option value="0">Seleccionar Region</option> -->
                                <option value=""><?php echo $region?></option>
                                <option value=""></option>
                                <?php 
                                    $crud->listarRegion();  
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select comunas" name="comunaSelect" id="comunaSelect" aria-label="Default select example">
                                <!-- <option value="0">Seleccionar Comuna</option> -->
                                <option value=""><?php echo $comuna?></option>
                                <option value=""></option>
                            </select>
                        </div>  
                        <div class="col-md-12">
                            <label for="txtDireccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" value="<?php echo $calle ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="txtNumeracion" class="form-label">#Numeración</label>
                            <input type="text" class="form-control" id="txtNumeracion" name="txtNumeracion" value="<?php echo $numero?> ">
                        </div>
                        <div class="col-6 btnguardatos">
                            <button type="submit" class="btn btnGuardarDatos" id="btnGuardarDatos" name="btnGuardarDatos">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<script src="<?php echo constant("URL"); ?>js/perfil.js"></script>

<?php include "libs/scriptsJS.php"?>
<?php require "views/footer.php"?>