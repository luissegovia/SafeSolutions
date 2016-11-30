function objetoAjax(){
	var xmlhttp=false;
	try {
	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	try {
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
	xmlhttp = false;
	}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}


/*funcion del 1er Modal*/
function Buscar_Cliente(){
	divResultado = document.getElementById('muestra_resultados');
	var nombre=document.busqueda_nombre.nom.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_nombre_juicio.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampos();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("nom="+nombre);
}


function LimpiarCampos(){
	document.busqueda_nombre.nom.value="";
	document.busqueda_nombre.nom.focus();
}


/*funcion del 2do Modal*/
function Buscar_Junta(){
	divResultado = document.getElementById('muestra_resultadoss');
	var junta=document.busqueda_junta.jun.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_junta.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCamposs();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("jun="+junta);
}


function LimpiarCamposs(){
	document.busqueda_junta.jun.value="";
	document.busqueda_junta.jun.focus();
}

/*funcion del 3ro Modal*/
function Buscar_Expediente(){
	divResultado = document.getElementById('muestra_resultadosss');
	var expediente=document.busqueda_expediente.exp.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_expediente.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCamposss();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("exp="+expediente);
}


function LimpiarCamposss(){
	document.busqueda_expediente.exp.value="";
	document.busqueda_expediente.exp.focus();
}


/*funcion del 4to Modal*/
function Buscar_Demanda(){
	divResultado = document.getElementById('muestra_resultadossss');
	var demanda=document.busqueda_demanda.dem.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_demanda_juicio.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampossss();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("dem="+demanda);
}


function LimpiarCampossss(){
	document.busqueda_demanda.dem.value="";
	document.busqueda_demanda.dem.focus();
}


/*funcion del 5to Modal*/
function Buscar_Estado(){
	divResultado = document.getElementById('muestra_resultadosssss');
	var estado=document.busqueda_estado.est.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_estado.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCamposssss();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("est="+estado);
}


function LimpiarCamposssss(){
	document.busqueda_estado.est.value="";
	document.busqueda_estado.est.focus();
}

/*funcion del 6to Modal*/
function Buscar_Fecha_Demanda(){
	divResultado = document.getElementById('muestra_resultadossssss');
	var fecha=document.busqueda_fecha.fech.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_fecha.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampossssss();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("fech="+fecha);
}


function LimpiarCampossssss(){
	document.busqueda_fecha.fech.value="";
	document.busqueda_fecha.fech.focus();
}


