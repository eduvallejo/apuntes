function calcularPorciento () {
	console.log("numero1: " + numero[1]);
	var resultado = (parseFloat(numero[2])*parseFloat(numero[0])/100);
	console.log()	
 	document.getElementById('salida').innerHTML = resultado;
}
