<?php

include("abre.php"); 
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$fabricante = $_POST['fabricante'];

$consulta = "INSERT INTO registro (nombre, descripcion, precio, fabricante) 
             VALUES ('$nombre', '$descripcion', '$precio', '$fabricante')";

// Ejecuta la consulta
if ($conexion->query($consulta) === TRUE) {
    header("Location: ../mostrar.php");
} else {
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}

// Cierra la conexión
$conexion->close();
?>