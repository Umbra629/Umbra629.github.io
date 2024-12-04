<?php
// Configuración de la conexión
$servidor = "localhost";
$usuario = "root";  // Cambia si tienes un usuario distinto
$password = "";     // Cambia si tienes una contraseña para tu usuario
$base_datos = "visitantes";
// Crear conexión
$con = new mysqli($servidor, $usuario, $password, $base_datos);
// Verificar conexión
if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}
// Verificar si el ID está presente en la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Consulta para eliminar el registro
    $sql = "DELETE FROM registro WHERE id = ?";
    $stmt = $con->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id); // "i" indica que el parámetro es un número entero
        $stmt->execute();
        // Confirmar si se eliminó el registro
        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Registro eliminado exitosamente');</script>";
        } else {
            echo "<script>alert('No se pudo eliminar el registro');</script>";
        }
        // Redireccionar al usuario después de la eliminación
        echo "<script>
                var respuesta = confirm('¿Deseas eliminar otro registro?');
                if (respuesta) {
                    window.location.href = 'eliminar_1.php';
                } else {
                    window.location.href = 'lista_registros.php'; // Cambia esto a la página donde se lista la tabla
                }
              </script>";
        $stmt->close();
    } else {
        echo "<script>alert('Error al preparar la consulta');</script>";
    }
} else {
    echo "<script>alert('No se ha especificado el ID para eliminar');</script>";
}
// Cerrar conexión
$con->close();
?>