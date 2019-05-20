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
$query_Recordset1 = "SELECT * FROM tblproducto";
$Recordset1 = mysqli_query($conexionbd, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillaureg.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
		<!--<div id="cabecera"><img src="../imagenes/logo1.png" width="150" height="50" alt=""/></div>-->
  		<div id="contenido">
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
						
				<div align="center" >
    				 <h1>Catalogo</h1>
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
<?php
mysqli_free_result($Recordset1);
?>
