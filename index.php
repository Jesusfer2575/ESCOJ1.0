<?php 
include("./resources/header.php");
session_start();
if(!$_POST){
	if(!(isset($_SESSION["isStarted"])) || $_SESSION["isStarted"] == FALSE){
?>
<body style="color:#424242;">
	<div class="container-fluid">
		<!--<div class="row marg-main">
			<div class="col-md-6 col-md-offset-3 title-login">
				Acceso a ESCOJ
			</div>
		</div>-->
		<div id="divEspacio" class="rox marg-main"></div>
		<form action="./index.php" method="POST">
			<div style="color:#337ab7;">
				<div class="col-lg-12" id="main-banner" >
					<div>
						<br>
						<h1 class="text-center" style="margin-top: 0px;"><strong>Conviértete en un verdadero maestro de la programación</strong></h1>
						<h2 class="text-center" style="margin-top: 10px; font-size: 24px;">Aprende cómo hacer algoritmos eficientes</h2>
						<div class="text-center"><br>
							<strong id="total-submissions">16873478</strong> submissions, <strong>419448</strong> usuarios registrados, <strong>5955</strong> problemas públicos
						</div><br>
						<div class="text-center"><br><a class="btn btn-lg btn-primary" href="/register">Registrate &amp; Empieza a codiguear!</a></div>
						
						<br><br>
						
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center"> 
				<button type="submit" class="btn btn-success" style="margin:0;"><h5>Ir a Problemas   <span class="glyphicon glyphicon-education" aria-hidden="true"></span></h5></button>
			</div>
			<br>
			
			<!--
			<div class="row">
				<div class="col-md-3 col-md-offset-5 marg-inputs">
					<img src="./media/computer1.ico" class="img-login"/>
				</div>
				<div class="col-md-3 marg-inputs">
					<div class="row marg-box">
						<div class="col-md-4 text-login">Usuario: </div>
						<div class="col-md-8"><input type="text" name="usuario" class="form-control"/></div>
					</div>
					<div class="row marg-box">
						<div class="col-md-4 text-login">Contraseña: </div>
						<div class="col-md-8"><input type="password" name="pass" class="form-control"/></div>
					</div>

				</div>
			</div>-->
			<!--<div class="row">
				<div class="col-md-2 col-md-offset-7 marg-inputs text-right">
					<button type="submit" class="btn btn-success">Iniciar Sesión</button>
				</div>
			</div>-->
		</form>

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
