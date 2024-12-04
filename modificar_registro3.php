<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Conexión a la base de datos
        $con = new mysqli('localhost', 'root', '', 'visitantes');

        // Verificar la conexión
        if ($con->connect_error) {
                die("Error de conexión: " . $con->connect_error);
        }

        // Recoger los datos del formulario
        $id = $_POST['id'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['ciudad'];
        $fecha = $_POST['fecha'];  // Asegúrate de que el nombre del campo sea 'fecha'

        // Consulta SQL para actualizar el registro
        $update_sql = "UPDATE registro SET 
        paterno = '$paterno', 
        materno = '$materno', 
        nombre = '$nombre', 
        telefono = '$telefono', 
        ciudad = '$ciudad', 
        fecha = '$fecha' 
        WHERE id = '$id'";

        // Ejecutar la consulta de actualización
        if ($con->query($update_sql) === TRUE) {
                header("Location: lista.php");
                exit();
        } else {
                echo "Error al actualizar los datos: " . $con->error;
        }

        // Cerrar la conexión
        $con->close();
}
?>