function operar (argument) {
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

	contador++;
	numero[contador] = argument;
	console.log("numero["+contador+"] = " + numero[contador]);

	contador++;
	//para q no de NAN al concatenar
	numero[contador]="";
	mostrar();
}