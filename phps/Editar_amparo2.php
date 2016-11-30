<?php
include ("Logeado.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SafeSolution - Editar Juicio</title>
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

$id=$_GET['id'];
include ("conexionBD.php");
$conexion = crearConexion();




$sql6 = "SELECT * FROM amparos Where id_amparo=$id";
$resultado6 = $conexion -> query($sql6);
$fila6 = mysqli_fetch_object($resultado6);
$resultado6->data_seek(0);



$tribunal = $fila6->tribunal;
$num_amparo = $fila6->num_amparo;
$quejoso = $fila6->quejoso;
$tercero = $fila6->tercero;
$responsable = $fila6->responsable;
$origen = $fila6->origen;
$acto_r = $fila6->acto_r;
$anotaciones = $fila6->anotaciones;
$centencia = $fila6->centencia;
$pendiente = $fila6->pendiente;

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
      <form class="col s12" action="Actualizar_amparo.php" method="POST">
        <div class="card-panel z-depth-5">
          <h4 align="center">Editar Amparo</h4><br><br>
          
                  <div class="row">
            <div class="col s12 m4 l4">
              <i class="material-icons prefix">person</i><label for="icon_prefix2"><strong> T/J:</strong></label><input type="text" value="<?php print $tribunal; ?>" id="tribunal" required="No puedes dejar ningun campo vacio" name="tribunal"  class="validate" length="30">
          </div>
          <div class="col s12 m4 l4"><i class="material-icons prefix">account_balance</i><label for="icon_prefix2"><strong>No. Amparo:</strong></label><input type="text" value="<?php print $num_amparo; ?>" id="num_amparo" required="No puedes dejar ningun campo vacio" name="num_amparo"  class="validate" length="30">
      </div>
      <div class="col s12 m4 l4">
        <i class="material-icons prefix">explicit</i><label for="icon_prefix2"><strong>Quejoso:</strong></label><input type="text" value="<?php print $quejoso; ?>" id="quejoso" required="No puedes dejar ningun campo vacio" name="quejoso"   class="validate" length="30">
      </div>
    </div>
    <div class="row">
      <div class="col s12  m6">
        <i class="material-icons prefix">account_box</i><label for="icon_prefix2"><strong>Tercero:</strong></label><input type="text" value="<?php print $tercero; ?>" id="tercero" required="No puedes dejar ningun campo vacio" name="tercero"  class="validate" length="30">
      </div>
        
         <div class="col s12  m6">
        <i class="material-icons prefix">feedback</i><label for="icon_prefix2"><strong>Responsable:</strong></label><input type="text" value="<?php print $responsable; ?>" id="responsable" required="No puedes dejar ningun campo vacio" name="responsable"  class="validate" length="30">
      </div>

    </div>

    <div class="row">
      <div class="col s12 m4 l4"><i class="material-icons prefix">event_note</i><label for="icon_prefix2"><strong>Origen:</strong></label><input type="text" value="<?php print $origen; ?>" required="" id="origen" name="origen" length="30">
    </div>
    <div class="col s12 m4 l4"><i class="material-icons prefix">monetization_on</i><label for="icon_prefix2"><strong>Acto R.:</strong></label><input type="text" value="<?php print $acto_r; ?>" id="acto_r" required="No puedes dejar ningun campo vacio"  name="acto_r" class="validate" length="30">
  </div>
  <div class="col s12 m4 l4"><i class="material-icons prefix">face</i><label for="icon_prefix2"><strong>Anotaciones:</strong></label><textarea name="anotaciones" id="anotaciones" class="validate"  length="100" ><?php print $anotaciones; ?></textarea>
</div>
</div>

<div class="row">
  
  <div class="col s12  m6 ">
        <i class="material-icons prefix">visibility</i><label for="icon_prefix2"><strong>Centencias:</strong></label><input type="text" value="<?php print $centencia; ?>" id="centencia" required="No puedes dejar ningun campo vacio"  name="centencia" class="validate" length="30">
      </div>
      <div class="col s12  m6 ">
        <i class="material-icons prefix">visibility</i><label for="icon_prefix2"><strong>Pendiente:</strong></label><input type="text" value="<?php print $pendiente; ?>" id="pendiente" required="No puedes dejar ningun campo vacio"  name="pendiente" class="validate" length="30"><input type="hidden" id="id" value="<?php print $id; ?>"  name="id" class="validate">
      </div>
  
</div><br>
    <hr>
    <h4 align="center">Agendar Evento o Cita</h4><br>
    <div class="row">
            <div class="col s12 m6"><i class="material-icons prefix">event</i><label for="icon_prefix2"><strong>Agendar Cita o Evento:</strong></label><input type="date" required="" id="fecha_agenda" name="fecha_agenda"  class="datepicker">
            </div>
          <div class="col s12 m6">
          <i class="material-icons prefix">visibility</i><label for="icon_prefix2"><strong>Descripcion de Cita o Evento:</strong></label><textarea name="decr_eve" id="decr_eve" class="validate"  length="20" ></textarea>
        </div>
    </div>

   <div class="row">
          
    <div class="col s12 m4 l4"><i class="material-icons prefix">access_time</i><label for="icon_prefix2"><strong>Hora:</strong></label><select id="hora" name="hora" >
    <option value="" disabled selected>00</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>     
      
  </select>
</div>
                <div class="col s12 m4 l4"><i class="material-icons prefix">timer_10</i><label for="icon_prefix2"><strong>Min:</strong></label><select id="min" name="min" >
    <option value="" disabled selected>00</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>     
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="21">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      <option value="32">32</option>     
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="41">41</option>
      <option value="42">42</option>
      <option value="43">43</option>
      <option value="44">44</option>
      <option value="45">45</option>
      <option value="46">46</option>
      <option value="47">47</option>
      <option value="48">48</option>
      <option value="49">49</option>
      <option value="50">50</option>
      <option value="51">51</option>
      <option value="52">52</option>     
      <option value="53">53</option>
      <option value="54">54</option>
      <option value="55">55</option>
      <option value="56">56</option>
      <option value="57">57</option>
      <option value="58">58</option>
      <option value="59">59</option>

  </select>
</div>
               <div class="col s12 m4 l4"><i class="material-icons prefix">brightness_medium</i><label for="icon_prefix2"><strong>AM/PM:</strong></label><select id="tipocita" name="tipocita">
    <option value="" disabled selected>AM/PM</option>
      <option value="AM">AM</option>
      <option value="PM">PM</option>
  </select>
</div>
      </div>


    <div class="row">
      <div class="col s12 m4 l4">
        <!-- Colonia, Calle y Numero -->
        <button class="btn waves-effect waves-light input-field col s12" type="submit" name="submit" value="Actualizar">Actualizar
        <i class="material-icons right">update</i>
        </button>
      </div>
      <div class="col s12 m4 l4">
        <button class="btn waves-effect waves-light input-field col s12" type="submit" name="submit" value="Eliminar">Eliminar
        <i class="material-icons right">delete_forever</i>
        </button>
      </div>
      <div class="col s12 m4 l4">
        <button class="btn waves-effect waves-light input-field col s12" type="button" name="action"  onclick = "redireccionar1()">Cancelar
        <i class="material-icons right">cancel</i>
        </button>
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