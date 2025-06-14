<?php
include("conexion.php");

$id = $_GET['id'];
$sql = "DELETE FROM clientes WHERE id=$id";

if ($conexion->query($sql)) {
    header("Location: index.php"); 
} else {
    echo "Error al eliminar: " . $conexion->error;
}
?>