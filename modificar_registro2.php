<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css"> 
    <title>Modificar - Instituto Tecnológico de Matamoros</title>
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
    <!-- Formulario de Modificar -->
    <main class="form-container">
        <section >
            <h4>Modificar Datos del Visitante</h4>
            <?php
            $id = $_GET['id'];
            $con = new mysqli('localhost', 'root', '', 'visitantes');
            if ($con->connect_error) {
                die("Error de conexión: " . $con->connect_error);
            }
            $sql = "SELECT * FROM registro WHERE id='$id'";
            $resultado = $con->query($sql);
            if ($resultado && $resultado->num_rows > 0) {
                $renglon = $resultado->fetch_assoc();
            } else {
                die("Registro no encontrado.");
            }
            $con->close();
            ?>
            <form action="modificar_registro3.php" method="post" name="form1" onsubmit="return validar(this);">
                <input type="hidden" name="id" value="<?php echo $renglon['id']; ?>" />
                <p>Paterno: <input name="paterno" type="text" id="paterno" size="50" maxlength="50"
                        value="<?php echo $renglon['paterno']; ?>" /></p>
                <p>Materno: <input name="materno" type="text" id="materno" size="50" maxlength="50"
                        value="<?php echo $renglon['materno']; ?>" /></p>
                <p>Nombre: <input name="nombre" type="text" id="nombre" size="50" maxlength="50"
                        value="<?php echo $renglon['nombre']; ?>" /></p>
                <p>Teléfono: <input name="telefono" type="text" id="telefono" size="50" maxlength="50"
                        value="<?php echo $renglon['telefono']; ?>" /></p>
                <p>Ciudad: <input name="ciudad" type="text" id="ciudad" size="50" maxlength="50"
                        value="<?php echo $renglon['ciudad']; ?>" /></p>
                <p>Fecha de Nacimiento: <input name="fecha" type="text" id="fecha" size="50" maxlength="50"
                        value="<?php echo $renglon['fecha']; ?>" /></p>
                <p><input class="btn-primary" type="submit" value="Modificar" /></p>
            </form>
        </section>
    </main>
  <footer class="footer">
        <p>&copy; 2024 Instituto Tecnológico de Matamoros</p>
    </footer>
</body>

</html>