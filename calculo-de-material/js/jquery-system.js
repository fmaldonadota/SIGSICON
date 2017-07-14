function changeClass(op)
{
	
	
	
	document.getElementById("formularioSistema").reset();
	document.getElementById("btn_cira").className = "";	
	document.getElementById("btn_cies").className = "";	
	document.getElementById("btn_pado").className = "";	
	document.getElementById("btn_pafo").className = "";	
	document.getElementById("btn_fogy").className = "";	
	document.getElementById("btn_empi").className = "";	
	document.getElementById("cira").className = "divOculto";	
	document.getElementById("cies").className = "divOculto";	
	document.getElementById("pado").className = "divOculto";	
	document.getElementById("pafo").className = "divOculto";	
	document.getElementById("fogy").className = "divOculto";	
	document.getElementById("empi").className = "divOculto";
	document.getElementById("divTam").className = "divOculto";	
	document.getElementById("divAlt").className = "divOculto";	
	document.getElementById("botonesSistema").className = "botones";
	document.getElementById("tipo").value = op;
	
	switch (parseInt(op)){
	
		case 1: 
			document.getElementById("btn_cira").className = "boton_seleccionado";	
			document.getElementById("cira").className = "";
			document.getElementById("tituloTienda").innerHTML = "CIELO RASO GYPSUM PLANO";
			if(sessionStorage.getItem("Area")) document.getElementById("ingreso").value = sessionStorage.getItem("Area");
									
			break;
		case 2: 
			
			document.getElementById("btn_cies").className = "boton_seleccionado";				
			document.getElementById("cies").className = "";				
			document.getElementById("divTam").className = "";
			document.getElementById("tituloTienda").innerHTML = "CIELO RASO ESTRUCTURA VISTA";
			if(sessionStorage.getItem("Area")) document.getElementById("ingreso").value = sessionStorage.getItem("Area");								
			
			if(sessionStorage.getItem("Tamano")) 
				document.getElementById("selTamano").value = sessionStorage.getItem("Tamano");
			else
				document.getElementById("selTamano").value = 1;								
			break;
		case 3: 
			
			document.getElementById("btn_pado").className = "boton_seleccionado";				
			document.getElementById("pado").className = "";				
			document.getElementById("divAlt").className = "";	
			document.getElementById("tituloTienda").innerHTML = "PARED DOBLE FORRAMIENTO DE GYPSUM";
			if(sessionStorage.getItem("Area")) document.getElementById("ingreso").value = sessionStorage.getItem("Area");
			if(sessionStorage.getItem("Altura")) document.getElementById("altura").value = sessionStorage.getItem("Altura");
			break;
		case 4: 
			
			document.getElementById("btn_pafo").className = "boton_seleccionado";				
			document.getElementById("pafo").className = "";				
			document.getElementById("divAlt").className = "";	
			document.getElementById("tituloTienda").innerHTML = "PARED FORRAMIENTO UNA CARA DE GYPSUM";
			if(sessionStorage.getItem("Area")) document.getElementById("ingreso").value = sessionStorage.getItem("Area");
			if(sessionStorage.getItem("Altura")) document.getElementById("altura").value = sessionStorage.getItem("Altura");
			break;
		case 5: 
			
			document.getElementById("btn_fogy").className = "boton_seleccionado";				
			document.getElementById("fogy").className = "";	
			document.getElementById("tituloTienda").innerHTML = "FORRAMIENTO CON GYPSUM";			
			if(sessionStorage.getItem("Area")) document.getElementById("ingreso").value = sessionStorage.getItem("Area");
			break;
		case 6: 
			
			document.getElementById("btn_empi").className = "boton_seleccionado";				
			document.getElementById("empi").className = "";	
			document.getElementById("tituloTienda").innerHTML = "EMPASTE, PINTURA Y LIJAS";			
			if(sessionStorage.getItem("Area")) document.getElementById("ingreso").value = sessionStorage.getItem("Area");
			break;
	}
}

