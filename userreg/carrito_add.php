<?php require_once('../conexion/conexionbd.php'); ?>

<?php 
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

	$user=$_SESSION['MM_IdUsuario'];
	$recor_id=$_GET['recordID'];
  $insertSQL = "INSERT INTO tblcarrito (idUsuario, idProducto, cantidad) VALUES (%s, %s, %s)";

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$insertSQL) or die(mysqli_error());

  $insertGoTo = "../carrito_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));

?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillaureg.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>CompuTec</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<link rel="stylesheet" type="text/css" href="../estilos/estilos.css" />  

 <meta name="viewport" content="width = divice-width,
         user-scalable=no, initial-scale=1, maximum-scale=1,
         minima-scale=1">
</head>
				
  		

<body id="cuerpo">
	
	<div id="principal">	
		<div id="cabecera">		
			<div id="logo"><a href="#"><img src="../imagenes/compuTec.png" width="90" height="80" alt="logoCompuTec"/></a></div> 
			
				<div id="menuHorizontal">
					<ul class="menuH">
						<li class="menuH"><a href="#">Inicio</a></li>
						<li class="menuH"><a href="#">Telefonía</a></li>
						<li class="menuH"><a href="#">Cómputo</a></li>
						<li class="menuH"><a href="#">Ofertas</a></li>
					</ul>			
				</div>
						
							
		
		 </div>					 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
			<div align="center">
      <h1>A&ntilde;adiendo producto al carrito........</h1>
      <p>&nbsp;</p>
    </div><!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1"><a href="../nosotros.php"><h2>Nosotros</h2></a> 
					<p>Nuestros valores</p>
					<p>Nuestra misión</p>
					<p>Nuestra visión</p>
				</div>
				<div class="pie1"><a href="../politicaR.php"><h2>Nuestras Políticas</h2></a>
					<p>Seguridad </p>
					<p>Calidad </p>
					<p>Devoluciones</p>
				</div>
				<div class="pie1"><a href="../ayudaR.php"><h2>Contáctanos</h2></a>
					<p>Información por correo</p>
					<p>Servicio de Ayuda</p>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- InstanceEnd --></html>