<?php
$email=$_POST['emailRegistro'];
$usuario=$_POST['usuarioRegistro'];
$contraseña=$_POST['contraseñaRegistro'];
$contraseñaRepetida=$_POST['contraseñaRRegistro'];

include('Conexion2.php');

if($contraseña === $contraseñaRepetida)
{
$contraseñaRepetida = md5($contraseña);
$consulta = "INSERT INTO usuario (nUsuario,correo,clave,idUsuarioCrea,fechaCrea)
VALUES('$usuario','$correo','$contraseñaRepetida', 1, CURRENT_DATE())";
if (mysqli_query($conexion, $consulta)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
  }
}

mysqli_close($conexion);
?>