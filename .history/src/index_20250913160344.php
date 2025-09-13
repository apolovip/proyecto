<?php

require_once "config/APP.php";
require_once "controller/vista.php";

$controlador = new vistaC();
$controlador->cargarVista();

?>