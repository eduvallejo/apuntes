<?php
session_start();
if (($_SESSION['login']!=null)&&($_SESSION['categoria']==0))
{
    header("location: ../notas.html");
}else{
    header("location: ../index.html");
}

echo "<a href='user.php'>atrás</a></br>";
echo "<a href='desconectar.php'>desconectar</a></br>";

/* ver nota, atrás, desconectar */
?>