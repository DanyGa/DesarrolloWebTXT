<?php include_once("Conexion.php"); 
    
    $codigo 	= $_POST['txtcodigo'];
	$nombre 	= $_POST['txtnombre'];
    $edad 	= $_POST['txtedad'];
    $telefono 	= $_POST['txttelefono'];
    
	mysqli_query($conn, "INSERT INTO test(codigo,nombre,edad,telefono) VALUES('$codigo','$nombre','$edad','$telefono')");
    
header("Location:Modificar.php");
	

?>