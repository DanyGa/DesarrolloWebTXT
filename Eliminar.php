<?php
include_once("Conexion.php");
 
$codigo = $_GET['codigo'];
 
mysqli_query($conn, "DELETE FROM test WHERE codigo=$codigo");
 
header("Location:Modificar.php");

?>