<?php 
	require_once("../support/conexion.php");
	$conexion = new conexion();
	$query = "select * from unidad_responsable";
	$query2 = "select idEje, nombre FROM eje";
	$urs = $conexion->getResults($query);
	$ejes = $conexion->getResults($query2);
	
	$listaURs = "";
	$listaEjes = "";
	// Generación de Unidades Responsables como options para el select 
	foreach($urs as $ur){
		$listaURs.= "<option value='".$ur['idUR']."'>".$ur['siglas'] . " " .$ur['descripcion']."</option>";
	}
	foreach($ejes as $eje){
		$listaEjes.= "<option value='".$eje['idEje']."'>".$eje['nombre']."</option>";
	}
?>
<script>
	/*$("#selectEje").change(function(Eje){
		var idEje = $("#selectEje").val();

		$.ajax({
			url: "./support/controller2.php",
			type: "POST",
			dataType: "HTML",
			data:{idEje: idEje, accion:"actividad"}
		}).complete(function(response){
			$("#selectActividad").html(response.responseText);
		});
	});*/
	function select(Eje){
	//alert($(Eje).id());
	var idEje = $(Eje).val();

	$.ajax({
		url: "./support/controller2.php",
		type: "POST",
		dataType: "HTML",
		data:{idEje: idEje, accion:"actividad"}
	}).complete(function(response){
		$("#selectActividad").html(response.responseText);
	});
	 
	
	  
}


</script>
<form action="accion.php" method="post">
	<div class="row">
		<div class="col-md-5 col-md-offset-4 title">Avance de Cronograma</div>
	</div>
<div class="row marg-form">
	<div class="col-md-3 col-md-offset-3 text-right marg-tag-form">Subsecretaría:</div>
		<div class="col-md-3"><select class="form-control" name="selectUR" onclick="unidadResponsable()"> <?php echo $listaURs; ?> </select></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-3 text-right marg-tag-form">Eje:</div>
		<div class="col-md-3"><select class="form-control" name="selectEje" id="selectEje" onchange="select(this)"> <?php echo $listaEjes; ?> </select></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-3 text-right marg-tag-form">Actividad:</div>
		<div class="col-md-3"><select class="form-control" id="selectActividad"></select></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-3 text-right marg-tag-form">Subactividad:</div>
		<div class="col-md-3"><select class="form-control"></select></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-3 text-right marg-tag-form">Paso:</div>
		<div class="col-md-3"><select class="form-control"></select></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-3 text-right marg-tag-form">Avance acumulado:</div>
		<div class="col-md-3"><input type="text" class="form-control" disabled/></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-3 text-right marg-tag-form">Fecha límite:</div>
		<div class="col-md-3"><input type="text" class="form-control" disabled/></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-3 text-right marg-tag-form">Avance:</div>
		<div class="col-md-3"><input type="text" class="form-control"/></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-3 text-right marg-tag-form" >Fecha de Corte:</div>
		<div class="col-md-3"><input type="text" class="form-control" id="fechaCorte"/></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-2 col-md-offset-4 text-right marg-tag-form">Paso concluido:</div>
		<div class="col-md-1 text-right"><input type="checkbox" class="form-control"/></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-6"><textarea class="form-control" rows="4" placeholder="Escribe aquí tus comentarios..."></textarea></div>
	</div>
	<div class="row marg-form">
		<div class="col-md-3 col-md-offset-6 text-right"><button class="btn btn-success">Registrar</button></textarea></div>
	</div>
</form>
