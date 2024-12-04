<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css"> <!-- Enlace a estilos externos -->
    <title>Lista - Instituto Tecnológico de Matamoros</title>
<style>
    /* Estilo de la tabla */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
th, td {
    text-align: center;
    padding: 10px;
    border: 1px solid #ccc;
}
th {
    background-color: #669999; /* Fondo verde azulado */
    color: white; /* Texto blanco */
    font-weight: bold;
}
tr:nth-child(even) {
    background-color: #f2f2f2; /* Fondo gris claro para filas pares */
}
a {
    text-decoration: none;
    color: blue; /* Color azul para enlaces */
    font-weight: bold;
}
a:hover {
    text-decoration: underline; /* Subrayar enlace al pasar el cursor */
}
</style>
</head>
<body>
    <!-- Encabezado -->
    <header class="header">
        <h1>INSTITUTO TECNOLÓGICO DE MATAMOROS</h1>
    </header>
    <!-- Navegación -->
    <nav class="nav">
        <ul>
            <li><a href="index2.php">Inicio</a></li>
            <li><a href="Altas2.html">Altas</a></li>
            <li><a href="modificar_registro.php">Modificar</a></li>
            <li><a href="lista2.php">Mostrar Lista</a></li>
            <li><a href="eliminar_1.php">Eliminar</a></li>
        </ul>
    </nav>
    <!-- Logo -->
    <main style="text-align: center; padding: 50px;">
 <h2 class="center">Mostrar la Lista</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>Fecha de Nacimiento</th>
                <th>Acción</th>
            </tr>
         <?php
    // Conexión a la base de datos
    include("conexion2.php");
    $conexion = new mysqli("localhost", "root", "", "visitantes");
    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    // Realizar la consulta
    $query = "SELECT id, CONCAT(paterno, ' ', materno, ' ', nombre) AS nombre, telefono, ciudad, fecha FROM registro";
    $resultado = $conexion->query($query);
    // Iterar sobre los resultados
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                            <td>{$fila['id']}</td>
                            <td>{$fila['nombre']}</td>
                            <td>{$fila['telefono']}</td>
                            <td>{$fila['ciudad']}</td>
                            <td>{$fila['fecha']}</td>
                            <td>
                                <a href='modificar_registro2.php?id={$fila['id']}' style='color: blue;'>modificar</a> |
                                <a href='eliminar_2.php?id={$fila['id']}' style='color: red;' onclick='return confirm(\"¿Estás seguro de eliminar este registro?\");'>Eliminar</a>
                            </td>
                          </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No hay registros disponibles</td></tr>";
    }
    // Cerrar la conexión
    $conexion->close();
    ?>
</table>
    </main>
    <!-- Pie de Página -->
    <footer class="footer">
        <p>&copy; 2024 Instituto Tecnológico de Matamoros</p>
    </footer>
</body>
</html>