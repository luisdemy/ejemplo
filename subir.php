<?php

include('conexion.php');

$nombre= $_POST['nombre'];
$anio = $_POST['anio'];
$categoria = $_POST['categoria']; 
$descripcion = $_POST['descripcion'];
$peso = $_POST['peso'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO peliculas(nombre,anio,categoria,descripcion,peso,portada,fecha_add) VALUES ('$nombre', '$anio', '$categoria', '$descripcion', '$peso', '$imagen',now())";

$res = mysqli_query($con, $query);

// si res == true mensaje script

header('Location: Subir_pelicula.php');
?>