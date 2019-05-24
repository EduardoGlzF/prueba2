<?php




function ObtenerNombreUsuario($identificador){

global $conexionbd,$database_conexionbd;
mysqli_select_db($conexionbd,$database_conexionbd);
$query_cansultafuncion = sprintf("SELECT tblusuario.strNombre FROM tblusuario WHERE tblusuario.idUsuario = %s", $identificador);
$cansultafuncion = mysqli_query($conexionbd,$query_cansultafuncion) or die(mysqli_error());
$row_cansultafuncion = mysqli_fetch_assoc($cansultafuncion);
$totalRows_cansultafuncion = mysqli_num_rows($cansultafuncion);
echo $row_cansultafuncion['strNombre']; 
mysqli_free_result($cansultafuncion);
}


function ObtenerNombreProducto($identificador){

global $database_conexionmanzanas, $conexionmanzanas;
mysqli_select_db($database_conexionmanzanas, $conexionmanzanas);
$query_cansultafuncion = sprintf("SELECT strNombre FROM tblproducto WHERE idProductos = %s", $identificador);
$cansultafuncion = mysqli_query($conexionbd,$query_cansultafuncion) or die(mysqli_error());
$row_cansultafuncion = mysqli_fetch_assoc($cansultafuncion);
$totalRows_cansultafuncion = mysqli_num_rows($cansultafuncion);
echo $row_cansultafuncion['strNombre']; 
mysql_free_result($cansultafuncion);
}


function ObtenerPrecioProducto($identificador){

global $conexionbd,$database_conexionbd;
mysqli_select_db($conexionbd,$database_conexionmanzanas);
$query_cansultafuncion = sprintf("SELECT dblPrecio FROM tblproducto WHERE idProductos = %s", $identificador);
$cansultafuncion = mysqli_query($conexionbd,$query_cansultafuncion) or die(mysqli_error());
$row_cansultafuncion = mysqli_fetch_assoc($cansultafuncion);
$totalRows_cansultafuncion = mysqli_num_rows($cansultafuncion);
echo $row_cansultafuncion['dblPrecio']; 
mysqli_free_result($cansultafuncion);
}

?>
