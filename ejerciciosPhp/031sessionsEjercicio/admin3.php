<?php 
session_start();
echo "Desmatricular alumno<br>";

if ($_SESSION['usuario'] == 'admin' && $_SESSION['categoria'] == 1) {
	
	$login = $_POST['usuario'];
	$nota = $_POST['nota'];

	$conexion = new mysqli("localhost", "root", "", "prueba") or die("error en el servidor");

	mysqli_query($conexion, "UPDATE usuarios SET nota = ". $nota ." WHERE login='" . $login . "'");

	echo 'actualizado el usuario: ' . $login;
	echo '<a href="admin.php">Atrás</a></br>';
}else{
	header("location:index.html");
}
// session_destroy();

?>
