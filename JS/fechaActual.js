function horaActual(){
	var hoy = new Date();
	var fecha = ""+hoy.getDate()+"/";
		fecha += (hoy.getMonth()+1)+"/";
		fecha += hoy.getFullYear()+"  ";
	var hora = hoy.getHours();
		hora += ":"+hoy.getMinutes();
		hora += ":"+hoy.getSeconds();
	document.getElementById('fechaActual').innerHTML = fecha + ' ' + hora;
	setTimeout('horaActual()', 1000);
}

function fechaActual(){
	var meses = Array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
	var hoy = new Date();
	var fechaActual = hoy.getDate() + " de ";
		fechaActual += meses[hoy.getMonth()];
		fechaActual += " del " + hoy.getFullYear();
	document.getElementById('fechaCompleta').innerHTML = fechaActual;
	setTimeout('fechaActual()', 1000);
}