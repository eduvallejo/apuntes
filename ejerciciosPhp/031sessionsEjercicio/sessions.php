<?php

session_start();


$login = $_POST['login'];
$password = $_POST['password'];

$conexion = new mysqli("localhost", "root", "", "Prueba") or die("error en el servidor");

//para saber si la conexion esta vacia
$chivato = 0;


// $consulta = $conexion -> query("SELECT * FROM usuarios WHERE LOGIN='" . $login . "' AND PASSWORD='" . $password . "'");
$consulta = $conexion -> query("SELECT * FROM usuarios");



echo "DATOS usuarios validado: <br>";
while ($row = $consulta->fetch_assoc()) {
	$chivato = 1;
    echo $row['LOGIN']."<br>";
    echo $row['PASSWORD']."<br>";
    echo $row['CATEGORIA']."<br>";
    echo "<br>";
}


if ($chivato == 0) {
	header("location: index.html");
}

// $consulta = $conexion -> query("SELECT * FROM usuarios");


?>
