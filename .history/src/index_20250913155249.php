<?php

require_once "config/APP.php";
require_once "controller/vistaC.php";

$controlador = new vistaC();
$controlador->cargarVista();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include(NOMBRE)?></title>

</head>

<body>

</body>

</html>