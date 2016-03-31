<?php 
session_start();
echo "ADMIN <br>";

echo "loginSession: " . $_SESSION['admin'] . "</br>" ;

//añadir
echo '<a href="anadir.php">Añadir</a></br>';

//modificar
echo '<a href="modificar.php">modificar</a></br>';

//eliminar
echo '<a href="modificar.php">eliminar</a></br>';

//atras
echo '<a href="desconectar.php">atras</a></br>';

//desconectar
echo '<a href="desconectar.php">Desconectar</a>';



?>
