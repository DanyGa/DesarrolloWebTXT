<?php
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$contraseñaRepetida=md5($contraseña);
session_start();
$_SESSION['email']=$email;

include('Conexion2.php');

$consultar="SELECT*FROM usuario where correo='$email' and clave ='$contraseñaRepetida'";
$resultado=mysqli_query($conexion,$consultar);

$rows= mysqli_num_rows($resultado);

if($rows){
    header("location:PaginaPrincipal.php");
    
}else{  
    ?>
    <?php
    include("Login.php");
    ?>
    <h1 class ="bad"> ERROR AL INICIAR SESION </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);