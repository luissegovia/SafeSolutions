<?php
include ("Logeado.php");
?>

<?php
error_reporting(0);
include ("conexionBD.php");
$conexion = crearConexion();

$sqll = "SELECT * FROM clientes order by nombres asc";
$resultado = $conexion -> query($sqll);
$fila = mysqli_fetch_object($resultado);
$resultado->data_seek(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SafeSolution - Agregar Juicio</title>
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
<?php

?>
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
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="add_juicio.php"><i class="material-icons left">add_circle</i>Jucio</a></li>
          <li><a href="add_amparo.php"><i class="material-icons left">add_circle</i>Amparo</a></li>
          <li class="divider"></li>
          
        </ul>

      </div>
    </nav>
    
    
    
    <br><br>
    
    
    <div class="row">
      <form class="col s12" action="juicios.php" method="POST">
        <div class="card-panel z-depth-5">

        <h4 align="center">Agregar un nuevo Juicio</h4><br><br>
          
          <div class="row">
            <div class="col s12 m4 l4">
              <i class="material-icons prefix">person</i><label for="icon_prefix2"><strong> Nombre Del Cliente:</strong></label><select class="js-example-basic-single" style="width:75%"  id="nom_cliente" name="nom_cliente" required="No puedes dejar ningun campo vacio">
              <option value="" disabled selected>Seleccione una</option>
              <?php
              while($fila = mysqli_fetch_object($resultado)) {
              echo " <option value=$fila->id_cliente>$fila->nombres $fila->apellidos</option>";
              }
              ?>
            </select>
          </div>
          <div class="col s12 m4 l4"><i class="material-icons prefix">account_balance</i><label for="icon_prefix2"><strong>Tipo de Junta:</strong></label><select id="tipo_junta" name="tipo_junta" required="No puedes dejar ningun campo vacio">
          <option value="" disabled selected>Seleccione una</option>
          <optgroup label="Tipo de Junta:">
            <option value="JF 20">JF 20</option>
            <option value="JF 19">JF 19</option>
            <option value="Junta Local">Junta Local</option>
            <option value="Civil">Civil</option>
            <option value="Foranea">Foranea</option>
          </optgroup>
        </select>
      </div>
      <div class="col s12 m4 l4">
        <i class="material-icons prefix">explicit</i><label for="icon_prefix2"><strong>Numero de Expediente:</strong></label><input type="text" id="num_expediente" required="No puedes dejar ningun campo vacio" name="num_expediente" class="validate" length="12">
      </div>
    </div>
    <div class="row">
      <div class="col s12  m6">
        <i class="material-icons prefix">account_box</i><label for="icon_prefix2"><strong>Nombre del Contrario:</strong></label><input type="text" id="nom_contrario" required="No puedes dejar ningun campo vacio" name="nom_contrario" pattern="[a-zA-Z ]{1,30}" title="Formato de Nombre de Contrario: Fulanito Gonzalez Perez" class="validate" length="30">
      </div>
        
         <div class="col s12  m6">
        <i class="material-icons prefix">feedback</i><label for="icon_prefix2"><strong>Estado Procesal:</strong></label><select id="estado_procesal" name="estado_procesal" required="No puedes dejar ningun campo vacio">
            <option value="Demanda Presentada">Demanda Presentada</option>
        </select>
      </div>

    </div>

    <div class="row">
      <div class="col s12 m4 l4"><i class="material-icons prefix">event_note</i><label for="icon_prefix2"><strong>Fecha de Presentacion de Demanda:</strong></label><input type="date" required="" id="fecha_demanda" name="fecha_demanda"  class="datepicker">
    </div>
    <div class="col s12 m4 l4"><i class="material-icons prefix">monetization_on</i><label for="icon_prefix2"><strong>Anticipo:</strong></label><input type="text" id="anticipo" required="No puedes dejar ningun campo vacio" pattern="[0-9]{2,5}" title="Formato de Anticipo: 50,500,5000,50000" name="anticipo" class="validate" length="5">
  </div>
  <div class="col s12 m4 l4"><i class="material-icons prefix">face</i><label for="icon_prefix2"><strong>Vendedor:</strong></label><select id="vendedor" name="vendedor" required="No puedes dejar ningun campo vacio">
  <option value="Ninguno" selected>Ninguno</option>
  <optgroup label="Vendedor">
    <option value="INAPAM">INAPAM</option>
    <option value="Jonathan">Jonathan</option>
    <option value="Daniel">Daniel</option>
    <option value="Nelida">Nelida</option>
    <option value="Chuy">Chuy</option>
    <option value="Manuel">Manuel</option>
    <option value="Fernando">Fernando</option>
    <option value="Julian">Julian</option>
    <option value="Miriam">Miriam</option>
    <option value="Abys">Abys</option>
    <option value="Gladys">Gladys</option>
    <option value="Publicidad">Publicidad</option>
    <option value="Otro">Otro</option>
  </optgroup>
</select>
</div>
</div>
      <div class="col s12 ">
        <i class="material-icons prefix">visibility</i><label for="icon_prefix2"><strong>Observaciones Iniciales:</strong></label><textarea id="obs_iniciales" name="obs_iniciales" required="No puedes dejar ningun campo vacio" pattern="[a-zA-Z ,.]" title="Escribe cualquier texto que no sobrepase las 500 Letras" class="materialize-textarea" length="500"></textarea>
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
<link href="../css/select2.css" rel="stylesheet" />
<script src="../js/select2.min.js"></script>
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
$(".js-example-basic-single").select2();
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