<?php require_once('./conexion/conexionbd.php'); ?>
<?php
// *** Validate request to login to this site.
 



if (isset($_POST['strEmail'])) {
  $loginUsername=$_POST['strEmail'];
  $password=$_POST['strContraseña'];
  $MM_fldUserAuthorization = "intPrivilegio";
  $MM_redirectLoginSuccess = "usuarioreg/index.php";
  $MM_redirectLoginFailed = "../error_session.php";
  $MM_redirecttoReferrer = false;
  mysqli_select_db($conexionbd,$database_conexionbd);
	
	$loginUsername1=$loginUsername;
	$password1=$password;
  	
  $LoginRS__query=sprintf("SELECT strEmail, `strContraseña`, intPrivilegio FROM tblusuario WHERE strEmail=%s AND `strContraseña`=%s",$loginUsername1,$password1); 
   
  $LoginRS = mysqli_query($conexionbd,$LoginRS__query) or die(mysqli_error());
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysqli_result($LoginRS,0,'intPrivilegio');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillauser.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Email repetido</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<link rel="stylesheet" type="text/css" href="estilos/estilos.css" />  

 <meta name="viewport" content="width = divice-width,
         user-scalable=no, initial-scale=1, maximum-scale=1,
         minima-scale=1">
</head>
				
  		

<body id="cuerpo">
	
	<div id="principal">	
		<div id="cabecera">		
			<div id="logo"><a href="#"><img src="imagenes/compuTec.png" width="90" height="80" alt="logoCompuTec"/></a></div> 
			
				<div id="menuHorizontal">
					<ul class="menuH">
						<li class="menuH"><a href="#">Inicio</a></li>
						<li class="menuH"><a href="#">Telefonía</a></li>
						<li class="menuH"><a href="#">Cómputo</a></li>
						<li class="menuH"><a href="#">Ofertas</a></li>
					</ul>			
				</div>
						
			<div id="login"><a href="acceder.php"><img src="imagenes/loginPng.png" width="40" height="40" alt="imagen usuario"/></a>
			<p>Iniciar sesión</p></div>					
		
		 </div>					 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
			<div align="center">
     			<h1>Email repetido</h1>
     			<p>Porfavor ingresar otro e-mail</p>
     			<p><a href="registrarse.php">atras</a></p>
   			</div>
			<!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1"><a href="nosotrosU.php"><h2>Nosotros</h2></a> 
					<p>Nuestros valores</p>
					<p>Nuestra misión</p>
					<p>Nuestra visión</p>
				</div>
				<div class="pie1"><a href="politicasU.php"><h2>Nuestras Políticas</h2></a>
					<p>Seguridad </p>
					<p>Calidad </p>
					<p>Devoluciones</p>
				</div>
				<div class="pie1"><a href="ayuda.php"><h2>Contáctanos</h2></a>
					<p>Información por correo</p>
					<p>Servicio de Ayuda</p>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- InstanceEnd --></html>
