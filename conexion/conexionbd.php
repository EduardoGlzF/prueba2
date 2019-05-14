<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexionbd = "localhost";
$database_conexionbd = "computec";
$username_conexionbd = "root";
$password_conexionbd = "";
$conexionbd =new mysqli($hostname_conexionbd, $username_conexionbd, $password_conexionbd) or trigger_error(mysql_error(),E_USER_ERROR); 
?>