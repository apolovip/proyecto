<?php

require_once "config/APP.php";
require_once "controller/vista_controller.php";

//instanciar el controlador
$controlador = new vista_controller();
$controlador->cargarVista();