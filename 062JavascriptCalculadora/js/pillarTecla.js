function pillarTecla (tecla) {
    	
    	//comprobar si emepzamos de nuevo
    	if (numeroNuevo == true) {
    		numeroNuevo = false;
			document.getElementById('salida').innerHTML = "";
			for (var i = 0; i < numero.length; i++) {
				numero[i] = "";
			};
			contador = 0;
    	}
    	//leer teclas
		switch (tecla) {
    		
    		case "C":
    			console.log("c!");
    			resetear();
    			break;
    		case "CE":
    			console.log("c!");
    			numero[contador] =  "";
    			mostrar();
    			break;
    		case "Retroc":
    			console.log("c!");
    			// numero[contador] = numero[contador].substring(0, numero[contador].length - 1);
    			numero[contador] = numero[contador].slice(0, -1);
    			mostrar();
    			break;
    		case "+/-":
    			console.log("+/-");
    			numero[contador] = (-numero[contador]);
    			mostrar();
    			break;
    		default:
    			// statements_def
		    	numero[contador] += tecla;
		    	console.log("contador: " + contador);
			    document.getElementById('salida').innerHTML += tecla;
    			break;
    	}
	}
