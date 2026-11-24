<?php
include("conexion.php");
$nombre = $_POST['nombre']; $edad = $_POST['edad']; $ciudad = $_POST['ciudad'];
$comportamiento = $_POST['comportamiento']; $regalo1 = $_POST['regalo1'];
$regalo2 = $_POST['regalo2']; $mensaje = $_POST['mensaje'];

$sql = "INSERT INTO cartas (nombre, edad, ciudad, comportamiento, regalo1, regalo2, mensaje) VALUES ('$nombre','$edad','$ciudad','$comportamiento','$regalo1','$regalo2','$mensaje')";
if($conexion->query($sql)){
    echo "<h2 style='text-align:center;font-family:Arial'> ¡Tu carta fue enviada a Santa! <br><br><a href='lista.php'>Ver cartas enviadas</a> | <a href='index.html'>Volver al inicio</a></h2>";
} else { echo "Error: " . $conexion->error; }
?>