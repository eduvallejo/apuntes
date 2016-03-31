<?php 
session_start();
// echo "user";
// $_SESSION["alumno"];
echo "SESSION: " . $_SESSION['alumno'] ;

//
echo '</br><a href="nota.php">Ver notaaa</a>';

//atras
echo '</br><a href="alumno.php">Atrás</a>';

//desconectar
echo '</br><a href="desconectar.php">Desconectar</a>';



?>