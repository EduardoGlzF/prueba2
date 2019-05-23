<?php require_once('../conexion/conexionbd.php'); ?>
<?php


$currentPage = $_SERVER["PHP_SELF"];

$maxRows_datosusuario = 10;
$pageNum_datosusuario = 0;
if (isset($_GET['pageNum_datosusuario'])) {
  $pageNum_datosusuario = $_GET['pageNum_datosusuario'];
}
$startRow_datosusuario = $pageNum_datosusuario * $maxRows_datosusuario;

mysqli_select_db($conexionbd,$database_conexionbd);
$query_datosusuario = "SELECT * FROM tblusuario";
$query_limit_datosusuario = sprintf("%s LIMIT %d, %d", $query_datosusuario, $startRow_datosusuario, $maxRows_datosusuario);
$datosusuario = mysqli_query($conexionbd,$query_limit_datosusuario) or die(mysqli_error());
$row_datosusuario = mysqli_fetch_assoc($datosusuario);

if (isset($_GET['totalRows_datosusuario'])) {
  $totalRows_datosusuario = $_GET['totalRows_datosusuario'];
} else {
  $all_datosusuario = mysqli_query($conexionbd,$query_datosusuario);
  $totalRows_datosusuario = mysqli_num_rows($all_datosusuario);
}
$totalPages_datosusuario = ceil($totalRows_datosusuario/$maxRows_datosusuario)-1;

$queryString_datosusuario = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_datosusuario") == false && 
        stristr($param, "totalRows_datosusuario") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_datosusuario = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_datosusuario = sprintf("&totalRows_datosusuario=%d%s", $totalRows_datosusuario, $queryString_datosusuario);
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
      <h1>Lista de usuarios</h1>
      <p>
      <table border="1" align="center">
        <tr >
          <td bgcolor="#FFFF00">ID</td>
          <td bgcolor="#FFFF00">Nombre</td>
          <td bgcolor="#FFFF00">Email</td>
          <td bgcolor="#FFFF00">Activo</td>
          <td bgcolor="#FFFF00">Telefono</td>
          <td bgcolor="#FFFF00">Privilegio</td>
          <td bgcolor="#FFFF00">Dirccion</td>
          <td bgcolor="#FFFF00">Contraseña</td>
          <td bgcolor="#FFFF00">Acciones</td>
        </tr>
        <?php do { ?>
          <tr class="brillo">
            <td><?php echo $row_datosusuario['idUsuario']; ?><a href="datosusuario.php?recordID=<?php echo $row_datosusuario['idUsuario']; ?>"></a></td>
            <td><?php echo $row_datosusuario['strNombre']; ?>&nbsp; </td>
            <td><?php echo $row_datosusuario['strEmail']; ?>&nbsp; </td>
            <td><?php echo $row_datosusuario['intActivo']; ?>&nbsp; </td>
            <td><?php echo $row_datosusuario['intTelefono']; ?>&nbsp; </td>
            <td><?php echo $row_datosusuario['intPrivilegio']; ?>&nbsp; </td>
            <td><?php echo $row_datosusuario['strDirccion']; ?>&nbsp; </td>
            <td><?php echo $row_datosusuario['strContrasena']; ?>&nbsp; </td>
             <td><img src="../imagenes/pencil2.png" width="16" height="16" /><a href="usuarios_edit.php?recordID=<?php echo $row_datosusuario['idUsuario']; ?>">Editar</a>-<img src="../imagenes/bin.png" width="16" height="16" /><a href="usuarios_delete.php?recordID=<?php echo $row_datosusuario['idUsuario']; ?>">Eliminar</a></td>
          </tr>
          <?php } while ($row_datosusuario = mysqli_fetch_assoc($datosusuario)); ?>
      </table>
      <br />
      <table border="0">
        <tr>
          <td><?php if ($pageNum_datosusuario > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_datosusuario=%d%s", $currentPage, 0, $queryString_datosusuario); ?>">Primero</a>
          <?php } // Show if not first page ?></td>
          <td><?php if ($pageNum_datosusuario > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_datosusuario=%d%s", $currentPage, max(0, $pageNum_datosusuario - 1), $queryString_datosusuario); ?>">Anterior</a>
          <?php } // Show if not first page ?></td>
          <td><?php if ($pageNum_datosusuario < $totalPages_datosusuario) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_datosusuario=%d%s", $currentPage, min($totalPages_datosusuario, $pageNum_datosusuario + 1), $queryString_datosusuario); ?>">Siguiente</a>
          <?php } // Show if not last page ?></td>
          <td><?php if ($pageNum_datosusuario < $totalPages_datosusuario) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_datosusuario=%d%s", $currentPage, $totalPages_datosusuario, $queryString_datosusuario); ?>">Último</a>
          <?php } // Show if not last page ?></td>
        </tr>
      </table>
Registros <?php echo ($startRow_datosusuario + 1) ?> a <?php echo min($startRow_datosusuario + $maxRows_datosusuario, $totalRows_datosusuario) ?> de <?php echo $totalRows_datosusuario ?> &nbsp; <br />
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
mysqli_free_result($datosusuario);
?>