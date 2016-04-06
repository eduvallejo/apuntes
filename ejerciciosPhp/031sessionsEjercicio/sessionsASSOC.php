<?php

session_start();

$login = $_POST['login'];
$password = $_POST['password'];
$conexion = new mysqli("localhost", "root", "", "Prueba") or die("error en el servidor");

$consulta = $conexion -> query("SELECT * FROM usuarios WHERE LOGIN='" . $login . "' AND PASSWORD='" . $password . "'");
// var_dump($consulta->fetch_array(MYSQLI_ASSOC));

echo "Datos usuarios validado: <br>";

$numRows = mysqli_num_rows($consulta);

while ($fila = $consulta->fetch_assoc()) {
    echo $fila['LOGIN']."<br>";
    echo $fila['PASSWORD']."<br>";
    echo $fila['CATEGORIA']."<br>";
    echo $fila['nota']."<br>";
	
    echo "<br>";
}

//parece q no lee las variables fuera del while
// echo "filaCateg" . $fila['CATEGORIA'] ."<br>";
// echo "filaNota" . $fila['nota'] ."<br>";

if ( $numRows == 0) {
	header("location: index.html");
}
else{
	$_SESSION['login'] = $login;
	$_SESSION['categoria'] = $fila['CATEGORIA'];
	$_SESSION['nota'] = $fila['nota'];
	
	if($_SESSION['categoria'] == 1){
		header("location: admin.php");
	}
	if ($_SESSION['categoria'] == 0) {
		header("location: user.php");
	}
}



?>
