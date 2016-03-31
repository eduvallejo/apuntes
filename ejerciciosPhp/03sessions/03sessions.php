<?php

//para usar session hemos de algo asi como importar las funciones con session_start()
//!!session_start() ha de ser la primera linea d ecodigo php!!
session_start();

if ($_SESSION['admin']!=null) || ($_SESSION['user']!=null) {
	echo "eres usuario" . $_SESSION['admin2'];
}else{
	header("location:03sessions.html");
}


$login = $_POST['login'];
$password = $_POST['password'];

//validacion
//detect user
if (($login == 'admin' && $password == 'admin')) {
	//inicializamos una variable SESSION con el nombre de admin
	$_SESSION['admin'] = $login;
	// echo "test";
	header("location:031admin.php");
}
else if (($login == 'user' && $password == 'user')) {
	$_SESSION['user'] = $login;
	header("location:031user.php");
}
else{
	// header("location:03Sessions.html");
	header("location:03sessions.html");
}

?>
