<?php




function ObtenerNombreUsuario($identificador){

global $conexionbd,$database_conexionbd;
mysqli_select_db($conexionbd,$database_conexionbd);
$query_cansultafuncion = sprintf("SELECT tblusuario.strNombre FROM tblusuario WHERE tblusuario.idUsuario = %s", $identificador);
$cansultafuncion = mysqli_query($conexionbd,$query_cansultafuncion) or die(mysqli_error());
$row_cansultafuncion = mysqli_fetch_assoc($cansultafuncion);
$totalRows_cansultafuncion = mysqli_num_rows($cansultafuncion);
echo $row_cansultafuncion['strNombre']; 
/*mysqli_store_result($cansultafuncion);*/
}


function ObtenerNombreProducto($identificador){

global $conexionbd,$database_conexionbd;
mysqli_select_db($conexionbd,$database_conexionbd);
$query_cansultafuncion = sprintf("SELECT strNombre FROM tblproducto WHERE idProductos = %s", $identificador);
$cansultafuncion = mysqli_query($conexionbd,$query_cansultafuncion) or die(mysqli_error());
$row_cansultafuncion = mysqli_fetch_assoc($cansultafuncion);
$totalRows_cansultafuncion = mysqli_num_rows($cansultafuncion);
echo $row_cansultafuncion['strNombre']; 
/*mysqli_store_result($cansultafuncion);*/
}


function ObtenerPrecioProducto($identificador){

global $conexionbd,$database_conexionbd;
mysqli_select_db($conexionbd,$database_conexionbd);
$query_cansultafuncion = sprintf("SELECT dblPrecio FROM tblproducto WHERE idProductos = %s", $identificador);
$cansultafuncion = mysqli_query($conexionbd,$query_cansultafuncion) or die(mysqli_error());
$row_cansultafuncion = mysqli_fetch_assoc($cansultafuncion);
$totalRows_cansultafuncion = mysqli_num_rows($cansultafuncion);
echo $row_cansultafuncion['dblPrecio']; 
/*mysqli_store_result($cansultafuncion);*/
}

function calcularprecio($identificador1){
global $conexionbd,$database_conexionbd;
$suma=0;;
$query_datoscarrito = "SELECT idProducto FROM tblcarrito  WHERE tblcarrito.idUsuario  = '$identificador1' ";
$datoscarrito = mysqli_query($conexionbd,$query_datoscarrito) or die(mysqli_error());
$row_datoscarrito = mysqli_fetch_assoc($datoscarrito);
$totalRows_datoscarrito = mysqli_num_rows($datoscarrito);	
do {
	$idpro=$row_datoscarrito['idProducto'];
	mysqli_select_db($conexionbd,$database_conexionbd);
	$query_cansultafuncion1 = sprintf("SELECT dblPrecio FROM tblproducto WHERE idProductos = %s", $idpro);
	$cansultafuncion1 = mysqli_query($conexionbd,$query_cansultafuncion1) or die(mysqli_error());
	$row_cansultafuncion1 = mysqli_fetch_assoc($cansultafuncion1);
	$totalRows_cansultafuncion1 = mysqli_num_rows($cansultafuncion1);
	$row_cansultafuncion1['dblPrecio']; 
	$suma=$row_cansultafuncion1['dblPrecio']+$suma;	
	/*mysqli_store_result($cansultafuncion);*/
} while ($row_datoscarrito = mysqli_fetch_assoc($datoscarrito));
	echo $suma;
}

?>
