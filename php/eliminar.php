<?php
include("abre.php");
$id = $_REQUEST['id'];
// echo $id; // Eliminar o comentar esta línea
$consulta = "DELETE FROM registro WHERE id = '$id'";
// echo $consulta; // Eliminar o comentar esta línea
$resultado = $conexion->query($consulta);

if ($conexion->query($consulta) === TRUE) {
    header("Location: ../mostrar.php");
    exit; // Asegura que el script se detenga después de la redirección
} else {
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}
?>
