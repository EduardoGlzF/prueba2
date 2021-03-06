<?php require_once('./conexion/conexionbd.php'); ?>
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
}}

mysqli_select_db( $conexionbd, $database_conexionbd);
$query_Recordset1 = "SELECT * FROM tblproducto where categoria='oferta' LIMIT 0,3";
$Recordset1 = mysqli_query($conexionbd, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>


<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillauser.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Inicio</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
		  <link rel="stylesheet" type="text/css" href="./estilos/slider_style.css"> <!--estilos slider-->
		  		  	  
		  <meta name="viewport" content="width = divice-width, 
         user-scalable=no, initial-scale=1, maximum-scale=1,
         minima-scale=1">  <!--responsive-->
         
         
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
			
			<div class="slider">
          <ul>
            <li><a href="slider0.html"><img src="./imagenes/slider2.jpg" alt""></a></li>
            <li><img src="./imagenes/slider3.jpg" alt""></li>
            <li><img src="./imagenes/slider4.jpg" alt""></li>
            <li><img src="./imagenes/slider3.jpg" alt""></li>
          </ul>
			</div>
			
			
			<div class="catalogoIndex">  
			
				<div id="h1catalogo"><h1>Ofertas</h1></div>
						
				<div class="galeria", align="center">   				 
     				 <?php do { ?>
       				 <div class="producto"  >
	   				 	<h4  align="center" > <?php echo $row_Recordset1['strNombre']; ?></h4>
        			 	<h4>        
         			 		<img src="./imagenes/productos/<?php echo $row_Recordset1['strImagen']; ?>" width="270" height="168" /> 
           			 		<p>&nbsp;</p>
         			 		<pre> Precio:$<?php echo $row_Recordset1['dblPrecio']; ?></pre>
        			 	</h4>
        			 	<p><a href="./ver_producto.php?recordID=<?php echo $row_Recordset1['idProductos']; ?>"><img src="./imagenes/masinformacion.png" width="265" height="86" /></a></p>
       				</div>
      			    <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
   				</div>	
			</div>
			
			
			<!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1"><a href="nosotrosU.php"><h2>Nosotros</h2></a> 
					<p>Nuestros valores</p>
					<p>Nuestra misión</p>
					<p>Ubicación </p>
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

<?php
mysqli_free_result($Recordset1);
?>
