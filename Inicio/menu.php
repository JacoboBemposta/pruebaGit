<?php 
@session_start();

if(isset($_SESSION["nombre"])) require_once("Vista/Vistalogin.php");
else require_once("Vista/Vistanologin.php");

?>