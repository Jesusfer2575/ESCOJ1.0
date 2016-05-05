function ejesEstrategicos(eje){
	var idEje = $(eje).attr("name");
	var titulo = $(eje).children().text();
	$("#title").html(titulo);

	$("#eje").addClass("pressed");
	$("#inicio").removeClass("pressed");
	$("#unidad").removeClass("pressed");
	$("#sector").removeClass("pressed");
	$("#avance").removeClass("pressed");
	$("#reporte").removeClass("pressed");

	$.ajax({
		url: "./support/controller.php",
		type: "POST",
		dataType: "HTML",
		data:{idEje: idEje, accion:"actividades"}
	}).complete(function(response){
		$("#main").html(response.responseText);
	});
}

function organismos(entidad){
	var idOrganismo = $(entidad).attr("name");
	var titulo = $(entidad).children().text();
	$("#title").html(titulo);

	$("#unidad").addClass("pressed");	
	$("#eje").removeClass("pressed");
	$("#inicio").removeClass("pressed");
	$("#sector").removeClass("pressed");
	$("#avance").removeClass("pressed");
	$("#reporte").removeClass("pressed");

	$.ajax({
		url: "./support/controller.php",
		type: "POST",
		dataType: "HTML",
		data:{idOrganismo: idOrganismo, accion:"entidades"}
	}).complete(function(response){
		$("#main").html(response.responseText);
	});
}

function sectores(sector){
	var idSector = $(sector).attr("name");
	var titulo = $(sector).children().text();
	$("#title").html(titulo);

	$("#sector").addClass("pressed");	
	$("#eje").removeClass("pressed");
	$("#inicio").removeClass("pressed");
	$("#unidad").removeClass("pressed");
	$("#avance").removeClass("pressed");
	$("#reporte").removeClass("pressed");

	$.ajax({
		url: "./support/controller.php",
		type: "POST",
		dataType: "HTML",
		data:{idSector: idSector, accion:"sectores"}
	}).complete(function(response){
		$("#main").html(response.responseText);
	});
}

function traerCronograma(icon){
	var idActividad = $(icon).attr("name");
	$("#title").html("Cronograma de Actividad " + idActividad);

	$.ajax({
		url: "./support/controller.php",
		type: "POST",
		dataType: "HTML",
		data:{idActividad: idActividad, accion:"cronograma"}
	}).complete(function(response){
		$("#main").html(response.responseText);
	});
}

function traerGeografico(icon){
	var idActividad = $(icon).attr("name");
	$("#title").html("Geográfico de Actividad " + idActividad);

	$.ajax({
		url: "./support/controller.php",
		type: "POST",
		dataType: "HTML",
		data:{idActividad: idActividad, accion:"geografico"}
	}).complete(function(response){
		$("#main").html(response.responseText);
	});
}

function home(){
	window.location = "./main.php";
}

function capturaCronograma(){
	$("#title").html("Captura de Avances Cronograma");

	$.ajax({
		url: "./resources/avanceCronograma.php",
		type: "POST",
		dataType: "HTML"
	}).complete(function(response){
		$("#main").html(response.responseText);
	});
	
}

function logout(){
    $.ajax({        
        url: "./support/logout.php",
        type: "POST",
        data: {logout: "true"},
    }).complete(function (response) {
        window.location = "./index.php";
    });
}


/*$("#selectEje").change(function(Eje){
	var idEje = $(Eje).id();

	$.ajax({
		url: "./support/controller2.php",
		type: "POST",
		dataType: "HTML",
		data:{idEje: idEje, accion:"actividad"}
	}).complete(function(response){
		$("#selectActividad").html(response.responseText);
	});
});

function selectEje(Eje){
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
}*/
