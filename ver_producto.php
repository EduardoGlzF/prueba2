<?php require_once('./conexion/conexionbd.php'); ?>
<?php


$varPro_Recordset1 = "0";
if (isset($_GET["recordID"])) {
  $varPro_Recordset1 = $_GET["recordID"];
}
mysqli_select_db($conexionbd,$database_conexionbd);
$varprodu=$varPro_Recordset1;
$query_Recordset1 = "SELECT * FROM tblproducto WHERE tblproducto.idProductos = '$varprodu'";
$Recordset1 = mysqli_query($conexionbd,$query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillauser.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>CompuTec</title>
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
      <h1><?php echo $row_Recordset1['strNombre']; ?> </h1>
      <p><img src="./imagenes/productos/<?php echo $row_Recordset1['strImagen']; ?>" width="456" height="412" align="left" /></p>
      <h5>Descripcion:<br />
     
      <p><?php echo $row_Recordset1['strDescripcion']; ?></p>
      
      <h5>Precio: $<?php echo $row_Recordset1['dblPrecio']; ?></h5>
      <p>&nbsp;</p>
      <p><a href="../userreg/carrito_add.php?recordID=<?php echo $row_Recordset1['idProductos']; ?>"><img src="./imagenes/orange_ordernow.png" width="392" height="130" /></a></p>
      <p><a href="catalagoreg.php"><img src="./imagenes/1359958110498699254boton-atras.png" width="447" height="148" /></a></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
