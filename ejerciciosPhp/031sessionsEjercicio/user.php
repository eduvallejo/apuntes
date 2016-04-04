<?php 
session_start();
// echo "user";
// $_SESSION["alumno"];
echo "SESSION: " . $_SESSION['login'] ;

//
echo '</br><a href="user2.php">Ver notaaa</a>';

//atras
echo '</br><a href="alumno.php">Atrás</a>';

//desconectar
echo '</br><a href="desconectar.php">Desconectar</a>';

// session_destroy();

?>