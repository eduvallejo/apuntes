<?php

session_start();

if(($_SESSION['login']!=null)&&($_SESSION['categoria']==1))
{
    if(isset($_POST['submit'])){ 
        #CARREGO LES DADES
        if(($_POST['dni']!=null)&&($_POST['password']!=null)){
            
            $dni = $_POST['dni'];
            $pwd = $_POST['password']; 
            
            $server_name = "localhost";
            $usr_DB = "root";
            $pwd_DB = "root";
            $name_DB = "prueba";

            // Create connection
            $db = new mysqli($server_name, $usr_DB, $pwd_DB, $name_DB) or die('Unable to connect to database [' . $db->connect_error . ']');

            // Create query
            $sql = "DELETE FROM usuario WHERE dni='" . $dni ."' AND password='" . $pwd . "'";
            mysqli_query($db,$sql) or die ('No existe el usuario en la db ' . $db->error);
        }
    }

    #TITULO
    echo "<h3>[Administrador][Dar de baja alumno]</h3>";
    $_SESSION['estado'] = 0;
    echo "Eres administrador " . $_SESSION['login'] . "</br>";
    echo "</br>";
    
    #FORMULARIO
?>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <label>Dni:</label>
        <input type='text' name='dni'/> 
        </br>
        <label>Password:</label>
        <input type='text' name='password'/> 
        </br>
        <input type='submit' name='submit' value='Enviar'>
    </form>

<?php    
    
}else{
    header("location: ../index.html");
}

echo "<a href='sessions.php'>atrás</a></br>";
echo "<a href='admin1.php'>Matricular alumno</a></br>";
echo "<a href='admin2.php'>Dar de baja a alumno</a></br>";
echo "<a href='admin3.php'>Actualizar nota</a></br>";
echo "<a href='desconectar.php'>desconectar</a></br>";

?>