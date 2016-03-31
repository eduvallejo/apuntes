<?php

 //para obtener un dato de un formulario introducimos el $_GET o POST['nombre del name del input que querramos mostrar]

//para crear una variable se pone delante siempre el signo dolar $

$Nombre=$_POST['nombre'];//creando una variable
$Edad=$_POST['edad'];
$Sueldo=$_POST['sueldo'];
    
if(!is_numeric($Edad))||(!is_numeric($Sueldo))//!in_numeric significa que si no es numerico aquello que va despues se cumplirá una funcion
    {
    header ("location:http://futbol.as.com/futbol/2016/02/25/primera/1456400423_831195.html?autoplay=1");
    
    }    
echo "Hola ".$Nombre." que tal el día<br>";// en Java se concatenaba con + en php con punto.
echo "El próximo año cumplirás ".($Edad+1)." años<br>";
echo "Tu sueldo anual es ". $Sueldo." € <br>";

$Sueldo=$Sueldo*1.06;

echo "El año que viene tu sueldo anual aumentará a ".$Sueldo." €"; 

if ($Edad<18) {
    
    echo "hasta luego niñato";
}

?>
