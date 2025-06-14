<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

if (empty($id)) {
    $sql = "INSERT INTO clientes (nombre, telefono, direccion) VALUES ('$nombre', '$telefono', '$direccion')";
} else {
    $sql = "UPDATE clientes SET nombre='$nombre', telefono='$telefono', direccion='$direccion' WHERE id=$id";
}

if ($conexion->query($sql)) {
    header("Location: index.php"); 
} else {
    echo "Error: " . $conexion->error;
}
?>