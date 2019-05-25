<?php require_once('../conexion/conexionbd.php'); ?>
<?php



$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysqli_select_db($conexionbd,$database_conexionbd);
$query_Recordset1 = "SELECT * FROM tblproducto";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysqli_query($conexionbd,$query_limit_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysqli_query($conexionbd,$query_Recordset1);
  $totalRows_Recordset1 = mysqli_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysqli_select_db($conexionbd,$database_conexionbd);
$query_Recordset1 = "SELECT * FROM tblproducto";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysqli_query( $conexionbd,$query_limit_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysqli_query($conexionbd,$query_Recordset1);
  $totalRows_Recordset1 = mysqli_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
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
			<div id="logo"><img src="../imagenes/compuTec.png" width="90" height="80" alt="logoCompuTec" /></div> 
			
				<div id="menuHorizontal">
					<ul class="menuH">
						<li class="menuH"><a href="index_admi.php">Inicio</a></li>
						<li class="menuH"><a href="#">Telefonía</a></li>
						<li class="menuH"><a href="#">Cómputo</a></li>
						<li class="menuH"><a href="#">Ofertas</a></li>
						<li class="menuH"><a href="listaproducto.php">lista de productos</a></li>
						<li class="menuH"><a href="usuarios_lista.php">Lista de usuarios registrados</a></li>
						
					</ul>			
				</div>
							
			
		</div>		
			 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
			<div align="center">
      <h1>Lista de Productos </h1>
      <p><a href="productos_add.php"><img src="../imagenes/plus.png" width="16" height="16" />A&ntilde;adir producto</a></p>
      <table width="1017" border="1">
        <tr>
          <th width="191" bgcolor="#FFFF33" scope="col">Nombre</th>
          <th width="182" bgcolor="#FFFF33" scope="col">Imagen</th>
          <th width="182" bgcolor="#FFFF33" scope="col">Precio</th>
          <th width="220" bgcolor="#FFFF33" scope="col">Descripcion</th>
          <th width="208" bgcolor="#FFFF33" scope="col">Accion</th>
        </tr>
        <?php do { ?>
          <tr class="brillo">
            <td><?php echo $row_Recordset1['strNombre']; ?></td>
            <td><img src="../imagenes/productos/<?php echo $row_Recordset1['strImagen']; ?>" width="122" height="168" /></td>
            <td><?php echo $row_Recordset1['dblPrecio']; ?></td>
            <td><?php echo $row_Recordset1['strDescripcion']; ?></td>
            <td><img src="../imagenes/pencil2.png" width="16" height="16" /><a href="productos_edit.php?recordID=<?php echo $row_Recordset1['idProductos']; ?>">Editar</a>-<img src="../imagenes/bin.png" width="16" height="16" /><a href="productos_delete.php?recordID=<?php echo $row_Recordset1['idProductos']; ?>">Eliminar</a></td>
          </tr>
          <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
      </table>
      <p>&nbsp;</p>
    </div>
			
			<!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1">
				<a href="nosotrosA.php"><h2>Nosotros</h2></a> 
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
<?php
mysqli_free_result($Recordset1);
?>