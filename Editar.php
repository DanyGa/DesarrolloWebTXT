<?php 
include_once("Conexion.php");
include_once("Modificar.php");

$codigo = $_GET['codigo'];
 
$querybuscar = mysqli_query($conn, "SELECT * FROM test WHERE codigo=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['codigo'];
    $nombre = $mostrar['nombre'];
    $edad = $mostrar['edad'];
	$telefono = $mostrar['telefono'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wnombreth=device-wnombreth, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/StyleP.css">
    <link rel="stylesheet" href="../assets/css/StyleBD.css">


    <link href="../assets/img/mini.jpg" rel="icon">
    <link href="../assets/img/mini.jpg" rel="apple-touch-icon">
    
    <title>EDITAR | TOMORROW x TOGETHER | TXT</title>
    

</head>

<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar test</th></tr>
		     <tr> 
                <td>Codigo</td>
                <td><input type="text" name="txtcodigo" value="<?php echo $codigo;?>" required ></td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
            </tr>
            <tr> 
                <td>Edad</td>
                <td><input type="text" name="txtedad" value="<?php echo $edad;?>" required></td>
            </tr>
            <tr> 
                <td>Teléfono</td>
                <td><input type="text" name="txttelefono" value="<?php echo $telefono;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="../Mpdificar.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a esta persona?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $codigo1 = $_POST['txtcodigo'];
	
	$nombre1 	= $_POST['txtnombre'];
    $edad1 	= $_POST['txtedad'];
    $telefono1 	= $_POST['txttelefono']; 
      
    $querymodificar = mysqli_query($conn, "UPDATE test SET nombre='$nombre1', edad='$edad1', telefono='$telefono1' WHERE codigo=$codigo1");

  	echo "<script>window.location= 'Modificar.php' </script>";
    
}
?>