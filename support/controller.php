<?php 
require_once("./conexion.php");
$conexion = new conexion();

$accion = $_POST['accion'];

if($accion == "actividades"){
	$idEje = $_POST['idEje'];
	$query = "select a.idActividad, a.nombre, m.* from eje e join actividad a on e.idEje=a.idEje join meta m on a.idActividad=m.idActividad and e.idEje='$idEje'";
	$resultados = $conexion->getResults($query);
	echo crearTabla($resultados);
}else if($accion == "entidades"){
	$idOrganismo = $_POST['idOrganismo'];
	$query = "select a.idActividad, a.nombre, m.* from organismo_actividad oa join actividad a on oa.idActividad=a.idActividad join meta m on a.idActividad=m.idActividad and oa.idOrganismo='$idOrganismo'";
	$resultados = $conexion->getResults($query);
	echo crearTabla($resultados);
}else if($accion == "sectores"){
	$idSector = $_POST['idSector'];
	$query = "select a.idActividad, a.nombre, m.* from organismo o join organismo_actividad oa on o.idOrganismo=oa.idOrganismo join actividad a on oa.idActividad=a.idActividad join meta m on a.idActividad=m.idActividad and o.idSector=$idSector";
	$resultados = $conexion->getResults($query);
	echo crearTabla($resultados);
}else if($accion == "cronograma"){
	$idActividad = $_POST['idActividad'];
	$query = "select * from cronograma where actividad='$idActividad' order by paso";
	$resultados = $conexion->getResults($query);
	echo crearCronograma($resultados);
}else if($accion == "geografico"){
	$idActividad = $_POST['idActividad'];
	$query = "select g.cve_entidad, g.actividad, g.cantidad, e.nombre from geografico g join entidad e on g.cve_entidad=e.cve_entidad and g.actividad='$idActividad'";
	$resultados = $conexion->getResults($query);
	echo crearGeografico($resultados);
}

function crearGeografico($resultados){
	$geo = "<table class='table table-striped'>";
	$geo.= "<thead class='headers'>";
	$geo.= "<tr><td>Entidad</td><td>Meta</td><td>ENE</td><td>FEB</td><td>MAR</td><td>ABR</td><td>MAY</td><td>JUN</td><td>JUL</td><td>AGO</td>";
	$geo.= "<td>SEP</td><td>OCT</td><td>NOV</td><td>DIC</td></tr>";
	$geo.= "</thead>";
	$geo.= "<tbody class='font-main'>";

	foreach($resultados as $resultado){
		$geo.= "<tr>";
		$geo.= "<td>".$resultado['nombre']."</td>";
		$geo.= "<td class='text-center'>".number_format($resultado['cantidad'])."</td>";

		for($i=1; $i<=12; $i++){
			$geo.= "<td></td>";
		}
	}
	$geo.= "</tbody>";
	$geo.= "</table>";

	return $geo;
}

function crearCronograma($resultados){
	$crono = "<table class='table table-striped'>";
	$crono.= "<thead class='headers'>";
	$crono.= "<tr><td>Paso</td><td>Descripción Paso</td><td>ENE</td><td>FEB</td><td>MAR</td><td>ABR</td><td>MAY</td><td>JUN</td><td>JUL</td><td>AGO</td>";
	$crono.= "<td>SEP</td><td>OCT</td><td>NOV</td><td>DIC</td></tr>";
	$crono.= "</thead>";
	$crono.= "<tbody class='font-main'>";

	//$fecha = intval(date('m', strtotime("2016-01-22")));
	//var_dump($fecha);
	foreach($resultados as $resultado){
		$mesInicio = intval(date('m', strtotime($resultado['fechaInicio'])));
		$mesFin = intval(date('m', strtotime($resultado['fechaFin'])));

		$crono.= "<tr>";
		$crono.= "<td class='text-center'>".$resultado['paso']."</td>";
		$crono.= "<td>".$resultado['descripcion_paso']."</td>";
		for($i=1; $i<=12; $i++){
			if($i>=$mesInicio && $i<=$mesFin){
				$crono.= "<td>";
				$crono.= "<div class='row'>";
				$crono.= "<div class='col-md-8 col-md-offset-2 gray porcentaje'></div>";
				$crono.= "</div>";
				$crono.= "<div class='row'>";
				$crono.= "<div class='col-md-8 col-md-offset-2 red porcentaje'>".$resultado['avance']."</div>";
				$crono.= "</div>";
				$crono.= "</td>";
			}else{
				$crono.="<td></td>";
			}
		}
	}
	$crono.= "</tbody>";
	$crono.= "</table>";

	return $crono;
}

function crearTabla($resultados){
	if(!empty($resultados)){
		$tabla = "<table class='table table-striped'>";
		$tabla.= "<thead class='headers'>";
		$tabla.= "<tr><td class='h-act'>Actividad</td><td>Cantidad</td><td>Producto</td><td>Avance</td><td class='h-icons'>Acciones</td></tr>";
		$tabla.= "</thead>";
		$tabla.= "<tbody class='font-main'>";
		foreach($resultados as $resultado){
			$tabla.= "<tr><td>".$resultado['nombre']."</td>";
			$tabla.= "<td class='text-center'>".number_format($resultado['cantidad'])."</td>";
			$tabla.= "<td>".$resultado['producto']."</td>";
			$tabla.= "<td></td>";
			$tabla.= "<td class='text-center'>";
			$tabla.= "<div class='row'>";

			$tabla.= ($resultado['cronograma'] == 1) ? (is_null($resultado['cronog']) ? "<div class='col-md-4'><i class='fa fa-clock-o'></i></div>" : "<div class='col-md-4'><i class='fa fa-clock-o pointer' name='".$resultado['idActividad']."' onclick='traerCronograma(this)'></i></div>") : "<div class='col-md-4'></div>";
			$tabla.= ($resultado['geografico'] == 1) ? (is_null($resultado['geo']) ? "<div class='col-md-4'><i class='fa fa-globe'></i></div>" : "<div class='col-md-4'><i class='fa fa-globe pointer' name='".$resultado['idActividad']."' onclick='traerGeografico(this)'></i></div>") : "<div class='col-md-4'></div>";
			$tabla.= ($resultado['demanda'] == 1) ? (is_null($resultado['dem']) ? "<div class='col-md-4'><i class='fa fa-line-chart'></i></div>" : "<div class='col-md-4'><i class='fa fa-line-chart pointer'></i></div>") : "<div class='col-md-4'></div>";
			
			$tabla.= "</div>";
			$tabla.= "</td></tr>";
		}
		$tabla.= "</tbody>";
		$tabla.= "</table>";

		return $tabla;

	}else{
		return "<div class='row no-info'><div class='col-md-10 col-md-offset-1 text-center'>¡No hay información!</div></div>";
	}
}
?>