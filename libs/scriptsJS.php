
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script src="https://kit.fontawesome.com/3879fbe72a.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>

        <?php
        if(isset($_SESSION["mensaje"]) && $_SESSION["mensaje"] != ""){
            
            ?>
            <script>
                Swal.fire({
                position: 'top-end',
                icon: "<?php echo $_SESSION["codigo"]?>",
                title: "<?php echo $_SESSION['mensaje'] ?>",
                showConfirmButton: false,
                timer: 1500
                })
            </script>
        <?php
        unset($_SESSION["mensaje"]);
        }?>
           
        

         