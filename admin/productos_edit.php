<?php require_once('../conexion/conexionbd.php'); ?>

<?php


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
	
  	$nombre = $_POST['strNombre'];
    $seo = $_POST['strSeo'];
    $precio = $_POST['dblPrecio'];
    $estado = $_POST['intEstado'];
    $descr = $_POST['strDescripcion'];
	$imagen = $_POST['strImagen'];
	$idproducto = $_POST['idProductos'];
	
	$updateSQL = "UPDATE tblproducto SET strNombre='$nombre', strSeo='$seo', dblPrecio='$precio', intEstado='$estado', strDescripcion='$descr', strImagen='$imagen' WHERE idProductos='$idproducto'";
                       

  mysqli_select_db( $conexionbd,$database_conexionbd);
  $Result1 = mysqli_query( $conexionbd,$updateSQL) or die(mysql_error());

  $updateGoTo = "listaproducto.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$varProducto_datosproductos = "0";
if (isset($_GET["recordID"])) {
  $varProducto_datosproductos = $_GET["recordID"];
}
mysqli_select_db( $conexionbd,$database_conexionbd);
$varproducto=$varProducto_datosproductos;
$query_datosproductos = "SELECT * FROM tblproducto WHERE tblproducto.idProductos = '$varproducto'";
$datosproductos = mysqli_query( $conexionbd,$query_datosproductos) or die(mysqli_error());
$row_datosproductos = mysqli_fetch_assoc($datosproductos);
$totalRows_datosproductos = mysqli_num_rows($datosproductos);$varProducto_datosproductos = "0";
if (isset($_GET["recordID"])) {
  $varProducto_datosproductos = $_GET["recordID"];
}
mysqli_select_db( $conexionbd,$database_conexionbd);
$varproducto=$varProducto_datosproductos;
$query_datosproductos = "SELECT * FROM tblproducto WHERE tblproducto.idProductos = '$varproducto'";
$datosproductos = mysqli_query( $conexionbd,$query_datosproductos) or die(mysqli_error());
$row_datosproductos = mysqli_fetch_assoc($datosproductos);
$totalRows_datosproductos = mysqli_num_rows($datosproductos);
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
  <script>
  function subirimagen()
  {
	  self.name = 'opener';
	  remote = open('imagenproductto.php', 'remote','width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscren=no, status=yes');
	  remote.focus();
	  }
  </script>
  <div align="center">
  
    <h1>Editar producto</h1>
    <p>&nbsp;</p>
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
      <table align="center">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Nombre:</td>
          <td><input type="text" name="strNombre" value="<?php echo htmlentities($row_datosproductos['strNombre'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Seo:</td>
          <td><input type="text" name="strSeo" value="<?php echo htmlentities($row_datosproductos['strSeo'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Precio:</td>
          <td><input type="text" name="dblPrecio" value="<?php echo htmlentities($row_datosproductos['dblPrecio'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Estado:</td>
          <td><select name="intEstado">
            <option value="1" <?php if (!(strcmp(1, htmlentities($row_datosproductos['intEstado'], ENT_COMPAT, 'iso-8859-1')))) {echo "SELECTED";} ?>>Activo</option>
            <option value="0" <?php if (!(strcmp(0, htmlentities($row_datosproductos['intEstado'], ENT_COMPAT, 'iso-8859-1')))) {echo "SELECTED";} ?>>Inactivo</option>
          </select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Descripcion:</td>
          <td><input type="text" name="strDescripcion" value="<?php echo htmlentities($row_datosproductos['strDescripcion'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Imagen:</td>
          <td><input type="text" name="strImagen" value="<?php echo htmlentities($row_datosproductos['strImagen'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" />
            <input type="button" name="button" id="button" value="Subir imagen" onclick="javascrip:subirimagen();"=/></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td><input type="submit" value="Actualizar registro" /></td>
        </tr>
      </table>
      <input type="hidden" name="MM_update" value="form1" />
      <input type="hidden" name="idProductos" value="<?php echo $row_datosproductos['idProductos']; ?>" />
    </form>
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
<?php
mysqli_free_result($datosproductos);
?>
