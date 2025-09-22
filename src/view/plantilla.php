<?php

session_start();

$exepciones = ["404-view.php"];

if (!in_array($vista, $exepciones)) {
    include_once("assets/elements/links.php");
    include_once("assets/elements/header.php");
    include_once("html/" . $vista);
    include_once("assets/elements/footer.php");
    include_once("assets/elements/scripts.php");
    exit();
}

include_once("assets/elements/links.php");
include_once("html/" . $vista);
include_once("assets/elements/scripts.php");
