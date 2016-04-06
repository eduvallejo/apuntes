<?php 
session_start();

$dni = $_POST['dni'];

$conexion = new mysqli("localhost", "root", "", "prueba") or die("error en el servidor");

$consulta = $conexion -> query("SELECT * FROM usuarios WHERE LOGIN='" . $_SESSION['usuario'] . "' AND dni='" . $dni . "'");
// var_dump($consulta->fetch_array(MYSQLI_ASSOC));

$fila = $consulta->fetch_array(MYSQLI_NUM);
 
echo "Nota: " . $fila[3];

?>