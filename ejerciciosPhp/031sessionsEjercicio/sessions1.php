<?php

session_start();


$login = $_POST['login'];
$password = $_POST['password'];

//validacion
// //detect user
if (($login == 'admin' && $password == 'admin')) {

	$conexion = new mysqli("localhost", "root", "", "Prueba")
		or die("error en el servidor");

	$consulta = $conexion -> query("SELECT * FROM usuarios WHERE LOGIN='" . $login . "' AND PASSWORD='" . $password . "'");

	// $consulta = $conexion -> query("SELECT * FROM usuarios");

	
	while ($row = $consulta->fetch_assoc()) {
        echo $row['LOGIN']."<br>";
        echo $row['PASSWORD']."<br>";
        echo $row['CATEGORIA']."<br>";
        echo "<br>";
    }
	
	// mysql_select_db("Prueba", $conexion) 
	// 	or die ("error en la BBDD");
	// $sql = 'SELECT LOGIN FROM usuarios WHERE COGNOMS=""';
	// $result = mysql_query($sql, $conexion) or die(mysql_error());

	// var_dump($consulta["LOGIN"]);

	//inicializamos una variable SESSION con el nombre de admin
	// $_SESSION['admin'] = $login;
	// // echo "test";
	// header("location:admin.php");
}//si no mete ningun nombre de usuario le mandamos de vuelta
// else if($login == null){
// 	header("location:index.html");
// }
// else{
// 	$_SESSION['alumno'] = $login;
// 	header("location:alumno.php");
// }

?>
