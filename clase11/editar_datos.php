<?php
include("conexion.php");
$nombre_recibido = $_POST["nombre"];
$origen_recibido = $_POST["origen"];
$logo_recibido = $_POST["logo"];


$update = "UPDATE marcas SET nombre=".$nombre_recibido.",origen =".$origen_recibido.",logo =".$logo_recibido.")";
$resultado = mysqli_query($conexion, $insert);
header("location: index.php")
?>