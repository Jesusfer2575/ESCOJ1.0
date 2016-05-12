<?php 
require_once("server.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script language="text/javascript" src="includes/scripts.js"></script>
	<!-- Latest compiled and minified CSS -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script type="text/javascript" src="./js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="./css/main-style.css">
	<link rel="stylesheet" href="./css/login.css">
	<link rel="stylesheet" href="./css/style.css">
	<meta charset="utf-8">

	
</head>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav" >
        <li><img src="./media/escoj7.png" style=" width:175px; height:45px; position: relative; top:4px; left: 0px;"></li>
        <li style="margin:6px;"></li>
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
        <!--_________________________________Aqui_______________________________________-->
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                Login via
                <div class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                                or
                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> keep me logged-in
                       </label>
                    </div>
                 </form>
              </div>
              <div class="bottom text-center">
                New here ? <a href="#"><b>Join Us</b></a>
              </div>
           </div>
        </li>
      </ul>
        </li>
      </ul>

  </div>
</nav>