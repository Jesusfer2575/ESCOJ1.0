<?php 
include("./resources/header.php");
session_start();
if(isset($_SESSION["isStarted"]) || $_SESSION["isStarted"] == TRUE){
?>
<body>
	<div class="container-fluid">
		<?php include("./resources/menu.php"); ?>
		<div class="row">
			<div id="title" class="col-md-10 col-md-offset-1 title"></div>
		</div>
		<div class="row">
			<div id="main" class="col-md-10 col-md-offset-1 main"><!-- Aqui se dibuja el contenido del Ajax -->
				<!-- Imagen inicio -->
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center">
						<img src="./media/usuario.png"/>
					</div>
				</div>
				<!-- Imagen inicio -->
				<!--<table class="table table-striped">
					<thead class="headers">
						<tr>
							<td>Paso</td>
							<td>Descripción Paso</td>
							<td>ENE</td>
							<td>FEB</td>
							<td>MAR</td>
							<td>ABR</td>
							<td>MAY</td>
							<td>JUN</td>
							<td>JUL</td>
							<td>AGO</td>
							<td>SEP</td>
							<td>OCT</td>
							<td>NOV</td>
							<td>DIC</td>
						</tr>
					</thead>
					<tbody class="font-main">
							<tr>
								<td></td>
								<td></td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 gray porcentaje"></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2 red porcentaje"></div>
									</div>
								</td>
							</tr>
					</tbody>
				</table> -->
			</div>
		</div>
	</div>
</body>
<script src="./js/functions.js"></script>
<?php 
}else{
	header('Location: ./index.php');
}
?>
</html>