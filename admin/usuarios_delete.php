<?php require_once('../conexion/conexionbd.php'); ?>
<?php


if ((isset($_GET['idUsuario'])) && ($_GET['idUsuario'] != "")) {
	$idUsuario1=$_GET['idUsuario'];
  $deleteSQL = "DELETE FROM tblusuario WHERE idUsuario='$idUsuario1'";

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$deleteSQL) or die(mysqli_error());

  $deleteGoTo = "usuarios_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['recordID'])) && ($_GET['recordID'] != "")) {
	$idUsuario2=$_GET['recordID'];
  $deleteSQL = "DELETE FROM tblusuario WHERE idUsuario='$idUsuario2'";

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$deleteSQL) or die(mysqli_error());

  $deleteGoTo = "usuarios_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillaadmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../estilos/estilos.css" />
  <link rel="stylesheet" type="text/css" href="../estilos/slider_style.css">

 <meta name="viewport" content="width = divice-width,
         user-scalable=no, initial-scale=1, maximum-scale=1,
         minima-scale=1">
</head>
				
  		

<body id="cuerpo">
	
	<div id="principal">	
		<div id="cabecera">		
			<div id="logo"><img src="../imagenes/compuTec.png" width="90" height="80" alt="logoCompuTec"/></div> 
			
				<div id="menuHorizontal">
					<ul class="menuH">
						<li class="menuH"><a href="#">inicio</a></li>
						<li class="menuH"><a href="#">Telefonía</a></li>
						<li class="menuH"><a href="#">Computo</a></li>
						<li class="menuH"><a href="#">Ofertas</a></li>
					</ul>			
				</div>
							
			
		</div>		
			 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" --><div align="center">
      <h1>Eliminando ....... </h1>
      <p>se esta eliminado el usiario espera porfavor</p>
    </div><!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1"><h2>Conócenos</h2>
					<p>Trabajar en Amazon</p>
					<p>Información corporativa</p>
					<p>Departamento de prensa</p>
				</div>
				<div class="pie1"><h2>Podemos ayudarte</h2>
					<p>Devolver o reemplazar productos</p>
					<p>Gestionar contenido y dispositivos</p>
					<p>Ayuda</p>
				</div>
				<div class="pie1"><h2>Métodos de pago</h2>
				
					<p>Tarjetas de crédito y débito</p>
					<p>Tarjetas de regalo</p>
					<p>Meses sin intereses</p>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- InstanceEnd --></html>
