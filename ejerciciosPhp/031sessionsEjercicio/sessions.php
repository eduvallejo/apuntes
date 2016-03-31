<?php

session_start();

$login = $_POST['login'];
$password = $_POST['password'];
$conexion = new mysqli("localhost", "root", "", "Prueba") or die("error en el servidor");

$consulta = $conexion -> query("SELECT * FROM usuarios WHERE LOGIN='" . $login . "' AND PASSWORD='" . $password . "'");
// var_dump($consulta->fetch_array(MYSQLI_ASSOC));

echo "Datos usuarios validado: <br>";

$numRows = mysqli_num_rows($consulta);

if ( $numRows == 0) {
	header("location: index.html");
}
else{
	$_SESSION['login'] = $login;
	$_SESSION['categoria'] = $fila[2];
	echo "numRows: " . $numRows . "<br>";
	echo "categoria: " . $categoria;

	// $_SESSION['usuario'] = $login;
	// $_SESSION['categoria'] = $categoria;
	// // echo mysqli_num_rows($consulta);
	if($_SESSION['categoria'] == 1){
		header("location: admin.php");
	}
	if ($_SESSION['categoria'] == 0) {
		header("location: alumno.php");
	}
}


//mostrar todos usuarios
// $consulta = $conexion -> query("SELECT * FROM usuarios");

// echo "DATOS todos usuarios : <br>";
// while ($fila = $consulta->fetch_assoc()) {
//     echo $fila['LOGIN']."<br>";
//     echo $fila['PASSWORD']."<br>";
//     echo $fila['CATEGORIA']."<br>";
//     echo "<br>";
// }

// if (mysqli_num_rows($consulta) == 0) {
// 	header("location: index.html");
// }



?>
