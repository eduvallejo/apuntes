<?php

session_start();

$login = $_POST['login'];
$password = $_POST['password'];

//validacion
// //detect user
if (($login == 'admin' && $password == 'admin')) {
	//inicializamos una variable SESSION con el nombre de admin
	$_SESSION['admin'] = $login;
	// echo "test";
	header("location:admin.php");
}//si no mete ningun nombre de usuario le mandamos de vuelta
else if($login == null){
	header("location:index.html");
}
else{
	$_SESSION['alumno'] = $login;
	header("location:alumno.php");
}

?>
