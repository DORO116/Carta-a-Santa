<?php
$conexion = new mysqli("localhost", "root", "", "cartas_santa");
if ($conexion->connect_error) { die("Error de conexión: " . $conexion->connect_error); }
?>