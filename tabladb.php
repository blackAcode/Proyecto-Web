<?php
require 'conexion.php'; // tu conexión PDO

$sql = "SELECT * FROM personas";
$stmt = $conexion->query($sql);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
</head>
<body>

<h2>Tabla de Personas</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>CI</th>
        <th>Color</th>
        <th>Música</th>
        <th>Comida</th>
        <th>Letra</th>
    </tr>

    <?php foreach ($resultados as $fila): ?>
    <tr>
        <td><?php echo $fila['ID_PERSONA']; ?></td>
        <td><?php echo $fila['CI']; ?></td>
        <td><?php echo $fila['COLOR']; ?></td>
        <td><?php echo $fila['MUSCIA']; ?></td>
        <td><?php echo $fila['COMIDA']; ?></td>
        <td><?php echo $fila['LETRA']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>