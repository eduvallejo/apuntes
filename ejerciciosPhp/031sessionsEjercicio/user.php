<?php 
session_start();

if (($_SESSION['usuario'] != null) && ($_SESSION['categoria'] == 0)) {
	
	header('location: notasDni.html');
	// echo "SESSION: " . $_SESSION['usuario'] . "<br>";

	// echo "CATEGORIA: " . $_SESSION['categoria'] . "<br>";


	// //
	// echo '</br><a href="user2.php">Ver notaaa</a>';
	
	// echo '</br><a href="verDni.php">Ver dni</a>';

	// echo '</br><a href="desconectar.php">Desconectar</a>';

	// session_destroy();
}else{
	header('location: index.html');
}

?>