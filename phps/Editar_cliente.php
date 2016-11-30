<?php
include ("Logeado.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SafeSolution - Editar Cliente</title>
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

$id=$_POST['id'];



include ("conexionBD.php");
$conexion = crearConexion();


$sqll = "SELECT * FROM Clientes Where id_cliente=$id";
$resultado = $conexion -> query($sqll);
$fila = mysqli_fetch_object($resultado);
$resultado->data_seek(0);

$nombree = $fila->nombres;
$apellidos = $fila->apellidos;
$telefono = $fila->telefono;
$colonia = $fila->colonia;
$calle = $fila->calle;
$numero = $fila->numero;
$email = $fila->email;
$opciones = $fila->opciones;
$fecha_registro = $fila->fecha_registro;
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
      <form class="col s12" action="Actualizar_clientes.php" method="POST">
        <div class="card-panel z-depth-5">
          
          <h4 align="center">Editar Cliente</h4><br><br>
          <div class="row">
            <div class="col s12 m4 l4">
              <!-- Nombres, Apellidos y Telefono -->
              <i class="material-icons prefix">person</i><label><strong>Nombre(s) del Cliente</strong></label><input type="text" id="nombres" value="<?php print $nombree; ?>"  name="nombres" class="validate" length="20">
            </div>
            <div class="col s12 m4 l4"><i class="material-icons prefix">person_outline</i><label for="icon_prefix2"><strong>Apellido(s) del Cliente</strong></label><input type="text" id="apellidos" value="<?php print $apellidos; ?>"  name="apellidos" class="validate" length="20">
          </div><strong>
          <div class="col s12 m4 l4"><i class="material-icons prefix">local_phone</i><label for="icon_prefix2"><strong>Telefono</strong></label><input type="text" id="telefono" value="<?php print $telefono; ?>"  name="telefono" class="validate" length="15">
        </div>
      </div>
      <div class="row">
        <div class="col s12 m4 l4">
          <!-- Colonia, Calle y Numero -->
          <i class="material-icons prefix">add_location</i><label for="icon_prefix2"><strong>Colonia:</strong></label><input type="text" id="colonia" value="<?php print $colonia; ?>"  name="colonia" class="validate" length="30">
        </div>
        <div class="col s12 m4 l4"><i class="material-icons prefix">place</i><label for="icon_prefix2"><strong>Calle:</strong></label><input type="text" id="calle" value="<?php print $calle; ?>"  name="calle" class="validate" length="30">
      </div>
      <div class="col s12 m4 l4"><i class="material-icons prefix">filter_9_plus</i><label for="icon_prefix2"><strong>Numero de Domicilio:</strong></label><input type="text" id="numero" value="<?php print $numero; ?>"  name="numero" class="validate" length="5">
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <!-- Email, Tipo de Juicio (Select) y Fecha de registro -->
      <i class="material-icons prefix">mail</i><label for="icon_prefix2"><strong>E-mail</strong></label><input type="email" id="email" value="<?php print $email; ?>"  name="email" class="validate" length="50"><input type="hidden" id="id" value="<?php print $id; ?>"  name="id" class="validate">
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

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript">
$(".button-collapse").sideNav();
$(document).ready(function() {
$('select').material_select();
});
$('select').material_select('destroy');
$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal-trigger').leanModal();
});
function redireccionar1(){
document.location.href='listado_clientes.php'
}
</script>
</body>
</html>