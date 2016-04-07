<?php
 
$login = $_POST['login'];
$password = $_POST['password'];

$server_name = "localhost";
$usr_DB = "root";
$pwd_DB = "root";
$name_DB = "prueba";
    

// Create connection
$db = new mysqli($server_name, $usr_DB, $pwd_DB, $name_DB) or die('Unable to connect to database [' . $db->connect_error . ']');

// Create query
$sql = "SELECT login, password, categoria, nota FROM usuario WHERE login='" . $login . "' AND password='" . $password . "'";
$result = $db->query($sql) or die ('No existe el usuario en la db ' . $db->error);
$row = $result->fetch_array(MYSQLI_NUM);
$num_rows = $result->num_rows;

if($num_rows == 1){
    echo "OK Status";
    session_start();   
    $_SESSION['login'] = $row[0];
    $_SESSION['password'] = $row[1];
    $_SESSION['categoria'] = $row[2];
    $_SESSION['nota'] = $row[3];
    switch($_SESSION['categoria']){
        case 1:   header("location: admin.php");
                  break;
        case 0:   header("location: user.php");
                  break;
    }
}
?>