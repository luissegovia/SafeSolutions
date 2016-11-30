<?php
include ("Logeado.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SafeSolution - Editar Usuario</title>
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


$sqll = "SELECT * FROM users Where id_user=$id";
$resultado = $conexion -> query($sqll);
$fila = mysqli_fetch_object($resultado);
$resultado->data_seek(0);

$id_user = $fila->id_user;
$nom_usuario = $fila->nom_usuario;
$user = $fila->user;
$password = $fila->password;
$tipo_usuario = $fila->tipo_usuario;
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
      <form class="col s12" action="Actualizar_Usuarios.php" method="POST">
        <div class="card-panel z-depth-5">
          
          <h4 align="center">Editar Usuario</h4><br><br>
        <div class="row">
        <div class="col s12  m6">
          <i class="material-icons prefix">person_pin</i><label for="icon_prefix2"><strong>Nombre del Usuario:</strong></label><input type="text" id="nom_usuario" name="nom_usuario" value="<?php print $nom_usuario; ?>"  class="validate" length="500">
        </div>
        
        <div class="col s12  m6">
          <i class="material-icons prefix">perm_identity</i><label for="icon_prefix2"><strong>Usuario:</strong></label><input type="text" id="user" name="user" value="<?php print $user; ?>"  class="validate" length="500">
        </div>


      <div class="row">
        <div class="col s12  m6">
          <i class="material-icons prefix">lock</i><label for="icon_prefix2"><strong>Password:</strong></label><input type="text" id="password" name="password" value="<?php print $password; ?>"  class="validate" length="500">
        </div>
        
        <div class="col s12  m6">
          <i class="material-icons prefix">help</i><label for="icon_prefix2"><strong>Tipo de Usuario:</strong></label><select id="tipo_usuario" name="tipo_usuario" required="No puedes dejar ningun campo vacio">
          <optgroup label="Tipo de usuario Actual:">
            <option select value="<?php print $tipo_usuario; ?>"><?php print $tipo_usuario; ?></option>
          </optgroup>
          <optgroup label="Opciones:">
            <option value="Administrador">Administrador</option>
            <option value="Empleado">Empleado</option>
          </optgroup>
        </select><input type="hidden" id="id" value="<?php print $id_user; ?>"  name="id" class="validate">
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
document.location.href='list_users.php'
}
</script>
</body>
</html>