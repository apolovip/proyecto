<?php

require_once "config/app.php";
require_once "controller/vistaC.php";

$controlador = new vistaC();
$controlador->cargarVista();
