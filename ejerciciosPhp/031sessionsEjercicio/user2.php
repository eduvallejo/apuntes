<?php 
session_start();
// echo "user";
// $_SESSION["alumno"];
echo "SESSION: " . $_SESSION['login'] ;

//
echo 'Nota: ' . $_SESSION['nota'];

//atras
echo '</br><a href="alumno.php">Atrás</a>';

//desconectar
echo '</br><a href="desconectar.php">Desconectar</a>';

// session_destroy();

?>