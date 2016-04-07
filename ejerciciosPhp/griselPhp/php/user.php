<?php
session_start();
if($_SESSION['login']!=null)
{
    echo "<h3>[User]</h3>";
    $_SESSION['estado'] = 1;
    echo "Eres user " . $_SESSION['login'] . "</br>";
}else{
    header("location: ../index.html");
}

echo "<a href='sessions.php'>atrás</a></br>";
echo "<a href='user1.php'>user 1</a></br>";
echo "<a href='user2.php'>user 2</a></br>";
echo "<a href='desconectar.php'>desconectar</a></br>";

/* ver nota, atrás, desconectar */
?>