function calcularPorciento () {
	//comprobar si emepzamos de nuevo
	if (numeroNuevo == true) {
		numeroNuevo = false;
		document.getElementById('salida').innerHTML = "";
		for (var i = 0; i < numero.length; i++) {
			numero[i] = "";
		};
		contador = 0;
		numero[contador] = resultado;
	}
	console.log("numero1: " + numero[1]);
	resultado = (parseFloat(numero[2])*parseFloat(numero[0])/100);
	console.log()	
 	document.getElementById('salida').innerHTML = resultado;
}
