<?php
include("conexion2.php");
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
// Capturar datos del formulario
$paterno = $_POST['fpaterno'];
$materno = $_POST['fmaterno'];
$nombre = $_POST['fnombre'];
$telefono = $_POST['ftelefono'];
$ciudad = $_POST['fciudad'];
$fecha = $_POST['fnacio'];
// Consulta para insertar datos
$sql = "INSERT INTO registro (paterno, materno, nombre, telefono, ciudad, fecha)
        VALUES ('$paterno', '$materno', '$nombre', '$telefono', '$ciudad', '$fecha')";
// Ejecutar consulta
if ($con->query($sql) === TRUE) {
    echo "Registro guardado correctamente";
} else {
    echo "Error al guardar el registro: " . $con->error;
}
// Cerrar conexión
$con->close();
?>