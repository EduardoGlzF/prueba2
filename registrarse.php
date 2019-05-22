<?php require_once('./conexion/conexionbd.php'); ?>
<?php


// *** Redirect if username exists
$MM_flag="MM_insert";
if (isset($_POST[$MM_flag])) {
  $MM_dupKeyRedirect="email_repetido.php";
  $loginUsername = $_POST['strEmail'];	
  $LoginRS__query = "SELECT strEmail FROM tblusuario WHERE strEmail='$loginUsername'";
  mysqli_select_db($conexionbd,$database_conexionbd );
  $LoginRS=mysqli_query($conexionbd,$LoginRS__query) or die(mysqli_error());
  $loginFoundUser = mysqli_num_rows($LoginRS);

  //if there is a row in the database, the username was found - can not add the requested username
  if($loginFoundUser){
    $MM_qsChar = "?";
    //append the username to the redirect page
    if (substr_count($MM_dupKeyRedirect,"?") >=1) $MM_qsChar = "&";
    $MM_dupKeyRedirect = $MM_dupKeyRedirect . $MM_qsChar ."requsername=".$loginUsername;
    header ("Location: $MM_dupKeyRedirect");
    exit;
  }
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
					   $nombre=$_POST['strNombre'];
                       $email=$_POST['strEmail'];
                       $activo=$_POST['intActivo'];
					   $telefono=$_POST['intTelefono'];
                       $priv=$_POST['intPrivilegio'];
                       $direc=$_POST['strDirccion'];
                       $contrasena=$_POST['strContrasea'];
  $insertSQL = "INSERT INTO tblusuario (strNombre, strEmail, intActivo, intTelefono, intPrivilegio, strDirccion, strContrasena) VALUES ('$nombre', '$email', '$activo', '$telefono', '$priv', '$direc', '$contrasena')";

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$insertSQL) or die(mysqli_error());

  $insertGoTo = "exito_registro.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillauser.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
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
						
			<div id="login"><a href="#"><img src="imagenes/loginPng.png" width="40" height="40" alt="imagen usuario"/></a>
			<p>Iniciar sesion</p></div>					
		
		 </div>					 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
			<div align="center">
     <h1>Registrarse</h1>
     <p>&nbsp;</p>
     <form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2">
       <table align="center">
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">Nombre:</td>
           <td><span id="sprytextfield1">
             <input type="text" name="strNombre" value="" size="32" />
            <span class="textfieldRequiredMsg">Necesario.</span></span></td>
          </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">Email:</td>
           <td><span id="sprytextfield2">
           <input type="text" name="strEmail" value="" size="32" />
           <span class="textfieldRequiredMsg">Necesario.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span></span></td>
          </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">Telefono:</td>
           <td><span id="sprytextfield3">
           <input type="text" name="intTelefono" value="" size="32" />
           <span class="textfieldRequiredMsg">Necesario.</span></span></td>
          </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">Direccion:</td>
           <td><span id="sprytextfield4">
             <input type="text" name="strDirccion" value="" size="32" />
            <span class="textfieldRequiredMsg">Necesario.</span></span></td>
          </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">Contraseña:</td>
           <td><span id="sprytextfield5">
             <input type="password" name="strContrasea" value="" size="32" />
            <span class="textfieldRequiredMsg">Necesario.</span></span></td>
          </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">&nbsp;</td>
           <td><input type="submit" value="Registrarme" /></td>
          </tr>
        </table>
       <input type="hidden" name="intActivo" value="1" />
       <input type="hidden" name="intPrivilegio" value="0" />
       <input type="hidden" name="MM_insert" value="form2" />
      </form>
     <p>&nbsp;</p>
   </div>
   <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
   </script><!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1"><a href="nosotros.php"><h2>Nosotros</h2></a> 
					<p>Nuestros valores</p>
					<p>Nuestra misión</p>
					<p>Nuestra visión</p>
				</div>
				<div class="pie1"><h2>Nuestras Políticas</h2>
					<p>Seguridad </p>
					<p>Calidad </p>
					<p>Devoluciones</p>
				</div>
				<div class="pie1"><h2>Contáctanos</h2>
					<p>Información por correo</p>
					<p>Servicio de Ayuda</p>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- InstanceEnd --></html>
