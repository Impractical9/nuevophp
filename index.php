<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Clientes</title>
</head>
<body>
    <h1>Gestión de Clientes</h1>

   
    <form action="guardar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
        
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br>
        
        <label>Dirección:</label>
        <input type="text" name="direccion" required><br>
        
        <button type="submit">Guardar</button>
    </form>

    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
        <?php
        $sql = "SELECT * FROM clientes";
        $resultado = $conexion->query($sql);
        
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['telefono']}</td>
                <td>{$fila['direccion']}</td>
                <td>
                    <a href='editar.php?id={$fila['id']}'>Editar</a>
                    <a href='eliminar.php?id={$fila['id']}' onclick='return confirm(\"¿Eliminar?\")'>Eliminar</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>