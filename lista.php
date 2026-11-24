<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8">
<title>Cartas Enviadas</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header><nav class="navbar"><div class="logo"> MI CARTA <span>A SANTA</span></div>
<ul class="nav-links"><li><a href="index.html">INICIO</a></li><li><a href="galeria.html">GALERÍA</a></li><li><a href="carta.html">ESCRIBIR CARTA</a></li><li><a href="lista.php" class="active">CARTAS ENVIADAS</a></li></ul></nav></header>
<section class="section"><h2 class="title-center"> NIÑOS QUE YA ENVIARON SU CARTA </h2>
<div class="tabla-wrap"><table><tr><th>Nombre</th><th>Edad</th><th>Ciudad</th><th>Comportamiento</th><th>Regalo 1</th><th>Regalo 2</th><th>Mensaje</th></tr>
<?php
$resultado = $conexion->query("SELECT * FROM cartas ORDER BY id DESC");
while($fila = $resultado->fetch_assoc()){
    echo "<tr><td>".$fila['nombre']."</td><td>".$fila['edad']."</td><td>".$fila['ciudad']."</td><td>".$fila['comportamiento']."</td><td>".$fila['regalo1']."</td><td>".$fila['regalo2']."</td><td>".$fila['mensaje']."</td></tr>";
}
?>
</table></div></section><footer><p> </p></footer>
</body>
</html>