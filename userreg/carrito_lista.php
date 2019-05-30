<?php require_once('../conexion/conexionbd.php'); ?>
<?php 
include("../funciones.php")
?>
<?php 

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
}

?>
<?php

$varCarrito_datoscarrito = "0";
if (isset($_SESSION["MM_IdUsuario"])) {
  $varCarrito_datoscarrito = $_SESSION["MM_IdUsuario"];
}
mysqli_select_db($conexionbd,$database_conexionbd );
$iduser=$varCarrito_datoscarrito;
$query_datoscarrito = "SELECT * FROM tblcarrito  WHERE tblcarrito.idUsuario  = '$iduser' ";
$datoscarrito = mysqli_query($conexionbd,$query_datoscarrito) or die(mysqli_error());
$row_datoscarrito = mysqli_fetch_assoc($datoscarrito);
$totalRows_datoscarrito = mysqli_num_rows($datoscarrito);
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
						<li class="menuH"><a href="./indexU.php">Inicio</a></li>
						<li class="menuH"><a href="./telefoniauserreg.php">Telefonía</a></li>
						<li class="menuH"><a href="./catalagoreg.php">Cómputo</a></li>
						<li class="menuH"><a href="./ofertauserreg">Ofertas</a></li>
					</ul>			
				</div>					
								
		
		 </div>					 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" --><div align="center">
      <h1>Carrito de la compra</h1>
      <table width="770" border="0">
        <tr>
          <th width="200" bgcolor="#FFFF00" scope="col">Nombre del Producto</th>
          <th width="180" bgcolor="#FFFF00" scope="col">Unidades</th>
          <th width="189" bgcolor="#FFFF00" scope="col">Precio</th>
          <th width="123" bgcolor="#FFFF00" scope="col">Acciones</th>
        </tr>
        <?php $preciototal = 0;?>
        <?php do { ?>
        
          <tr >
            <td><?php echo ObtenerNombreProducto($row_datoscarrito['idProducto']); ?></td>
            <td><?php echo $row_datoscarrito['cantidad']; ?></td>
            <td>$<?php echo ObtenerPrecioProducto($row_datoscarrito['idProducto']); ?></td>
            <td><a href="../userreg/cancelar_pedido.php?recordID=<?php echo $row_datoscarrito['idcarrito']; ?>">Cancelar pedido</a></td>
          </tr>
         	
          <?php } while ($row_datoscarrito = mysqli_fetch_assoc($datoscarrito)); ?>
          
          <tr >
            <td>&nbsp;</td>
            <td bgcolor="#FF0000">total:</td>
            <td bgcolor="#FF0000">$ <?php echo calcularprecio($iduser); ?></td>
            <td>&nbsp;</td>
          </tr>
      </table>
      <p>&nbsp;</p>
    </div><!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1"><a href="./nosotros.php"><h2>Nosotros</h2></a> 
					<p>Nuestros valores</p>
					<p>Nuestra misión</p>
					<p>Ubicación</p>
				</div>
				<div class="pie1"><a href="./politicaR.php"><h2>Nuestras Políticas</h2></a>
					<p>Seguridad </p>
					<p>Calidad </p>
					<p>Devoluciones</p>
				</div>
				<div class="pie1"><a href="./ayudaR.php"><h2>Contáctanos</h2></a>
					<p>Información por correo</p>
					<p>Servicio de Ayuda</p>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- InstanceEnd --></html>