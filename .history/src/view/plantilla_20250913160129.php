<?php 

session_start();
include_once("model/main_model.php");

//inlcuir heaader, footer y demas elementos
include("assets/layouts")
include("html/". $vista);

?>