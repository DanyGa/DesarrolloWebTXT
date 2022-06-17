<?php
$hostName = "localhost";
$userName = "root";
$password = '';



// Create connection
$conexion = mysqli_connect($hostName, $userName,$password,'tomorrowxtogether');

// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>