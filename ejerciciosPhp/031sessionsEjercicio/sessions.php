<?php
//este es como fetch_assoc pero con  fetch_array
session_start();

$login = $_POST['login'];
$password = $_POST['password'];
$conexion = new mysqli("localhost", "root", "", "Prueba") or die("error en el servidor");

$consulta = $conexion -> query("SELECT * FROM usuarios WHERE LOGIN='" . $login . "' AND PASSWORD='" . $password . "'");
// var_dump($consulta->fetch_array(MYSQLI_ASSOC));

echo "Datos usuarios validado: <br>";


$fila = $consulta->fetch_array(MYSQLI_NUM);
$numRows = $consulta -> num_rows;
 

//parece q no lee las variables fuera del while
// echo "filaCateg" . $fila['CATEGORIA'] ."<br>";
// echo "filaNota" . $fila['nota'] ."<br>";

if ( $numRows == 0) {
	header("location: index.html");
}
else{
	$_SESSION['usuario'] = $login;
	// echo "numRows: " . $numRows . "<br>";
	// echo "categoria: " . $categoria;
	$_SESSION['categoria'] = $fila[2];
	$_SESSION['nota'] = $fila[3];
	if($_SESSION['categoria'] == 1){
		header("location: admin.php");
	}
	if ($_SESSION['categoria'] == 0) {
		header("location: user.php");
	}
}



?>
