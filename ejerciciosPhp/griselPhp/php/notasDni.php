<?php
 
session_start();
$dni = $_POST['dni'];

$server_name = "localhost";
$usr_DB = "root";
$pwd_DB = "root";
$name_DB = "prueba";
    

if (($_SESSION['login']!=null)&&($_SESSION['categoria']==0)){
    // Create connection
    $db = new mysqli($server_name, $usr_DB, $pwd_DB, $name_DB) or die('Unable to connect to database [' . $db->connect_error . ']');

    // Create query
    $sql = "SELECT login, password, categoria, dni nota FROM usuario WHERE dni='" . $dni . "' AND login='" . $_SESSION['login'] . "'";
    $result = $db->query($sql) or die ('No existe el usuario en la db ' . $db->error);
    $row = $result->fetch_array(MYSQLI_NUM);
    $num_rows = $result->num_rows;

    if($num_rows == 1){
        $nota = $row[3];
        echo "<h3>[User1][Notas]</h3>";
        print "Nota " . $nota . "</br>";
    }else{
        header("location: ../index.html");
    }
    echo "<a href='sessions.php'>atrás</a></br>";
    echo "<a href='desconectar.php'>desconectar</a></br>";
}else{
    header("location: ../index.html");
}
?>