<?php require_once('../conexion/conexionbd.php'); ?>

<?php


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  	$nombre = $_POST['strNombre'];
    $seo = $_POST['strSeo'];
    $precio = $_POST['dblPrecio'];
    $estado = $_POST['intEstado'];
    $descr = $_POST['strDescripcion'];
	$imagen = $_POST['strImagen'];
	
	$insertSQL = "INSERT INTO tblproducto (strNombre, categoria, dblPrecio, intEstado, strDescripcion, strImagen) VALUES ('$nombre', '$seo', '$precio', '$estado', '$descr', '$imagen')";
                       

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
            <input name="strNombre" type="text" required="required" value="" size="32" />
          </span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Categoria:</td>
          <td><span id="sprytextfield2">
            <input name="strSeo" type="text" required="required" value="" size="32" />
          </span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Precio:</td>
          <td><span id="sprytextfield3">
            <input name="dblPrecio" type="text" required="required" value="" size="32" />
          </span></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Imagen:</td>
          <td><p>
            <label for="strImagen"></label>
            <span id="sprytextfield4">
              <input name="strImagen" type="text" required="required" id="strImagen" />
            </span></p>
            <p>
              <input type="button" name="button" id="button" value="Subir imagen" onclick="javascrip:subirimagen();"=/>
          </p></td>
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
            <input name="strDescripcion" type="text" required="required" value="" size="32" />
          </span></td>
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
