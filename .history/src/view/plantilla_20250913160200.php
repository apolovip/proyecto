<?php 

session_start();
include_once("model/main_model.php");

//inlcuir heaader, footer y demas elementos
include("assets/layouts/links.php");
include("assets/layouts/header.php");
include("html/". $vista);
include("assets/layouts/footer.php");
include("assets/layouts/scripts.php");

?>