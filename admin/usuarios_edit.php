<?php require_once('../conexion/conexionbd.php'); ?>
<?php

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
	
                       $nombre=$_POST['strNombre'];
                       $email=$_POST['strEmail'];
                       $activo=$_POST['intActivo'];
                       $telefono=$_POST['intTelefono'];
                       $privilegio=$_POST['intPrivilegio'];
                       $direccion=$_POST['strDirccion'];
                       $contrasena=$_POST['strContrasena'];
                       $idusuario=$_POST['idUsuario'];
  $updateSQL = "UPDATE tblusuario SET strNombre='$nombre', strEmail='$email', intActivo='$activo', intTelefono='$telefono', intPrivilegio='$privilegio', strDirccion='$direccion', strContrasena='$contrasesna' WHERE idUsuario='$idusuario'";

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$updateSQL) or die(mysqli_error());

  $updateGoTo = "usuarios_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$varUsuario_Recordset1 = "0";
if (isset($_GET["recordID"])) {
  $varUsuario_Recordset1 = $_GET["recordID"];
}
mysqli_select_db($conexionbd,$database_conexionbd);
$idusuario=$varUsuario_Recordset1;
$query_Recordset1 ="SELECT * FROM tblusuario WHERE tblusuario.idUsuario = '$idusuario'";
$Recordset1 = mysqli_query($conexionbd,$query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
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
			
			<h1 align="center">Editar Usuarios</h1>
  <p>&nbsp;</p>
  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
    <table align="center">
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Nombre:</td>
        <td><input type="text" name="strNombre" value="<?php echo htmlentities($row_Recordset1['strNombre'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Email:</td>
        <td><input type="text" name="strEmail" value="<?php echo htmlentities($row_Recordset1['strEmail'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Activo:</td>
        <td><input type="text" name="intActivo" value="<?php echo htmlentities($row_Recordset1['intActivo'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Telefono:</td>
        <td><input type="text" name="intTelefono" value="<?php echo htmlentities($row_Recordset1['intTelefono'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Privilegio:</td>
        <td><select name="intPrivilegio">
          <option value="1" <?php if (!(strcmp(1, htmlentities($row_Recordset1['intPrivilegio'], ENT_COMPAT, 'iso-8859-1')))) {echo "SELECTED";} ?>>Administrador</option>
          <option value="0" <?php if (!(strcmp(0, htmlentities($row_Recordset1['intPrivilegio'], ENT_COMPAT, 'iso-8859-1')))) {echo "SELECTED";} ?>>usuario</option>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Dirccion:</td>
        <td><input type="text" name="strDirccion" value="<?php echo htmlentities($row_Recordset1['strDirccion'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Contraseña:</td>
        <td><input type="text" name="strContrasena" value="<?php echo htmlentities($row_Recordset1['strContrasena'], ENT_COMPAT, 'iso-8859-1'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td><input type="submit" value="Actualizar registro" /></td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="form1" />
    <input type="hidden" name="idUsuario" value="<?php echo $row_Recordset1['idUsuario']; ?>" />
  </form>
  <p>&nbsp;</p>
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
