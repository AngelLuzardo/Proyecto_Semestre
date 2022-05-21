<?php




class App{
    function __construct()
    {
        require_once "controllers/errorRecurso.php";
        $url = isset($_GET["url"]) ? $_GET["url"]:null; 
        $url = rtrim($url,"/");
        $url = explode("/",$url);

        if(empty($url[0])){
            $dirrControlador = "controllers/main.php";
            require_once $dirrControlador;
            $controlador = new Main();
            return false;
        }

        $dirrControlador = "controllers/". $url[0] .".php";

        if(file_exists($dirrControlador)){
            require_once $dirrControlador;

            $controlador = new $url[0];
            $controlador->loadModel($url[0]);

            $parametros = sizeof($url);

            if($parametros > 1){
                if($parametros > 2){
                    $param = [];
                    for($i=2; $i < $parametros; $i++){
                        array_push($param , $url[$i]);
                    }
                    $controlador->{$url[1]}($param);
                }else{
                    $controlador->{$url[1]}();
                }
            }
        }else{
            $controlador = new ErrorRecurso();
        }
        

    }
}



?>