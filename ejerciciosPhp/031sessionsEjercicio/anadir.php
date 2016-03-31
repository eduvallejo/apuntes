<?php 
session_start();
echo "ADMIN <br>";

echo "loginSession: " . $_SESSION['admin'] . "</br>" ;


//atras
echo '<a href="admin.php">atras</a></br>';

//desconectar
echo '<a href="desconectar.php">Desconectar</a>';



?>
