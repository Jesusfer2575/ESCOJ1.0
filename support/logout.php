<?php
require_once("./conexion.php");
if($_POST['logout']){
	$conexion = new conexion();
	$conexion->endSession();
}
?>