<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
	  <script src="js/jquery.dataTables.min.js"></script>
	  
    


	<title>Inicio de sesión</title>
</head>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <body>


	
<center>

  <div class="img">
			<img src="images/xd.png" width=130>
    </div>
    </center>

<body background="" style="background-attachment: fixed" >
<div class="login-box">
	<center><div class="tit"><h1 class="font-weight-light" style="color: #000000;"><strong>Login</strong></h1>
		<center><div class="Ingreso">

	<table  align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table >
    
    <tr><td><h5 label  class="text-dark"><i class="fas fa-user"></i><b>  </b></label></td></h5>
	<center><td width=80><div class="text-box"><input type="text" class="form-group has-success" name="mail" placeholder="Correo"/></td></tr></div>  </div>
      
        
		<tr><td><h5 label class="text-dark"><i class="fas fa-lock"></i><b>   </b></label></td></h5>
		<center><td witdh=80><div class="text-box"><input type="password" class="form-group has-success" name="pass" placeholder="Contraseña"></td></tr></div>

    <tr><td><a href="registro/index.php" class="card-link">   </a></td> </div>
   
	<center><td width=80 align=center><input class="btn btn-outline-danger" type="submit" value="Aceptar"></td>
	 
	 <!-- <a class="btn btn-dark" href="/carritoxd/index.php" role="button">Inicio</a> -->
			</tr></tr></table>
		</form>
<br>
</body>  </div>


<!-- formulario registro -->


<br>
<br>


<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center></div></center></div></center></tr></td>
    
    
 
</body>
</html>
