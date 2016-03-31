<?php

 //para obtener un dato de un formulario introducimos el $_GET o POST['nombre del name del input que querramos mostrar]

//para crear una variable se pone delante siempre el signo dolar $

$nombre=$_POST['nombre'];//creando una variable
$edad=$_POST['edad'];
$sueldo=$_POST['sueldo'];
    
if((!is_numeric($edad))||(!is_numeric($sueldo)))
{
	header ("location:uno2.html");
}    

//checkear CAMPOS VACIOS
if (strlen($nombre) < 3) {
	# code...
	header("location:uno2.html");
}
//checkear CAMPOS VACIOS
if ($edad < 18 || $edad > 65) {
	# code...
	header("location:uno2.html");
}
//checkear CAMPOS VACIOS
if ($sueldo < 10 || $edad > 500000) {
	# code...
	header("location:uno2.html");
}

echo "Hola ".$nombre." que tal el día<br>";// en Java se concatenaba con + en php con punto.
echo "El próximo año cumplirás ".($edad+1)." años<br>";
echo "Tu sueldo anual es ". $sueldo." € <br>";

$sueldo=$sueldo*1.06;

echo "El año que viene tu sueldo anual aumentará a ".$sueldo." €"; 

?>
