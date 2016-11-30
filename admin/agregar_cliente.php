<?php
error_reporting(0);
include ("Logeado.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SafeSolution - Agregar Cliente</title>
    <link rel="shortcut icon" href="../images/favicon.ico">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <!-- Import Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body class="grey lighten-2">
    
    <!-- Page Content goes here -->
    <!-- Navbar goes here -->
<nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><img  src="../images/Safe(1).png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
         
          <li><a class="dropdown-button" href="#!" data-activates="dropdown5"><i class="material-icons right">arrow_drop_down</i>Links Externos<i class="material-icons right">open_in_browser</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons right">arrow_drop_down</i>Juicios<i class="material-icons right">account_balance</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i>Clientes<i class="material-icons right">contact_phone</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown6"><i class="material-icons right">arrow_drop_down</i>Usuarios<i class="material-icons right">supervisor_account</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown3"><i class="material-icons right">arrow_drop_down</i>Menu<i class="material-icons right">settings</i></a></li>
        </ul>
        <ul class="side-nav " id="mobile-demo">
          <li><a class="subheader">Links Externos</a></li>
          <li><a class="waves-effect modal-trigger" href="#modal1"><i class="material-icons left">open_in_browser</i>Conciliacion Y Arbitraje</a></li>
          <li><a class="waves-effect modal-trigger" href="#modal2"><i class="material-icons left">open_in_browser</i>Consejo Federal</a></li>
          <li><a class="waves-effect modal-trigger" href="#modal3"><i class="material-icons left">open_in_browser</i>Tribunal Virtual</a></li>
          <li><div class="divider"></div></li>
          <li><a class="subheader">Juicios</a></li>
          <li><a class="waves-effect" href="add_juicio.php">Agregar Juicio</a></li>
          <li><a class="waves-effect" href="add_amparo.php">Agregar Amparo</a></li>
          <li><div class="divider"></div></li>
          <li><a class="subheader">Clientes</a></li>
          <li><a class="waves-effect" href="listado_clientes.php">Listar Clientes</a></li>
          <li><a class="waves-effect" href="agregar_cliente.php">Agregar Clientes</a></li>
          <li><div class="divider"></div></li>
          <li><a class="subheader">Usuarios</a></li>
          <li><a class="waves-effect" href="list_users.php">Listar Usuarios</a></li>
          <li><a class="waves-effect" href="agregar_users.php">Agregar Usuario</a></li>
          <li><div class="divider"></div></li>
          <li><a class="subheader">Menu</a></li>
          <li><a class="waves-effect" href="principal.php">Home</a></li>
          <li><a class="waves-effect" href="agenda.php">Agenda SafeSoluions</a></li>
          <li><a class="waves-effect" href="cerrar_sesion.php">Cerrar Sesion</a></li>
          
          
        </ul>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="listado_clientes.php"><i class="material-icons left">list</i>Clientes</a></li>
          <li class="divider"></li>
          <li><a href="agregar_cliente.php"><i class="material-icons left">person_add</i> Clientes</a></li>
        </ul>
        <ul id="dropdown3" class="dropdown-content">
          <li><a href="principal.php"><i class="material-icons left">home</i>Home</a></li>
          <li class="divider"></li>
          <li><a href="agenda.php"><i class="material-icons left">today</i>Agenda</a></li>
          <li class="divider"></li>
          <li><a href="cerrar_sesion.php"><i class="material-icons left">cancel</i>Sesion</a></li>
        </ul>
        <ul id="dropdown4" class="dropdown-content">
          <li><a href="filtro_clientes.php"><i class="material-icons left">person</i>Clientes</a></li>
          <li class="divider"></li>
          <li><a href="filtro_juicios.php"><i class="material-icons left">gavel</i>Juicios</a></li>
        </ul>
        <ul id="dropdown5" class="dropdown-content">
          <li><a class="modal-trigger" href="#modal1"><i class="material-icons left">open_in_browser</i> Con. Y Arbitraje</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal2"><i class="material-icons left">open_in_browser</i> Consejo Federal</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal3"><i class="material-icons left">open_in_browser</i> Tribunal Virtual</a></li>
        </ul>

  <ul id="dropdown6" class="dropdown-content">
          <li><a href="list_users.php"><i class="material-icons left">list</i>Usuarios</a></li>
          <li class="divider"></li>
          <li><a href="agregar_users.php"><i class="material-icons left">person_add</i>Usuarios</a></li>
        </ul>

        <ul id="dropdown2" class="dropdown-content">
          <li><a href="add_juicio.php"><i class="material-icons left">add_circle</i>Jucio</a></li>
          <li><a href="add_amparo.php"><i class="material-icons left">add_circle</i>Amparo</a></li>
          <li class="divider"></li>
          
        </ul>

      </div>
    </nav>
    
    
    
    <br><br>
    
    
    <div class="row">
      <form class="col s12" action="form_addclientes.php" method="POST">
        <div class="card-panel z-depth-5">
          <h4 align="center">Agregar un nuevo Cliente</h4><br><br>
          
          <div class="row">
            <div class="col s12 m4 l4">
              <!-- Nombres, Apellidos y Telefono -->
              <i class="material-icons prefix">person</i><label><strong>Nombre(s) del Cliente</strong></label><input type="text" id="nombres" required="No puedes dejar ningun campo vacio" name="nombres" class="validate" length="20">
            </div>
            <div class="col s12 m4 l4"><i class="material-icons prefix">person_outline</i><label for="icon_prefix2"><strong>Apellido(s) del Cliente</strong></label><input type="text" required="No puedes dejar ningun campo vacio" id="apellidos"  name="apellidos" class="validate" length="20">
          </div><strong>
          <div class="col s12 m4 l4"><i class="material-icons prefix">local_phone</i><label for="icon_prefix2"><strong>Telefono</strong></label><input type="text" id="telefono" pattern="[0-9]{1,15}" title="Formato de telefono: 811451245 o 11684697. Solo se deben poner numeros y un maximo de 15 digitos"  name="telefono" class="validate" length="15">
        </div>
      </div>
      <div class="row">
        <div class="col s12 m4 l4">
          <!-- Colonia, Calle y Numero -->
          <i class="material-icons prefix">add_location</i><label for="icon_prefix2"><strong>Colonia:</strong></label><input type="text" id="colonia"  name="colonia" class="validate" length="20">
        </div>
        <div class="col s12 m4 l4"><i class="material-icons prefix">place</i><label for="icon_prefix2"><strong>Calle:</strong></label><input type="text" id="calle"  name="calle" class="validate" length="20">
      </div>
      <div class="col s12 m4 l4"><i class="material-icons prefix">filter_9_plus</i><label for="icon_prefix2"><strong>Numero de Domicilio:</strong></label><input type="text" id="numero"  name="numero" class="validate" length="5">
    </div>
  </div>
  <div class="row">
    <div class="col s12 m4 l4">
      <!-- Email, Tipo de Juicio (Select) y Fecha de registro -->
      <i class="material-icons prefix">mail</i><label for="icon_prefix2"><strong>E-mail</strong></label><input type="email" id="email"  name="email" class="validate" length="50">
    </div>
    <div class="col s12 m4 l4"><i class="material-icons prefix">gavel</i><label for="icon_prefix2"><strong>Seleccionar Tipo de Demanda:</strong></label><select id="opciones" name="opciones" >
    <option value="" disabled selected>Seleccione una</option>
    <optgroup label="Seguridad Social">
      <option value="Otorgamiento de Cesantia">Otorgamiento de Cesantia</option>
      <option value="Otorgamiento de Invalidez">Otorgamiento de Invalidez</option>
      <option value="Otorgamiento de Vejez">Otorgamiento de Vejez</option>
      <option value="Otorgamiento de IPP">Otorgamiento de IPP</option>
      <option value="Otorgamiento de Viudez">Otorgamiento de Viudez</option>
      <option value="Otorgamiento de Orfandad">Otorgamiento de Orfandad</option>
      <option value="Otorgamiento de Ascendencia">Otorgamiento de Ascendencia</option>
      <option value="Pago correcto de Cesantia">Pago correcto de Cesantia</option>
      <option value="Pago correcto de Invalidez">Pago correcto de Invalidez</option>
      <option value="Pago correcto de Vejez">Pago correcto de Vejez</option>
      <option value="Pago correcto de IPP">Pago correcto de IPP</option>
      <option value="Pago correcto de Viudez">Pago correcto de Viudez</option>
      <option value="Pago correcto de Orfandad">Pago correcto de Orfandad</option>
      <option value="Pago correcto de Ascendencia">Pago correcto de Ascendencia</option>
      <option value="Reconocimiento de Antiguedad">Reconocimiento de Antiguedad</option>
      <option value="Emanaciones Radioactivas">Emanaciones Radioactivas</option>
    </optgroup>
    <optgroup label="Ramos">
      <option value="Civil">Civil</option>
      <option value="Familiar">Familiar</option>
      <option value="Mercantil">Mercantil</option>
      <option value="Juicio Laboral Local">Juicio Laboral Local</option>
      <option value="Administrativo">Administrativo</option>
    </optgroup>
  </select>
</div>
<div class="col s12 m4 l4"><i class="material-icons prefix">today</i><label for="icon_prefix2"><strong>Fecha de Registro:</strong></label><input type="date"  id="fecha_registro" name="fecha_registro"  class="datepicker">
</div>
</div>
<div class="row">
<div class="col s12 m6 l3"></div>
<div class="col s12 m6 l3"><button class="btn waves-effect waves-light input-field col s12" type="submit" name="action">Guardar
<i class="material-icons right">save</i>
</button></div>
<div class="col s12 m6 l3"> <button class="btn waves-effect waves-light input-field col s12" type="button"  onclick = "redireccionar1()">CANCELAR
<i class="material-icons right">backspace</i>
</button></div>
<div class="col s12 m6 l3"></div>
</div>
</div>
</form>
</div>
 <!--Modal De Concialiacion Y Arbitraje-->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <iframe id="iframe" src="http://consultasjfca.stps.gob.mx:209/consulta_edoproc/consultaexpedientes.aspx"></iframe>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
      </div>
    </div>

    <!--Modal De pagina2-->
    <div id="modal2" class="modal modal-fixed-footer">
      <div class="modal-content">
        <iframe id="iframe" src="http://www.dgepj.cjf.gob.mx/paginas/serviciosTramites.htm?pageName=servicios%2Fexpedientes.htm"></iframe>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
      </div>
    </div>

    <!--Modal De Pagina3-->
    <div id="modal3" class="modal modal-fixed-footer">
      <div class="modal-content">
        <iframe id="iframe" src="https://tribunalvirtual.pjenl.gob.mx/tv20/Login.aspx"></iframe>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
      </div>
    </div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript">
$(".button-collapse").sideNav();
$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 20, // Creates a dropdown of 15 years to control year
today: 'Hoy',
clear: 'Borrar',
close: 'Cerrar',
monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
monthsShort: ['Jun', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
weekdaysShort: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
showMonthsShort: true,
formatSubmit: 'yyyy/mm/dd',
hiddenName: true
});
$(document).ready(function() {
$('select').material_select();
});
$('select').material_select('destroy');
$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal-trigger').leanModal();
});
function redireccionar1(){
document.location.href='principal.php'
}
</script>
</body>
</html>