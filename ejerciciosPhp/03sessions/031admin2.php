<?php 
session_start();
// echo "user";

if ($_SESSION['admin2']!=null) {
	echo "eres usuario" . $_SESSION['admin2'];
}else{
	header("location:03sessions.html");
}

echo "SESSION: " . $_SESSION['admin2'] ;

//atras
echo '</br><a href="031admin.php">Atrás</a>';
//
// echo '</br><a href="031admin1.php">Admin1</a>';
// //
// echo '</br><a href="031admin2.php">Admin2</a>';
//desconectar
echo '</br><a href="032desconectar.php">Desconectar</a>';



?>