function calculo(op){
	var area = document.getElementById("ingreso").value;
	
	if(area)
		sessionStorage.setItem("Area", area);
	else
		area = sessionStorage.getItem("Area");		
		
	
	
		
	switch (parseInt(op)){
		case 1:
		var primarios = area * 0.225;
		var secundarios = primarios * 2;
		var num_planchas = area / 2.9;
		var angulo = area * 0.46;
		document.getElementById("cira_primarios").value = redondear(primarios);
		document.getElementById("cira_secundarios").value = redondear(secundarios);
		document.getElementById("cira_angulo").value = redondear(angulo);
		document.getElementById("cira_tor_estructura").value = redondear(secundarios * 10);
		document.getElementById("cira_num_planchas").value = redondear(num_planchas);
		document.getElementById("cira_tor_plancha").value = redondear(num_planchas * 40);
		document.getElementById("cira_masilla").value = redondear(num_planchas / 16);
		document.getElementById("cira_tape").value = redondear(num_planchas / 12);
		document.getElementById("cira_clavo_negro").value = redondear(angulo * 15);
		document.getElementById("cira_clavo_verde").value = redondear(primarios * 4);
		break;
		
		case 2:
		var tamano = document.getElementById("selTamano").value;
		if(tamano)
			sessionStorage.setItem("Tamano", tamano);
		else
			if(sessionStorage.getItem("Tamano"))
				tamano = sessionStorage.getItem("Tamano");
			else
				tamano = 1;		
			
				
		
		var tee12 = area * 0.224;
		var angulo = area * 0.3;
		var planchas = (tamano == 1) ? (area / 0.36) : (area / 0.72);		
		var tee2 = (tamano == 1) ? (area * 1.3455) : 0;		
		document.getElementById("cies_planchas").value = redondear(planchas);
		document.getElementById("cies_tee12").value = redondear(tee12);
		document.getElementById("cies_tee4").value = redondear(area * 1.3455);
		document.getElementById("cies_tee2").value = redondear(tee2);
		document.getElementById("cies_angulo").value = redondear(angulo);
		document.getElementById("cies_alambre").value = redondear(area / 10);
		document.getElementById("cies_cla_impacto").value = redondear(tee12 * 4);
		document.getElementById("cies_cla_negro").value = redondear(angulo * 15);
		break;
		
		case 3:		
		var altura = document.getElementById("altura").value;
		
		if(altura)
			sessionStorage.setItem("Altura", altura);
		else
			altura = sessionStorage.getItem("Altura");		
			
		
		
		if(altura && document.getElementById("ingreso").value){			
			var perimetro = area / altura;
			var planchas = (area * 2)/2.8;
			var stud = perimetro / 0.5;
			var track = (perimetro * 2)/2.2
			document.getElementById("pado_perimetro").value = redondear(perimetro);
			document.getElementById("pado_planchas").value = redondear(planchas);
			document.getElementById("pado_stud").value = redondear(stud);
			document.getElementById("pado_track").value = redondear(track);
			document.getElementById("pado_cla_impacto").value = redondear(track * 6);
			document.getElementById("pado_tor_plancha").value = redondear(planchas * 40);
			document.getElementById("pado_tor_estructura").value = redondear(stud * 10);
			document.getElementById("pado_masilla").value = redondear(planchas / 16);
			document.getElementById("pado_tape").value = redondear(planchas / 12);	
		}
		break;
		
		case 4:
		var altura = document.getElementById("altura").value;
		
		if(altura)
			sessionStorage.setItem("Altura", altura);
		else
			altura = sessionStorage.getItem("Altura");		
			
			
		if(altura && document.getElementById("ingreso").value){
			var perimetro = area / altura;
			var planchas = area/2.8;
			var stud = perimetro / 0.5;
			var track = (perimetro / 2.2)*2
			document.getElementById("pafo_perimetro").value = redondear(perimetro);
			document.getElementById("pafo_planchas").value = redondear(planchas);
			document.getElementById("pafo_stud").value = redondear(stud);
			document.getElementById("pafo_track").value = redondear(track);
			document.getElementById("pafo_cla_impacto").value = redondear(track * 6);
			document.getElementById("pafo_tor_plancha").value = redondear(planchas * 40);
			document.getElementById("pafo_tor_estructura").value = redondear(stud * 10);
			document.getElementById("pafo_masilla").value = redondear(planchas / 16);
			document.getElementById("pafo_tape").value = redondear(planchas / 12);	
		}
		break;
		
		case 5:
		var num_planchas = area / 2.8;
		document.getElementById("fogy_num_planchas").value = redondear(num_planchas);
		document.getElementById("fogy_masilla").value = redondear(num_planchas / 16);
		document.getElementById("fogy_tape").value = redondear(num_planchas / 12);
		document.getElementById("fogy_pegamento").value = redondear(num_planchas / 6);
		break;
		
		case 6:
		document.getElementById("empi_presentacion").value = redondear((area / 20));
		document.getElementById("empi_pintura").value = redondear((area / 25));
		document.getElementById("empi_lijas").value = redondear((area / 20));
		break;
	}
}

