<?php

class ErrorRecurso extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->mensaje = "El recurso no existe";
       $this->view->render("error/index");
    }
}



?>