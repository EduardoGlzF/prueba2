<?php require_once('../conexion/conexionbd.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


mysqli_select_db( $conexionbd, $database_conexionbd);
$query_Recordset1 = "SELECT * FROM tblproducto where categoria='telefonia'";
$Recordset1 = mysqli_query($conexionbd, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
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
						<li class="menuH"><a href="./index.php">Inicio</a></li>
						<li class="menuH"><a href="./telefoniauserreg.php">Telefonía</a></li>
						<li class="menuH"><a href="./catalagoreg.php">Cómputo</a></li>
						<li class="menuH"><a href="./ofertauserreg">Ofertas</a></li>
					</ul>			
				</div>
						
							
		
		 </div>					 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
			
				
			<div id="h1catalogo"><h1>Telefonía</h1></div>
						
				<div class="galeria", align="center">   				 
     				 <?php do { ?>
       				 <div class="producto"  >
	   				 	<h4  align="center" > <?php echo $row_Recordset1['strNombre']; ?></h4>
        			 	<h4>        
         			 		<img src="../imagenes/productos/<?php echo $row_Recordset1['strImagen']; ?>" width="270" height="168" /> 
           			 		<p>&nbsp;</p>
         			 		<pre> Precio:$<?php echo $row_Recordset1['dblPrecio']; ?></pre>
        			 	</h4>
        			 	<p><a href="../ver_producto.php?recordID=<?php echo $row_Recordset1['idProductos']; ?>"><img src="../imagenes/masinformacion.png" width="265" height="86" /></a></p>
       				</div>
      			    <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
   				</div>					
			
			<!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
<<<<<<< HEAD
				<div class="pie1"><a href="./nosotros.php"><h2>Nosotros</h2></a> 
=======
				<div class="pie1"><a href="../nosotros.php"><h2>Nosotros</h2></a> 
>>>>>>> 99c181896fb84bc84b9b94a7db54c71e42015fbe
					<p>Nuestros valores</p>
					<p>Nuestra misión</p>
					<p>Nuestra visión</p>
				</div>
<<<<<<< HEAD
				<div class="pie1"><a href="./politicaR.php"><h2>Nuestras Políticas</h2></a>
=======
				<div class="pie1"><a href="../politicaR.php"><h2>Nuestras Políticas</h2></a>
>>>>>>> 99c181896fb84bc84b9b94a7db54c71e42015fbe
					<p>Seguridad </p>
					<p>Calidad </p>
					<p>Devoluciones</p>
				</div>
<<<<<<< HEAD
				<div class="pie1"><a href="./ayudaR.php"><h2>Contáctanos</h2></a>
=======
				<div class="pie1"><a href="../ayudaR.php"><h2>Contáctanos</h2></a>
>>>>>>> 99c181896fb84bc84b9b94a7db54c71e42015fbe
					<p>Información por correo</p>
					<p>Servicio de Ayuda</p>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- InstanceEnd --></html>

<?php
mysqli_free_result($Recordset1);
?>