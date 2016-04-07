<?php

session_start();

if(($_SESSION['login']!=null)&&($_SESSION['categoria']==1))
{
    echo "<h3>[Administrador]</h3>";
    $_SESSION['estado'] = 0;
    echo "Eres administrador " . $_SESSION['login'] . "</br>";
}else{
    header("location: ../index.html");
}

echo "<a href='sessions.php'>atrás</a></br>";
echo "<a href='admin1.php'>Matricular alumno</a></br>";
echo "<a href='admin2.php'>Dar de baja a alumno</a></br>";
echo "<a href='admin3.php'>Actualizar nota</a></br>";
echo "<a href='desconectar.php'>desconectar</a></br>";

/* Añadir, Modificar, Eliminar, atrás y desconectar */
?>