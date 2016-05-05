<?php 
require_once("server.php");
require_once("./support/conexion.php");
$conexion = new conexion();
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo $server ?>js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="<?php echo $server ?>js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo $server ?>css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $server ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $server ?>css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo $server ?>css/main-style.css">
	<link rel="stylesheet" href="<?php echo $server ?>css/login.css">
	<link rel="stylesheet" href="<?php echo $server ?>css/style.css">
	<meta charset="utf-8">

	
</head>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav" style="">
        <li class="active"><a href="#">Problemas <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Estatus</a></li>
        <li><a href="#">Ranks</a></li>
        <li><a href="#">Concursos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
  </div>
</nav>