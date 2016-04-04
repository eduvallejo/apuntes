<?php

session_start();

$login = $_POST['login'];
$password = $_POST['password'];
$conexion = new mysqli("localhost", "root", "", "Prueba") or die("error en el servidor");

$consulta = $conexion -> query("SELECT * FROM usuarios WHERE LOGIN='" . $login . "' AND PASSWORD='" . $password . "'");

echo "DATOS usuarios validado: <br>";
while ($row = $consulta->fetch_assoc()) {
    echo $row['PASSWORD']."<br>";
    echo $row['CATEGORIA']."<br>";
    echo "<br>";
}
if (mysqli_num_rows($consulta) == 0) {
	header("location: index.html");
}


//mostrar todos usuarios

$consulta = $conexion -> query("SELECT * FROM usuarios");

echo "DATOS todos usuarios : <br>";
while ($row = $consulta->fetch_assoc()) {
    echo $row['LOGIN']."<br>";
    echo $row['PASSWORD']."<br>";
    echo $row['CATEGORIA']."<br>";
    echo "<br>";
}


if (mysqli_num_rows($consulta) == 0) {
	header("location: index.html");
}



?>
