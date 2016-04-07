<?php
session_start();
if (($_SESSION['login']!=null)&&($_SESSION['categoria']==0))
{
    echo "<h3>[User2]</h3>";
    echo "User " . $_SESSION['login'] . "</br>";
    echo "Nota " . $_SESSION['nota'] . "</br>";
}else{
    header("location: ../index.html");
}

echo "<a href='user.php'>atrás</a></br>";
echo "<a href='desconectar.php'>desconectar</a></br>";

/* ver nota, atrás, desconectar */
?>