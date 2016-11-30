<?php
include ("Logeado.php");
?>
<?php
include ("conexionBD.php");
error_reporting(0);
$conexion = crearConexion();

$sqll = "SELECT * FROM clientes order by nombres asc";
$resultado = $conexion -> query($sqll);
$fila = mysqli_fetch_object($resultado);
$resultado->data_seek(0);

?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Etiqueta meta para que me reconozca acentos y otros caracteres especiales-->
    <meta charset="utf-8" />
    <title>SafeSolution - Clientes</title>
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
    <h4 align="center">Listado de Clientes</h4>
    <div class="row">
      <div class="col s12 m4 l3"></div>
      <div class="col s12 m4 l3"></div>
      <div class="col s12 m4 l3"><p></div>
      <div class="col s12 m4 l3">
        <a class='dropdown-button btn' href='#' data-activates='dropdown10'><i class="material-icons right">arrow_drop_down</i>Busqueda de Clientes<i class="material-icons right">search</i></a>
      </div>
    </div><br>
    
    <table id="demo" class="responsive-table">
      <thead  >
        <tr >
          <th align="center" data-field="id">Nombre(s)</th>
          <th align="center" data-field="name">Apellido(s)</th>
          <th align="center" data-field="price">Telefono</th>
          <th align="center" data-field="id">Colonia</th>
          <th align="center" data-field="id">Calle</th>
          <th align="center" data-field="id">Numero</th>
          <th align="center" data-field="id">Email</th>
          <th align="center" data-field="id">Tipo de Demanda</th>
          <th align="center" data-field="id">Fecha de Registro</th>
        </tr>
      </thead>
      <tbody >
        <?php while($fila = mysqli_fetch_object($resultado)) { ?>
        
        <tr>
          <form action="Editar_cliente.php" method="POST">
            <td  align=center> <?php  print $fila->nombres; ?></td>
            <td  align="center"><?php  print $fila->apellidos; ?></td>
            <td  align="center"><?php  print $fila->telefono; ?></td>
            <td  align="center"><?php  print $fila->colonia; ?></td>
            <td  align="center"><?php  print $fila->calle; ?></td>
            <td  align="center"><?php  print $fila->numero; ?></td>
            <td  align="center"><?php  print $fila->email; ?></td>
            <td  align="center"><?php  print $fila->opciones; ?></td>
            <td  align="center"><?php  print $fila->fecha_registro; ?></td>
            <td scope="column" align="center"><input type="hidden" name="id" value="<?php print $fila->id_cliente; ?>"><button type='submit' name='submit' class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">mode_edit</i></button></td>
          </form>
        </tr>
        <?php
        }
        ?>
        
      </tbody>
    </table>
    
    <!-- Dropdown Structure -->
    <ul id='dropdown10' class='dropdown-content'>
      <li><a class="modal-trigger" href="#modal11">Por Nombre o Apellido</a></li>
      <li class="divider"></li>
      <li><a class="modal-trigger" href="#modal12">Por Colonia</a></li>
      <li class="divider"></li>
      <li><a class="modal-trigger" href="#modal13">Por Tipo de Demanda</a></li>
      <li class="divider"></li>
      <li><a class="modal-trigger" href="#modal14">Por Email</a></li>
    </ul>
    
    <div id="modal11" class="modal modal-fixed-footer">
      <div class="modal-content">
        <center><p>Introduce el Nombre del cliente para realizar la busqueda</p></center>
        <div class="row">
          <form class="col s12" name="busqueda_nombre" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">person_pin</i>
                <input placeholder="Nombre del Cliente" id="nom" name="nom" type="text"  class="validate">
                <label for="icon_prefix2">Nombre o Apellido del Cliente</label>
              </div>
              <div class="col s12 ">
                <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Cliente(); return false">Buscar
                <i class="material-icons right">youtube_searched_for</i>
                </button>
              </div>
              <br><br>
              <div class="col s12 " id="muestra_resultados">
                
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
      </div>
    </div>
    <div id="modal12" class="modal modal-fixed-footer">
      <div class="modal-content">
        <center><p>Introduce el Nombre de la Colonia para realizar la busqueda</p></center>
        <div class="row">
          <form class="col s12" name="busqueda_colonia" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">my_location</i>
                <input placeholder="Colonia del Cliente" id="col" name="col" type="text"  class="validate">
                <label for="icon_prefix2">Nombre de la Colonia</label>
              </div>
              <div class="col s12 ">
                <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Colonia(); return false">Buscar
                <i class="material-icons right">youtube_searched_for</i>
                </button>
              </div>
              <br><br>
              <div class="col s12 " id="muestra_resultadoss">
                
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
      </div>
    </div>
    <div id="modal13" class="modal modal-fixed-footer">
      <div class="modal-content">
        <center><p>Selecciona el Tipo de Demanda para realizar la busqueda</p></center>
        <div class="row">
          <form class="col s12" name="busqueda_demanda" method="POST">
            <div class="row">
              <div class="col s12"><i class="material-icons prefix">gavel</i><label for="icon_prefix2"><strong>Seleccionar Tipo de Demanda:</strong></label><select id="opc" name="opc" required="No puedes dejar ningun campo vacio">
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
          <div class="col s12 ">
            <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Demanda(); return false">Buscar
            <i class="material-icons right">youtube_searched_for</i>
            </button>
          </div>
          <br><br>
          <div class="col s12 " id="muestra_resultadosss">
            
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
  </div>
</div>

   <div id="modal14" class="modal modal-fixed-footer">
      <div class="modal-content">
        <center><p>Introduce el Email del cliente para realizar la busqueda</p></center>
        <div class="row">
          <form class="col s12" name="busqueda_email" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">mail</i>
                <input placeholder="Email del Cliente" id="email" name="email" type="email"  class="validate">
                <label for="icon_prefix2">Email del Cliente</label>
              </div>
              <div class="col s12 ">
                <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Email(); return false">Buscar
                <i class="material-icons right">youtube_searched_for</i>
                </button>
              </div>
              <br><br>
              <div class="col s12 " id="muestra_resultadossss">
                
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
      </div>
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