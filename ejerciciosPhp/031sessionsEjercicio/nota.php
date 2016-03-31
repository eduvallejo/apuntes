<?php 
session_start();
echo "SESSION ALUMNO <br>";

echo "loginSession: " . $_SESSION['alumno'] . "</br>" ;

//
echo 'Nota : 10 </br>';

//atras
echo '<a href="alumno.php">Atrás</a></br>';

//desconectar
echo '<a href="desconectar.php">Desconectar</a></br>';



?>