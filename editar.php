<?php
include("conexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id=$id";
$resultado = $conexion->query($sql);
$cliente = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="guardar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
        
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" required><br>
        
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $cliente['telefono']; ?>" required><br>
        
        <label>Dirección:</label>
        <input type="text" name="direccion" value="<?php echo $cliente['direccion']; ?>" required><br>
        
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>