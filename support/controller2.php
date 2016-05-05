<?php 
require_once("./conexion.php");
$conexion = new conexion();

$accion = $_POST['accion'];

switch ($accion) {
	case 'actividad':
		$idEje = $_POST['idEje'];
		$query = "select idActividad, nombre from actividad where idAux = (select idAux from eje where idEje='$idEje');";
		$resultados = $conexion->getResults($query);
		echo crearSelect($resultados);
		break;
	
	default:
		
		break;
}

function crearSelect($resultados){
	foreach($resultados as $resultado){
		$listaActividades.= "<option value='".$resultado['idActividad']."'>".$resultado['nombre']."</option>";
	}
	return $listaActividades;
}
?>