function parSuperior(num){
	var resul = parseInt(num.toFixed(0));
			
	if((resul%2) != 0){
		resul += 1;		
	}
	return resul;
}

function validarNumeros(evt) { 
	 var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57) && (charCode < 96 || charCode > 105) && charCode != 110 && charCode != 190)
            return false;
 
         return true;
} 

function redondear(num){
	return (num % 1 == 0) ? num : parseInt(num + 1);
}



/* Programa Principal */
window.onload = function()
{


var opBoton = 1;

if(sessionStorage.getItem("Area")){	
	changeClass(sessionStorage.getItem("Opcion"));
	opBoton = sessionStorage.getItem("Opcion");
	calculo(opBoton);
}

	
document.getElementById("btn_cira").addEventListener( 'click' , function() {
	changeClass(1);
	opBoton = 1;
	sessionStorage.setItem("Opcion", opBoton);
	if(sessionStorage.getItem("Area"))calculo(opBoton);
});
document.getElementById("btn_cies").addEventListener( 'click' , function() {
	changeClass(2);
	opBoton = 2;
	sessionStorage.setItem("Opcion", opBoton);
	if(sessionStorage.getItem("Area"))calculo(opBoton);
});
document.getElementById("btn_pado").addEventListener( 'click' , function() {
	changeClass(3);
	opBoton = 3;
	sessionStorage.setItem("Opcion", opBoton);
	if(sessionStorage.getItem("Area"))calculo(opBoton);
});
document.getElementById("btn_pafo").addEventListener( 'click' , function() {
	changeClass(4);
	opBoton = 4;
	sessionStorage.setItem("Opcion", opBoton);
	if(sessionStorage.getItem("Area"))calculo(opBoton);
});
document.getElementById("btn_fogy").addEventListener( 'click' , function() {
	changeClass(5);
	opBoton = 5;
	sessionStorage.setItem("Opcion", opBoton);
	if(sessionStorage.getItem("Area"))calculo(opBoton);
});
document.getElementById("btn_empi").addEventListener( 'click' , function() {
	changeClass(6);
	opBoton = 6;
	sessionStorage.setItem("Opcion", opBoton);
	if(sessionStorage.getItem("Area"))calculo(opBoton);
});

/* Menu responsive */
document.getElementById("menuResponsive").addEventListener( 'click' , function() {
	if(document.getElementById("botonesSistema").className == "botones"){
		document.getElementById("botonesSistema").className = "botones activo";
	}else{
		document.getElementById("botonesSistema").className = "botones";
	}
	
});

/* calculo de los materiales */
document.getElementById("ingreso").addEventListener( 'keyup' , function() {
	calculo(opBoton);
});
document.getElementById("altura").addEventListener( 'keyup' , function() {
	calculo(opBoton);
});
document.getElementById("selTamano").addEventListener( 'change' , function() {
	if(document.getElementById("ingreso").value){
		calculo(opBoton);
	}
});

	
}

