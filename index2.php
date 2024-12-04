<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css"> <!-- Enlace a estilos externos -->
    <title>Inicio - Instituto Tecnológico de Matamoros</title>
    <style>
        /* Hero Section */
        .hero {
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('school-banner.jpg') no-repeat center center/cover;
            color: white;
        }

        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .hero a {
            background-color: #ffd700;
            color: #0044cc;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .hero a:hover {
            background-color: #ffc107;
        }

        /* Courses Section */
        .courses-section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #e0f7fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .courses-section h2 {
            color: #0044cc;
            text-align: center;
        }

        .course-card {
            display: flex;
            margin: 15px 0;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .course-card img {
            height: 100px;
            margin-right: 15px;
        }

        .course-card div {
            flex: 1;
        }
    </style>
    <?php
    include("curso.php");
    // Clase Curso
    ?>
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

    <!-- Hero -->
    <section class="hero">
        <h1>Bienvenidos</h1>
        <p>La educación que transforma vidas. ¡Descubre más sobre nosotros!</p>
        <a href="Altas2.html">Registrar Visitante</a>
    </section>

    <!-- Logo -->
    <main style="text-align: center; padding: 50px;">
        <div class="logo-container">
            <img src="imagen/logo.jpg" alt="Logo del Instituto" style="width: 200px; height: auto;">
        </div>
    </main>

    <!-- Cursos -->
    <section class="courses-section">
        <h2>Cursos Disponibles</h2>
        <?php
        // Crear cursos
        $curso1 = new Curso();
        $curso1->nombre = "Introducción a la Inteligencia Artificial";
        $curso1->duracion = "8 semanas";
        $curso1->descripcion = "Descubre los fundamentos de la IA y su impacto en la tecnología moderna.";
        $curso1->imagen = "imagen/ia_curso.png";

        $curso2 = new Curso();
        $curso2->nombre = "Desarrollo Web Avanzado";
        $curso2->duracion = "12 semanas";
        $curso2->descripcion = "Aprende a construir sitios web dinámicos y escalables utilizando las últimas tecnologías.";
        $curso2->imagen = "imagen/web_dev_curso.png";

        $curso3 = new Curso();
        $curso3->nombre = "Introduccion a la programacion de PHP";
        $curso3->duracion = "6 semanas";
        $curso3->descripcion = "Domina los fundamentos de PHP, un lenguaje esencial para el desarrollo web dinámico y aprende a crear aplicaciones web interactivas.";
        $curso3->imagen = "imagen/PHP_curso.png";

        // Mostrar cursos
        $cursos = [$curso1, $curso2, $curso3];
        foreach ($cursos as $curso) {
            echo "<div class='course-card'>";
            echo "<img src='{$curso->imagen}' alt='{$curso->nombre}'>";
            echo "<div>";
            echo "<h4>{$curso->nombre}</h4>";
            echo "<p><strong>Duración:</strong> {$curso->duracion}</p>";
            echo "<p>{$curso->descripcion}</p>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </section>

    <!-- Pie de Página -->
    <footer class="footer">
        <p>&copy; 2024 Instituto Tecnológico de Matamoros</p>
    </footer>
</body>

</html>