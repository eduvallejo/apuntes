<?php 
session_start();
// echo "user";

if ($_SESSION['user']!=null) {
	echo "eres usuario" . $_SESSION['user'];
}else{
	header("location:03sessions.html");
}

echo "SESSION: " . $_SESSION['user'] ;

//atras
echo '</br><a href="03sessions.php">Atrás</a>';
//
echo '</br><a href="031admin1.php">Admin1</a>';
//
echo '</br><a href="031admin2.php">Admin2</a>';
//desconectar
echo '</br><a href="032desconectar.php">Desconectar</a>';



?>