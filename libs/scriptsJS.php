<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://kit.fontawesome.com/3879fbe72a.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>




<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["mensaje"]) && $_SESSION["mensaje"] != "") {

?>
    <script>
        Swal.fire({
            position: 'top-end',
            icon: "<?php echo $_SESSION["codigo"] ?>",
            title: "<?php echo $_SESSION['mensaje'] ?>",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php
    
} 
unset($_SESSION["mensaje"]);
?>



<?php

if (isset($_SESSION['correo'])) {
    $mail = $_SESSION['correo'];
    $clave = $_SESSION['clave'];
    $nombres = $_SESSION['nombres'];
    $apellidop = $_SESSION['apellidop'];
    $apellidom = $_SESSION['apellidom'];
    $fecha_nac = $_SESSION['fecha_nac'];
    $fono = $_SESSION['fono'];
    $region = $_SESSION['region'];
    $comuna = $_SESSION['comuna'];
    $calle = $_SESSION['calle'];
    $numero = $_SESSION['numero'];
    $rut = $_SESSION['rut'];
    
} else {
    $mail = "";
    $clave = "";
    $nombres = "";
    $apellidop = "";
    $apellidom = "";
    $fecha_nac = "";
    $fono = "";
    $region = "";
    $comuna = "";
    $calle = "";
    $numero = "";
    $rut =  "";
}

?>
