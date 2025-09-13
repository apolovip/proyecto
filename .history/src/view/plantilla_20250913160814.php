<?php

session_start();
include_once("model/main_model.php");

//inlcuir heaader, footer y demas elementos
include_once("assets/layouts/links.php");
include_once("assets/layouts/header.php");
include_once("html/" . $vista);
include_once("assets/layouts/footer.php");
include_once("assets/layouts/scripts.php");
