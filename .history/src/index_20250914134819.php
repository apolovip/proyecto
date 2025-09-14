<?php

require_once "config/APP.php";
require_once "controller/vista_controller.php";

//instanciar el controlador de la vista para poder 
$controlador = new vista_controller();
$controlador->cargarVista();