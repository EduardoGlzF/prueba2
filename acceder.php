<?php require_once('./conexion/conexionbd.php'); ?>

<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['strEmail'])) {
  $loginUsername=$_POST['strEmail'];
  $password=$_POST['strContraseña'];
  $MM_fldUserAuthorization = "intPrivilegio";
  $MM_redirectLoginSuccess = "userreg/index.php";
  $MM_redirectLoginFailed = "error_ini.php";
  $MM_redirecttoReferrer = false;
  mysqli_select_db($conexionbd,$database_conexionbd);
  	$user=$loginUsername;
	$pass=$password;
  $LoginRS__query="SELECT idUsuario, strEmail, strContrasena, intPrivilegio FROM tblusuario WHERE strEmail='$user' AND strContrasena='$pass'"; 
   
  $LoginRS = mysqli_query($conexionbd,$LoginRS__query) or die(mysqli_error());
  $row_LoginRS = mysqli_fetch_assoc($LoginRS);
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysqli_fetch_row ($LoginRS,0,'intPrivilegio');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      
    $_SESSION['MM_IdUsuario'] = $row_LoginRS["idUsuario"];
	
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
<title>Acceder</title>
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
						<li class="menuH"><a href="./index.php">Inicio</a></li>
						<li class="menuH"><a href="./telefoniauser.php">Telefonía</a></li>
						<li class="menuH"><a href="./computouser.php">Cómputo</a></li>
						<li class="menuH"><a href="./ofertauser.php">Ofertas</a></li>
						
					</ul>			
				</div>
						
			<div id="login"><a href="acceder.php"><img src="imagenes/loginPng.png" width="40" height="40" alt="imagen usuario"/></a>
			<p>Iniciar sesión</p></div>					
		
		 </div>					 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
			<div align="center">
     <h1>Iniciar sesion: </h1>
     <form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
       <div align="justify"></div>
       <table align="center">
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">
             <p class="session"> E-mail:      
               <label for="strEmail"></label>
               <input name="strEmail" type="text" required="required" id="strEmail" align="right" />
               <br /> 
  </td></tr>
  <tr valign="baseline">
  <td nowrap="nowrap" align="right">Contrase&ntilde;a:
    <label for="strContrase&ntilde;a"></label>
    <span id="sprytextfield4">
    <input name="strContrase&ntilde;a" type="password" required="required" id="strContrase&ntilde;a" />
    </span>
    </p>
    <p>
      <input type="submit" name="button" id="button" value="Iniciar sesion" />
      </p>
    <p><a href="registrarse.php">Regristrarse.</a></p>
    </td>
    </tr>
    </table>
      </form>
     <p>&nbsp;</p>
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
