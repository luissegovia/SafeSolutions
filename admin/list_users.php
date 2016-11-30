<?php
include ("Logeado.php");
?>
<?php
include ("conexionBD.php");
error_reporting(0);
$conexion = crearConexion();

$sqll = "SELECT * FROM users order by nom_usuario asc";
$resultado = $conexion -> query($sqll);
$fila = mysqli_fetch_object($resultado);
$resultado->data_seek(0);

?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Etiqueta meta para que me reconozca acentos y otros caracteres especiales-->
    <meta charset="utf-8" />
    <title>SafeSolution - Usuarios</title>
    <link rel="shortcut icon" href="../images/favicon.ico">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <!-- Import Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/><script src="../js/busqueda_nombre.js"></script>
    <script src="../js/busquedas_ajax.js"></script>
    <script src="../js/jquery-latest.js"></script>
    <script src="../js/jquery.tablesorter.js"></script>
    <!-- Libreria de Angular, para realizar los Filtros mas facil-->
    <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  </head>
  <body class="grey transparent">

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
    <h4 align="center">Listado de Usuarios</h4>
    <div class="row">
      <div class="col s12 m4 l3"></div>
      <div class="col s12 m4 l3"></div>
      <div class="col s12 m4 l3"><p></div>
    </div><br>
    
    <table id="demo" class="responsive-table">
      <thead  >
        <tr >
          <th align="center" data-field="id">Nombre del Usuario</th>
          <th align="center" data-field="name">Usuario</th>
          <th align="center" data-field="price">Password</th>
          <th align="center" data-field="id">Tipo de usuario</th>
        </tr>
      </thead>
      <tbody >
        <?php while($fila = mysqli_fetch_object($resultado)) { ?>
        
        <tr>
          <form action="Editar_User.php" method="POST">
            <td  align=center> <?php  print $fila->nom_usuario; ?></td>
            <td  align="center"><?php  print $fila->user; ?></td>
            <td  align="center"><?php  print $fila->password; ?></td>
            <td  align="center"><?php  print $fila->tipo_usuario; ?></td>
            <td scope="column" align="center"><input type="hidden" name="id" value="<?php print $fila->id_user; ?>"><button type='submit' name='submit' class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">mode_edit</i></button></td>
          </form>
        </tr>
        <?php
        }
        ?>
        
      </tbody>
    </table>
    
    



 <!--Modal De Concialiacion Y Arbitraje-->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <iframe id="iframe" src="http://consultasjfca.stps.gob.mx:209/consulta_edoproc/consultaexpedientes.aspx"></iframe>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
      </div>
    </div>

    <!--Modal De Consejo Federal-->
    <div id="modal2" class="modal modal-fixed-footer">
      <div class="modal-content">
        <iframe id="iframe" src="http://www.dgepj.cjf.gob.mx/paginas/serviciosTramites.htm?pageName=servicios%2Fexpedientes.htm"></iframe>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
      </div>
    </div>

    <!--Modal De Tribunal Virtual-->
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
<script type="text/javascript" src="../js/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
$(".button-collapse").sideNav();
$(document).ready(function() {
$("#demo").tablesorter();
}
);
$(document).ready(function() {
$('select').material_select();
});
$('select').material_select('destroy');
$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal-trigger').leanModal();
});
</script>
</body>
</html>