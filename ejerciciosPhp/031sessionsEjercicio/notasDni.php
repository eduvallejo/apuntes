<?php 
session_start();

$dni = $_POST['dni'];

if (($_SESSION['usuario'] != null) && ($_SESSION['categoria'] == 0)) {
	
	echo "Eres usuario <br>";
	$conexion = new mysqli("localhost", "root", "", "prueba") or die("error en el servidor");

	$consulta = $conexion -> query("SELECT * FROM usuarios WHERE login='" . $_SESSION['usuario'] . "' AND dni='" . $dni . "'");
	// var_dump($consulta->fetch_array(MYSQLI_ASSOC));

	$fila = $consulta->fetch_array(MYSQLI_NUM);
	 
	echo "Nota: " . $fila[3];
}else{
	header('location: index.html');
}

//atras
echo '</br><a href="desconectar.php">Atrás</a>';
//desconectar
echo '</br><a href="desconectar.php">Desconectar</a>';



?>