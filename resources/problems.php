<?php 
include("./resources/header.php");
session_start();
if(!$_POST){
	if(!(isset($_SESSION["isStarted"])) || $_SESSION["isStarted"] == FALSE){
?>

<body style="color:#424242;">
	<!--<div id="divThumbnails" style="margin:0 auto;">
		<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="./media/thumbnail1.jpg" alt="...">
		      <div class="caption">
		        <h3>¿Qué es la ESCOJ?</h3>
		        <p style="text-align: justify;">Una herramienta para mejorar tus habilidades de programación donde tendrás la 
		        	oportunidad de crear concursos con tus reglas y
		        	al mismo tiempo podrás resolver los problemas que otros suben.</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		</div>
	</div>-->
	<div id="divEspacio" class="rox marg-main" style="margin-top:70px; margin-left:160px;">
		<div>
			<table style="border-spacing:5px;border-collapse: separate;">
				<tr style="display:inline; border-spacing:5px;">
					<td><input class="form-control tt-input" id="nomProblema" placeholder="Nombre Problema" type="text"></td>
					<td>
						<select class="form-control" data-toggle="tooltip" data-placement="top" title="Filtrar por complejidad">
							<option value="999">Todos</option>
							<option value="1">Ad-Hoc</option>
							<option value="2">Arithmetic Algebra</option>
							<option value="3">Brute Force</option>
							<option value="4">Combination</option>
							<option value="5">Data Structures</option>
							<option value="6">Dynamic Programming</option>
							<option value="7">Game Theory</option>
							<option value="8">Geometry</option>
							<option value="9">Graph Theory</option>
							<option value="10">Greedy</option>
							<option value="11">Number Theory</option>
							<option value="12">Sorting Searching</option>
							<option value="13">Strings</option>
						</select>
					</td>
					<td>
						<select class="form-control" data-toggle="tooltip" data-placement="top" title="Filtrar por complejidad">
							<option value="999">Todos</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div id="divProblemas" class="panel panel-default" style="width:75%; margin:0 auto;">

		  <!-- Default panel contents -->
		  <div class="panel-heading" style=""><b>Problemas</b></div>

		  <!-- Table -->
		  <table class="table">
		    <tr>
			    <td style="width:40%"><b>Título</b></td>
			    <td><b>Envíos</b></td> 
			    <td><b>Resueltos</b></td>
			    <td><b>Promedio</b></td>
			    <td><b>Mi puntaje</b></td>
			  </tr>
			  <tr>
			    <td><a style="cursor:pointer;" href="#">Problema 1</a></td>
			    <td>120</td> 
			    <td>94</td>
			    <td>23%</td>
			    <td>13.3</td>
			  </tr>
			  <tr>
			  	<td><a style="cursor:pointer;" href="#">Problema 2</a></td>
			    <td>120</td> 
			    <td>94</td>
			    <td>23%</td>
			    <td>13.3</td>
			  </tr>
			  <tr>
			  	<td><a style="cursor:pointer;" href="#">Problema 3</a></td>
			    <td>120</td> 
			    <td>94</td>
			    <td>23%</td>
			    <td>13.3</td>
			  </tr>
			  <tr>
			  	<td><a style="cursor:pointer;" href="#">Problema 4</a></td>
			    <td>120</td> 
			    <td>94</td>
			    <td>23%</td>
			    <td>13.3</td>
			  </tr>
			  <tr>
			  	<td><a style="cursor:pointer;" href="#">Problema 5</a></td>
			    <td>120</td> 
			    <td>94</td>
			    <td>23%</td>
			    <td>13.3</td>
			  </tr>
			  <tr>
			  	<td><a style="cursor:pointer;" href="#">Problema 6</a></td>
			    <td>120</td> 
			    <td>94</td>
			    <td>23%</td>
			    <td>13.3</td>
			  </tr>
			  <tr>
			  	<td><a style="cursor:pointer;" href="#">Problema 7</a></td>
			    <td>120</td> 
			    <td>94</td>
			    <td>23%</td>
			    <td>13.3</td>
			  </tr>
			  <tr>
			  	<td><a style="cursor:pointer;" href="#">Problema 8</a></td>
			    <td>120</td> 
			    <td>94</td>
			    <td>23%</td>
			    <td>13.3</td>
			  </tr>

		  </table>
		</div>
</body>
</html>
<?php 
	}else{
		//Ya hay una sesion iniciada
		header('Location: ./main.php');
	}
}else{
	if($conexion->initSession($_POST['usuario'], $_POST['pass'])){
		//"login correcto";
		header('Location: ./main.php');
	}else{
		echo "Usuario y/o contraseña incorrectos";
	}
}
?>
