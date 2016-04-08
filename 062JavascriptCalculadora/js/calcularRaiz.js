function calcularRaiz (argument) {

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

	console.log(resultado);
	resultado = Math.sqrt(parseInt(numero[0]));
	// document.getElementById('salida').innerHTML = resultado;
 	document.getElementById('salida').innerHTML = resultado;
 	numeroNuevo = true;
}