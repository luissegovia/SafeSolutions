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



/*Funciones para la busqueda de Amparos*/
function Buscar_Tribunal(){
	divResultado = document.getElementById('muestra_resultado');
	var tribunaal=document.busqueda_tribunal.tribunal.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_tribunaal.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampo();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("tribunal="+tribunaal);
}


function LimpiarCampo(){
	document.busqueda_tribunal.tribunal.value="";
	document.busqueda_tribunal.tribunal.focus();
}


function Buscar_Amparo(){
	divResultado = document.getElementById('muestra_resultadoo');
	var amparoo=document.busqueda_amparo.amparo.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_amparoo.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampoo();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("amparo="+amparoo);
}


function LimpiarCampoo(){
	document.busqueda_amparo.amparo.value="";
	document.busqueda_amparo.amparo.focus();
}

function Buscar_Quejoso(){
	divResultado = document.getElementById('muestra_resultadooo');
	var quejosoo=document.busqueda_quejoso.quejoso.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_quejosoo.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampooo();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("quejoso="+quejosoo);
}


function LimpiarCampooo(){
	document.busqueda_quejoso.quejoso.value="";
	document.busqueda_quejoso.quejoso.focus();
}

function Buscar_tercero(){
	divResultado = document.getElementById('muestra_resultadoooo');
	var terceroo=document.busqueda_tercero.tercero.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_terceroo.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampoooo();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("tercero="+terceroo);
}


function LimpiarCampoooo(){
	document.busqueda_tercero.tercero.value="";
	document.busqueda_tercero.tercero.focus();
}


function Buscar_Responsable(){
	divResultado = document.getElementById('muestra_resultadooooo');
	var responsablee=document.busqueda_responsable.resp.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_responsablee.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampooooo();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("resp="+responsablee);
}


function LimpiarCampooooo(){
	document.busqueda_responsable.resp.value="";
	document.busqueda_responsable.resp.focus();
}

function Buscar_Acto(){
	divResultado = document.getElementById('muestra_resultadoooooo');
	var actoo=document.busqueda_acto.acto_r.value;
	ajax=objetoAjax();
	ajax.open("POST", "../phps/busqueda_actoo.php",true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4 && ajax.status==200) {
	divResultado.innerHTML = ajax.responseText;
	LimpiarCampoooooo();
	}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("acto_r="+actoo);
}


function LimpiarCampooooooo(){
	document.busqueda_acto.acto_r.value="";
	document.busqueda_acto.acto_r.focus();
}
