<?php 
session_start();
echo "ADMIN <br>";

if ($_SESSION['usuario'] == 'admin' && $_SESSION['categoria'] == 1) {
	echo 'Eres el administrador	</br>';
	echo "loginSession: " . $_SESSION['usuario'] . "</br>" ;

	//añadir
	echo '<a href="admin1.html">matricular alumno</a></br>';
	//añadir
	echo '<a href="admin2.html">desmatricular alumno</a></br>';
	echo '<a href="admin3.html">actualizar nota</a></br>';

	echo '<a href="desconectar.php">Atrás</a>';

	echo '<a href="desconectar.php">Desconectar</a>';
}else{
	header("location:index.html");	
}
// session_destroy();

?>
