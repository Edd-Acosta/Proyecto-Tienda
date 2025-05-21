<?php
include("abre.php"); 
$id = $_REQUEST['id'];

// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$fabricante = $_POST['fabricante'];

/* Se guardan los bits de la imagen */

$consulta = "UPDATE registro SET nombre = '$nombre', descripcion='$descripcion', precio='$precio', fabricante='$fabricante' WHERE id='$id'";
$resultado = $conexion->query($consulta);

if ($resultado) {
    header("Location: ../mostrar.php");
}else{
    echo "Error al actualizar el producto";
}

?>