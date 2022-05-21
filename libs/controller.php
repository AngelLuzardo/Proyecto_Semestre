<?php

class Controller{
    function __construct()
    {
        $this->view = new View();
    }

    function loadModel($model){
        $url = "models/".$model."Modelo.php";
        if(file_exists($url)){
            require $url;

            $modelName = $model."Modelo";
            $this->model = new $modelName();
        }
    }

}



?>