<?php
$query = "select * from eje order by idAux";
$query2 = "select * from organismo";
$query3 = "select * from sector";
$ejes = $conexion->getResults($query);
$organismos = $conexion->getResults($query2);
$sectores = $conexion->getResults($query3);
$listaEjes = "";
$listaOrganismos = "";
$listaSectores = "";

foreach($ejes as $eje){
	$listaEjes.= "<li name='".$eje['idEje']."' onclick='ejesEstrategicos(this)'><a>Eje ".$eje['idEje'].". ".$eje['nombre']."</a></li>";
}

foreach($organismos as $org){
	$listaOrganismos.= "<li name='".$org['idOrganismo']."' onclick='organismos(this)'><a>".$org['nombre']."</a></li>";
}

foreach($sectores as $sector){
	$listaSectores.= "<li name='".$sector['idSector']."' onclick='sectores(this)'><a>".$sector['nombre']."</a></li>";
}
?>
<div class="row marg-imgs">
	<div class="col-md-3 col-md-offset-1">
		<img class="img-header" src="./media/logo_sedatu.png" />
	</div>
	<div class="col-md-4 text-center title-main padd-title">Tablero Maestro Agrario, Territorial y Urbano</div>
	<div class="col-md-3 text-right">
		<img class="img-header" src="./media/mover_mexico.png" />
	</div>
</div>
<div class="row marg-menu">
	<div class="col-md-10 col-md-offset-1 menu-main">
		<div class="row text-center">
			<div id="inicio" class="col-md-2 padd-titles-menu option">
				<a class="title-menu" onclick="home()">Inicio</a>
			</div>
			<div id="eje" class="col-md-2 padd-titles-menu option">
				<a class="dropdown-toggle title-menu" data-toggle="dropdown">Ejes Estratégicos <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<?php echo $listaEjes; ?>
				</ul>
			</div>
			<div id="unidad" class="col-md-2 padd-titles-menu option">
				<a class="dropdown-toggle title-menu" data-toggle="dropdown">Unidades Responsables <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<?php echo $listaOrganismos; ?>
				</ul>
			</div>
			<div id="sector" class="col-md-2 padd-titles-menu option">
				<a class="dropdown-toggle title-menu" data-toggle="dropdown">Sectores <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<?php echo $listaSectores; ?>
				</ul>
			</div>
			<div id="avance" class="col-md-1 padd-titles-menu option">
				<a class="dropdown-toggle title-menu" data-toggle="dropdown">Avance <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a onclick="capturaCronograma()">Avance de Cronograma</a></li>
					<li><a href="#">Avance de Geográfico</a></li>
				</ul>
			</div>
			<div id="reporte" class="col-md-2 padd-titles-menu option">
				<a class="dropdown-toggle title-menu" data-toggle="dropdown">Reportes</a>
			</div>
			<div class="col-md-1 padd-titles-menu">
				<a class="title-menu" onclick="logout()"><i class="fa fa-sign-out fa-2x"></i></a>
			</div>
		</div>
	</div>
</div>