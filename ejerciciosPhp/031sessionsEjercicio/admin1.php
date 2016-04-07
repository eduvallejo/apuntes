<?php 
session_start();
echo "Matricular alumno<br>";

if ($_SESSION['usuario'] == 'admin' && $_SESSION['categoria'] == 1) {
	echo 'Eres el administrador	</br>';
	echo "loginSession: " . $_SESSION['usuario'] . "</br>" ;
	echo "preparando para matricular</br>" ;


	$login = $_POST['usuario'];
	$password = $_POST['password'];
	$categoria = $_POST['categoria'];
	$nota = $_POST['nota'];
	$dni = $_POST['dni'];

	$conexion = new mysqli("localhost", "root", "", "prueba") or die("error en el servidor");

	mysqli_query($conexion, "INSERT INTO usuarios VALUES ('".$login."','".$password."',0, ".$nota .",'".$dni."')");


	echo '<a href="admin.php">Atrás</a></br>';
}else{
	header("location:index.html");
}
// session_destroy();

?>
