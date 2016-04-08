function resetear (argument) {
	document.getElementById('salida').innerHTML = "";
	for (var i = 0; i < numero.length; i++) {
		numero[i] = "";
	};
	contador = 0;
	numero[0]=0;
	numeroNuevo = true;
	resultado = 0;
}