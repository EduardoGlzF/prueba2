<?php require_once('../conexion/conexionbd.php'); ?>
<?php
  

if ((isset($_GET['idProductos'])) && ($_GET['idProductos'] != "")) {
	$idproducto = $_POST['idProductos'];
  $deleteSQL = "DELETE FROM tblproducto WHERE idProductos='idproducto'";

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$deleteSQL) or die(mysqli_error());

  $deleteGoTo = "listaproducto.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['idProductos'])) && ($_GET['idProductos'] != "")) {
	$idproducto = $_POST['idProductos'];
  $deleteSQL = "DELETE FROM tblproducto WHERE idProductos='idproducto'";

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$deleteSQL) or die(mysqli_error());

  $deleteGoTo = "listaproducto.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['recordID'])) && ($_GET['recordID'] != "")) {
	$idproducto = $_POST['idProductos'];
  $deleteSQL = "DELETE FROM tblproducto WHERE idProductos='idproducto'";

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$deleteSQL) or die(mysqli_error());

  $deleteGoTo = "listaproducto.php";
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
</head>

<body id="cuerpo">
	<div id="principal">
		<div id="cabecera"><img src="../imagenes/logo1.png" width="150" height="50" alt=""/></div>  		
  		<div id="contenido">
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
			<div align="center">
     			 <h1>Eliminando Producto</h1>
      			 <p>Eliminando..........</p>
      			 <p>&nbsp;</p>
    		</div>
			<!-- InstanceEndEditable -->
		</div>
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
