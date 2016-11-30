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


function Buscar_Cliente(){
	divResultado = document.getElementById('muestra_resultados');
	var nombre=document.busqueda_nombre.nom.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_nombre.php",true);
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


function Buscar_Colonia(){
	divResultado = document.getElementById('muestra_resultadoss');
	var colonia=document.busqueda_colonia.col.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_colonia.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCamposs();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("col="+colonia);
}


function LimpiarCamposs(){
	document.busqueda_colonia.col.value="";
	document.busqueda_colonia.col.focus();
}

function Buscar_Demanda(){
	divResultado = document.getElementById('muestra_resultadosss');
	var demanda=document.busqueda_demanda.opc.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_demanda.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCamposss();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("opc="+demanda);
}


function LimpiarCamposss(){
	document.busqueda_demanda.opc.value="";
	document.busqueda_demanda.opc.focus();
}

function Buscar_Email(){
	divResultado = document.getElementById('muestra_resultadossss');
	var email=document.busqueda_email.email.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_email.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampossss();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("email="+email);
}


function LimpiarCampossss(){
	document.busqueda_email.email.value="";
	document.busqueda_email.email.focus();
}