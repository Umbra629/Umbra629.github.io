<?php
$servidor = "localhost";
$usuario = "root";
$pw = ""; // Contraseña vacía sin espacios
$bd = "visitantes";
// Crear conexión
$con = mysqli_connect($servidor, $usuario, $pw, $bd);
// Verificar si la conexión fue exitosa
if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

