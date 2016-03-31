<?php 
session_start();
echo "ADMIN <br>";

if ($_SESSION['login'] == 'admin' && $_SESSION['categoria'] == 1) {
	echo "loginSession: " . $_SESSION['login'] . "</br>" ;

	//añadir
	echo '<a href="anadir.php">Añadir</a></br>';

	//modificar
	echo '<a href="modificar.php">Modificar</a></br>';

	//eliminar
	echo '<a href="modificar.php">eliminar</a></br>';

	//atras
	echo '<a href="desconectar.php">atras</a></br>';

	//desconectar
	echo '<a href="desconectar.php">Desconectar</a>';
}
// session_destroy();

?>
