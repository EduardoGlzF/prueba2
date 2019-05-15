<?php require_once('../conexion/conexionbd.php'); ?>

<?php


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tblproducto (strNombre, strSeo, dblPrecio, intEstado, strDescripcion, strImagen) VALUES (%s, %s, %s, %s, %s, %s)",
                       $_POST['strNombre'],
                       $_POST['strSeo'],
                       $_POST['dblPrecio'],
                       $_POST['intEstado'],
                       $_POST['strDescripcion'],
					   $_POST['strImagen']);

  mysqli_select_db($conexionbd,$database_conexionbd);
  $Result1 = mysqli_query($conexionbd,$insertSQL) or die(mysqli_error());

  $insertGoTo = "exito_pruducto.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillaadmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
	<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
    <h1 align="center"><strong> A&ntilde;adir pruductos</strong></h1>
    <p>&nbsp;</p>
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
      <table width="399" align="center">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Nombre:</td>
          <td><span id="sprytextfield1">
            <input type="text" name="strNombre" value="" size="32" />
          <span class="textfieldRequiredMsg">Necesario.</span></span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Seo:</td>
          <td><span id="sprytextfield2">
            <input type="text" name="strSeo" value="" size="32" />
          <span class="textfieldRequiredMsg">Necesario.</span></span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Precio:</td>
          <td><span id="sprytextfield3">
            <input type="text" name="dblPrecio" value="" size="32" />
          <span class="textfieldRequiredMsg">Necesario.</span></span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Imagen:</td>
          <td><label for="strImagen"></label>
            <span id="sprytextfield4">
            <input type="text" name="strImagen" id="strImagen" />
          <span class="textfieldRequiredMsg">Necesario.</span></span>            <input type="button" name="button" id="button" value="Subir imagen" onclick="javascrip:subirimagen();"=/></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Estado:</td>
          <td><select name="intEstado">
            <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Activo</option>
            <option value="0" <?php if (!(strcmp(0, ""))) {echo "SELECTED";} ?>>Inactivo</option>
          </select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Descripcion:</td>
          <td><span id="sprytextfield5">
            <input name="strDescripcion" type="text" value="" size="32" />
          <span class="textfieldRequiredMsg">Necesario.</span></span></td>
        </tr>
        <tr valign="baseline">
          <td height="48" align="right" nowrap="nowrap">&nbsp;</td>
          <td><input type="submit" value="A&ntilde;adir producto" /></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </form>
    <p>&nbsp;</p>
<p>&nbsp;</p>
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
    </script>
			
			
			
			
			
			
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
