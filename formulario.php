<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost:3307", "root", "", "usuarios");

// Verificar la conexión
if (!$conexion) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$identificacion = $_POST["identificacion"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$genero = $_POST["genero"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

// Insertar los datos en la tabla
$sql = "INSERT INTO registros (identificacion, nombres, apellidos, edad, genero, telefono, correo) VALUES ('$identificacion', '$nombres', '$apellidos', '$edad', '$genero', '$telefono', '$correo')";

if (mysqli_query($conexion, $sql)) {
    echo "Los datos se han insertado correctamente.";
} else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

