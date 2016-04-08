function calcular () {
	console.log("numero1: " + numero[1]);
	switch (numero[1]) {
		case "+":
			resultado = (parseFloat(numero[0])+parseFloat(numero[2]));
			// document.getElementById('salida').innerHTML = resultado;
			// alert(numero[0]+numero[1]+numero[2] + " = " + resultado);
    	 	document.getElementById('salida').innerHTML = resultado;

			break;
		case "-":
			resultado = (parseFloat(numero[0]) - parseFloat(numero[2]));
			// document.getElementById('salida').innerHTML = resultado;
    	 	document.getElementById('salida').innerHTML = resultado;
			break;
		case "/":
			resultado = (parseFloat(numero[0]) / parseFloat(numero[2]));
			// document.getElementById('salida').innerHTML = resultado;
    	 	document.getElementById('salida').innerHTML = resultado;
			break;
		case "*":
			resultado = (parseFloat(numero[0]) * parseFloat(numero[2]));
			// document.getElementById('salida').innerHTML = resultado;
    	 	document.getElementById('salida').innerHTML = resultado;
			break;
		default:
			// statements_def
			break;
	}
	//Vairable global 
	numeroNuevo = true;
}