function operar (argument) {
	contador++;
	numero[contador] = argument;
	console.log("numero["+contador+"] = " + numero[contador]);

	contador++;
	//para q no de NAN al concatenar
	numero[contador]="";
	mostrar();
}