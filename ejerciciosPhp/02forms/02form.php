<?php


$numero=$_POST['numero'];//creando una variable
    
// if((!is_numeric($edad))||(!is_numeric($sueldo)))
// {
// 	header ("location:uno2.html");
// }    


//checkear CAMPOS VACIOS
if ($numero < 1 || $numero > 25) {
	# code...
	header("location:02formError.php?numero=".$numero);
}
	
//tabla
echo "<table border='1' width='200px' style='text-align:center'";
echo "<tr><th colspan='5'>TABLA DE MULTIPLICAR DEL " . $numero . "</th></tr>";

// echo "numero es: ". $numero." <br>";
// echo "string";
for ($i=1; $i <= $numero; $i++) { 
	# code...
	echo "<tr>";

	// echo <td>Eve</td>
	echo "<td>" . $numero . "</td><td> x </td><td>" . 
		$i . "</td> <td>  = </td> <td>" . $numero*$i . "<br></td>";
	echo "</tr>";
}
echo "</table>";

echo "<a href='02form.html'>Introducir otro número</a>";

?>
