<?php

session_start();

$exepciones = ["404-view.php"];

if (!in_array($vista, $exepciones)) {
    include_once("assets/layouts/links.php");
    include_once("assets/layouts/header.php");
    include_once("html/" . $vista);
    include_once("assets/layouts/footer.php");
    include_once("assets/layouts/scripts.php");
    exit();
}

include_once("assets/layouts/links.php");
include_once("html/" . $vista);
include_once("assets/layouts/scripts.php");


//inlcuir heaader, footer y demas elementos
