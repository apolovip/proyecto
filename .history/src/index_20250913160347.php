<?php

require_once "config/APP.php";
require_once "controller/vista_controller.php";

$controlador = new vistaC();
$controlador->cargarVista();
