<?php 
include ("Logeado.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Etiqueta meta para que me reconozca acentos y otros caracteres especiales-->
    <meta charset="utf-8" />
    <title>SafeSolution - Protector de Derechos</title>
    <link rel="shortcut icon" href="../images/favicon.ico">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <!-- Import Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="../js/juicios_ajax.js"></script>
    <script src="../js/amparos_ajax.js"></script>
    <script src="../js/jquery-latest.js"></script>
    <script src="../js/jquery.tablesorter.js"></script>
  </head>
  <body class="grey transparent">
  <?php
include ("conexionBD.php");
$conexion = crearConexion();


$tipo="JF 20";
$sql1 = "SELECT * FROM juicios where tipo_junta = '$tipo' AND estado_procesal != 'Pagado' order by id_juicio asc";
$resultado1 = $conexion -> query($sql1);
$fila1 = mysqli_fetch_object($resultado1);
$resultado1->data_seek(0);


$tipo2="JF 19";
$sql2 = "SELECT * FROM juicios where tipo_junta = '$tipo2' AND estado_procesal != 'Pagado' order by id_juicio asc";
$resultado2 = $conexion -> query($sql2);
$fila2 = mysqli_fetch_object($resultado2);
$resultado2->data_seek(0);


$tipo3="Junta Local";
$sql3 = "SELECT * FROM juicios where tipo_junta = '$tipo3' AND estado_procesal != 'Pagado' order by id_juicio asc";
$resultado3 = $conexion -> query($sql3);
$fila3 = mysqli_fetch_object($resultado3);
$resultado3->data_seek(0);


$tipo4="Civil";
$sql4 = "SELECT * FROM juicios where tipo_junta = '$tipo4' AND estado_procesal != 'Pagado' order by id_juicio asc";
$resultado4 = $conexion -> query($sql4);
$fila4 = mysqli_fetch_object($resultado4);
$resultado4->data_seek(0);


$sql5 = "SELECT * FROM juicios WHERE estado_procesal != 'Pagado' order by id_juicio asc";
$resultado5 = $conexion -> query($sql5);
$fila5 = mysqli_fetch_object($resultado5);
$resultado5->data_seek(0);

$sql6 = "SELECT * FROM amparos order by id_amparo asc";
$resultado6 = $conexion -> query($sql6);
$fila6 = mysqli_fetch_object($resultado6);
$resultado6->data_seek(0);


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
    <ul id='dropdown10' class='dropdown-content'>
          <li><a class="modal-trigger" href="#modal11">Por Nombre o Apellido</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal12">Por Tipo de Junta</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal13">Por Expediente</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal14">Por Tipo de Demanda</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal15">Por Estado Procesal</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal16">Por Fecha de Demanda</a></li>
        </ul>
        <ul id='dropdown11' class='dropdown-content'>
          <li><a class="modal-trigger" href="#modal30">Por Tribunal</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal31">Por No. Amparo</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal32">Por Quejoso</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal33">Por Tercero</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal34">Por Responsable</a></li>
          <li class="divider"></li>
          <li><a class="modal-trigger" href="#modal35">Por Acto_r</a></li>
        </ul>
 <br><br>
    <h4 align="center"> SafeSolution - Protector de Derechos</h4><br>
    <div class="row">
      <div class="col s12 m4 l3"></div>
      <div class="col s12 m4 l3"></div>
      <div class="col s12 m4 l3"><p></div>
      <div class="col s12 m4 l3">
      <a class='dropdown-button btn' href='#' data-activates='dropdown10'><i class="material-icons right">arrow_drop_down</i>Busqueda de Juicios<i class="material-icons right">search</i></a><br><br>
        <a class='dropdown-button btn' href='#' data-activates='dropdown11'><i class="material-icons right">arrow_drop_down</i>Busqueda de Amparo<i class="material-icons right">search</i></a>  

      </div>
    </div><br>
    
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active"href="#test2">JF 20</a></li>
        <li class="tab col s3"><a href="#test1">JF 19</a></li>
        <li class="tab col s3"><a href="#test3">J Local</a></li>
        <li class="tab col s3"><a class="active"href="#test6">Amparos</a></li>
        <li class="tab col s3"><a class="active"href="#test4">Civil</a></li>
        <li class="tab col s3"><a class="active"href="#test5">J. Generales</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      <table id="demo2" class="responsive-table bordered highlight">
        <thead  >
          <tr >
            <th align="center" data-field="id">Nombre(s) del Cliente</th>
            <th align="center" data-field="name">Tipo de Junta</th>
            <th align="center" data-field="price">Expediente</th>
            <th align="center" data-field="id">Nombre de Contrario</th>
            <th align="center" data-field="id">Fecha de Demanda</th>
            <th align="center" data-field="id">Tipo de Demanda</th>
            <th align="center" data-field="id">Estado Procesal</th>
            <th align="center" data-field="id">Registro del Cliente</th>
            <th align="center" data-field="id">Anticipo</th>
            <th align="center" data-field="id">Vendedor</th>
            <th align="center" data-field="id">Modificado Por</th>
            <th align="center" data-field="id">Observaciones</th>
          </tr>
        </thead>
        <tbody >
          <?php while($fila2 = mysqli_fetch_object($resultado2)) { ?>
          <tr>
            <form action="Editar_juicio.php" method="POST">
              <td  align=center> <?php  print $fila2->nombre_cliente; ?></td>
              <td  align="center"><?php  print $fila2->tipo_junta; ?></td>
              <td  align="center"><?php  print $fila2->num_expediente; ?></td>
              <td  align="center"><?php  print $fila2->nom_contrario; ?></td>
              <td  align="center"><?php  print $fila2->fecha_demanda; ?></td>
              <td  align="center"><?php  print $fila2->tipo_demanda; ?></td>
              <td  align="center"><?php  print $fila2->estado_procesal; ?></td>
              <td  align="center"><?php  print $fila2->fecha_registro_cliente; ?></td>
              <td  align="center"><?php  print "$".$fila2->anticipo; ?></td>
              <td  align="center"><?php  print $fila2->vendedor; ?></td>
              <td  align="center"><?php  print $fila2->modificacion; ?></td>
              <td  align="center"><?php  print $fila2->observaciones; ?></td>
              <input type="hidden" name="id" value="<?php print $fila2->id_juicio; ?>">
              <td scope="column" align="center"><button type='submit' name='submit' class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">mode_edit</i></button></td>
            </form>
          </tr>
          <?php
          }
          mysqli_close($conexion);
          ?>
          
        </tbody>
      </table>
    </div>
    <div id="test2" class="col s22">
      <table id="demo3" class="responsive-table bordered highlight">
        <thead  >
          <tr >
            <th align="center" data-field="id">Nombre(s) del Cliente</th>
            <th align="center" data-field="name">Tipo de Junta</th>
            <th align="center" data-field="price">Expediente</th>
            <th align="center" data-field="id">Nombre de Contrario</th>
            <th align="center" data-field="id">Fecha de Demanda</th>
            <th align="center" data-field="id">Tipo de Demanda</th>
            <th align="center" data-field="id">Estado Procesal</th>
            <th align="center" data-field="id">Registro del Cliente</th>
            <th align="center" data-field="id">Anticipo</th>
            <th align="center" data-field="id">Vendedor</th>
            <th align="center" data-field="id">Modificado Por</th>
            <th align="center" data-field="id">Observaciones</th>
          </tr>
        </thead>
        <tbody >
          <?php while($fila1 = mysqli_fetch_object($resultado1)) { ?>
          <tr>
            <form action="Editar_juicio.php" method="POST">
              <td  align=center> <?php  print $fila1->nombre_cliente; ?></td>
              <td  align="center"><?php  print $fila1->tipo_junta; ?></td>
              <td  align="center"><?php  print $fila1->num_expediente; ?></td>
              <td  align="center"><?php  print $fila1->nom_contrario; ?></td>
              <td  align="center"><?php  print $fila1->fecha_demanda; ?></td>
              <td  align="center"><?php  print $fila1->tipo_demanda; ?></td>
              <td  align="center"><?php  print $fila1->estado_procesal; ?></td>
              <td  align="center"><?php  print $fila1->fecha_registro_cliente; ?></td>
              <td  align="center"><?php  print $fila1->anticipo; ?></td>
              <td  align="center"><?php  print $fila1->vendedor; ?></td>
              <td  align="center"><?php  print $fila1->modificacion; ?></td>
              <td  align="center"><?php  print $fila1->observaciones; ?></td>
              <input type="hidden" name="id" value="<?php print $fila1->id_juicio; ?>">
              <td scope="column" align="center"><button type='submit' name='submit' class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">mode_edit</i></button></td>
            </form>
          </tr>
          <?php
          }
          mysqli_close($conexion);
          ?>
          
        </tbody>
      </table>
    </div>
    <div id="test3" class="col s12">
      <table id="demo4"  class="responsive-table bordered highlight">
        <thead  >
          <tr >
            <th align="center" data-field="id">Nombre(s) del Cliente</th>
            <th align="center" data-field="name">Tipo de Junta</th>
            <th align="center" data-field="price">Expediente</th>
            <th align="center" data-field="id">Nombre de Contrario</th>
            <th align="center" data-field="id">Fecha de Demanda</th>
            <th align="center" data-field="id">Tipo de Demanda</th>
            <th align="center" data-field="id">Estado Procesal</th>
            <th align="center" data-field="id">Registro del Cliente</th>
            <th align="center" data-field="id">Anticipo</th>
            <th align="center" data-field="id">Vendedor</th>
            <th align="center" data-field="id">Modificado Por</th>
            <th align="center" data-field="id">Observaciones</th>
          </tr>
        </thead>
        <tbody >
          <?php while($fila3 = mysqli_fetch_object($resultado3)) { ?>
          <tr>
            <form action="Editar_juicio.php" method="POST">
              <td  align=center> <?php  print $fila3->nombre_cliente; ?></td>
              <td  align="center"><?php  print $fila3->tipo_junta; ?></td>
              <td  align="center"><?php  print $fila3->num_expediente; ?></td>
              <td  align="center"><?php  print $fila3->nom_contrario; ?></td>
              <td  align="center"><?php  print $fila3->fecha_demanda; ?></td>
              <td  align="center"><?php  print $fila3->tipo_demanda; ?></td>
              <td  align="center"><?php  print $fila3->estado_procesal; ?></td>
              <td  align="center"><?php  print $fila3->fecha_registro_cliente; ?></td>
              <td  align="center"><?php  print $fila3->anticipo; ?></td>
              <td  align="center"><?php  print $fila3->vendedor; ?></td>
              <td  align="center"><?php  print $fila3->modificacion; ?></td>
              <td  align="center"><?php  print $fila3->observaciones; ?></td>
              <input type="hidden" name="id" value="<?php print $fila3->id_juicio; ?>">
              <td scope="column" align="center"><button type='submit' name='submit' class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">mode_edit</i></button></td>
            </form>
          </tr>
          <?php
          }
          mysqli_close($conexion);
          ?>
          
        </tbody>
      </table>
    </div>
    <div id="test4" class="col s12">
      <table id="demo5" class="responsive-table bordered highlight">
        <thead  >
          <tr >
            <th align="center" data-field="id">Nombre(s) del Cliente</th>
            <th align="center" data-field="name">Tipo de Junta</th>
            <th align="center" data-field="price">Expediente</th>
            <th align="center" data-field="id">Nombre de Contrario</th>
            <th align="center" data-field="id">Fecha de Demanda</th>
            <th align="center" data-field="id">Tipo de Demanda</th>
            <th align="center" data-field="id">Estado Procesal</th>
            <th align="center" data-field="id">Registro del Cliente</th>
            <th align="center" data-field="id">Anticipo</th>
            <th align="center" data-field="id">Vendedor</th>
            <th align="center" data-field="id">Modificado Por</th>
            <th align="center" data-field="id">Observaciones</th>
          </tr>
        </thead>
        <tbody >
          <?php while($fila4 = mysqli_fetch_object($resultado4)) { ?>
          <tr>
            <form action="Editar_juicio.php" method="POST">
              <td  align=center> <?php  print $fila4->nombre_cliente; ?></td>
              <td  align="center"><?php  print $fila4->tipo_junta; ?></td>
              <td  align="center"><?php  print $fila4->num_expediente; ?></td>
              <td  align="center"><?php  print $fila4->nom_contrario; ?></td>
              <td  align="center"><?php  print $fila4->fecha_demanda; ?></td>
              <td  align="center"><?php  print $fila4->tipo_demanda; ?></td>
              <td  align="center"><?php  print $fila4->estado_procesal; ?></td>
              <td  align="center"><?php  print $fila4->fecha_registro_cliente; ?></td>
              <td  align="center"><?php  print $fila4->anticipo; ?></td>
              <td  align="center"><?php  print $fila4->vendedor; ?></td>
              <td  align="center"><?php  print $fila4->modificacion; ?></td>
              <td  align="center"><?php  print $fila4->observaciones; ?></td>
              <input type="hidden" name="id" value="<?php print $fila4->id_juicio; ?>">
              <td scope="column" align="center"><button type='submit' name='submit' class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">mode_edit</i></button></td>
            </form>
          </tr>
          <?php
          }
          mysqli_close($conexion);
          ?>
          
        </tbody>
      </table>
    </div>
    <div id="test5" class="col s12">
      <table id="demo" class="responsive-table bordered highlight">
        <thead  >
          <tr >
            <th align="center" data-field="id">Nombre(s) del Cliente</th>
            <th align="center" data-field="name">Tipo de Junta</th>
            <th align="center" data-field="price">Expediente</th>
            <th align="center" data-field="id">Nombre de Contrario</th>
            <th align="center" data-field="id">Fecha de Demanda</th>
            <th align="center" data-field="id">Tipo de Demanda</th>
            <th align="center" data-field="id">Estado Procesal</th>
            <th align="center" data-field="id">Registro del Cliente</th>
            <th align="center" data-field="id">Anticipo</th>
            <th align="center" data-field="id">Vendedor</th>
            <th align="center" data-field="id">Modificado Por</th>
            <th align="center" data-field="id">Observaciones</th>
            <th align="center" data-field="id">Editar</th>
          </tr>
        </thead>
        <tbody >
          <?php while($fila5 = mysqli_fetch_object($resultado5)) { ?>
          <tr>
            <form action="Editar_juicio.php" method="POST">
              <td  align=center> <?php  print $fila5->nombre_cliente; ?></td>
              <td  align="center"><?php  print $fila5->tipo_junta; ?></td>
              <td  align="center"><?php  print $fila5->num_expediente; ?></td>
              <td  align="center"><?php  print $fila5->nom_contrario; ?></td>
              <td  align="center"><?php  print $fila5->fecha_demanda; ?></td>
              <td  align="center"><?php  print $fila5->tipo_demanda; ?></td>
              <td  align="center"><?php  print $fila5->estado_procesal; ?></td>
              <td  align="center"><?php  print $fila5->fecha_registro_cliente; ?></td>
              <td  align="center"><?php  print $fila5->anticipo; ?></td>
              <td  align="center"><?php  print $fila5->vendedor; ?></td>
              <td  align="center"><?php  print $fila5->modificacion; ?></td>
              <td  align="center"><?php  print $fila5->observaciones; ?></td>
              <input type="hidden" name="id" value="<?php print $fila5->id_juicio; ?>">
              <td scope="column" align="center"><button type='submit' name='submit' class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">mode_edit</i></button></td>
            </form>
          </tr>
          <?php
          }
          mysqli_close($conexion);
          ?>
          
        </tbody>
      </table>
    </div>
<div id="test6" class="col s12">
      <table id="demo" class="responsive-table bordered highlight">
        <thead  >
          <tr >
            <th align="center" data-field="id">Ttibunal</th>
            <th align="center" data-field="name">No. Amparo</th>
            <th align="center" data-field="price">Quejoso</th>
            <th align="center" data-field="id">Tercero</th>
            <th align="center" data-field="id">Responsable</th>
            <th align="center" data-field="id">Origen</th>
            <th align="center" data-field="id">Acto_r</th>
            <th align="center" data-field="id">Anotaciones</th>
            <th align="center" data-field="id">Centencias</th>
            <th align="center" data-field="id">Pendientes</th>
            <th align="center" data-field="id">Editar</th>
          </tr>
        </thead>
        <tbody >
          <?php while($fila6 = mysqli_fetch_object($resultado6)) { ?>
          <tr>
            <form action="Editar_amparo.php" method="POST">
              <td  align=center> <?php  print $fila6->tribunal; ?></td>
              <td  align="center"><?php  print $fila6->num_amparo; ?></td>
              <td  align="center"><?php  print $fila6->quejoso; ?></td>
              <td  align="center"><?php  print $fila6->tercero; ?></td>
              <td  align="center"><?php  print $fila6->responsable; ?></td>
              <td  align="center"><?php  print $fila6->origen; ?></td>
              <td  align="center"><?php  print $fila6->acto_r; ?></td>
              <td  align="center"><?php  print $fila6->anotaciones; ?></td>
              <td  align="center"><?php  print $fila6->centencia; ?></td>
              <td  align="center"><?php  print $fila6->pendiente; ?></td>
              <input type="hidden" name="id" value="<?php print $fila6->id_amparo; ?>">
              <td scope="column" align="center"><button type='submit' name='submit' class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">mode_edit</i></button></td>
            </form>
          </tr>
          <?php
          }
          mysqli_close($conexion);
          ?>
          
        </tbody>
      </table>
    </div>

    <!--Modales De Busquedas-->
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
        <center><p>Selecciona una junta para realizar la busqueda</p></center>
        <div class="row">
          <form class="col s12" name="busqueda_junta" method="POST">
            <div class="row">
              <div class="col s12"><i class="material-icons prefix">gavel</i><label for="icon_prefix2"><strong>Seleccionar Tipo de Junta:</strong></label><select id="jun" name="jun" required="No puedes dejar ningun campo vacio">
              <option value="" disabled selected>Seleccione una</option>
              <option value="JF 19">JF 19</option>
              <option value="JF 20">JF 20</option>
              <option value="Junta Local">Junta Local</option>
              <option value="Civil">Civil</option>
            </select>
          </div>
          <div class="col s12 ">
            <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Junta(); return false">Buscar
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
    <center><p>Introduce el Numero del Expediente para realizar la busqueda</p></center>
    <div class="row">
      <form class="col s12" name="busqueda_expediente" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">explicit</i>
            <input placeholder="No. Expdiente" id="exp" name="exp" type="text"  class="validate">
            <label for="icon_prefix2">Numero de expediente</label>
          </div>
          <div class="col s12 ">
            <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Expediente(); return false">Buscar
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
    <center><p>Selecciona el Tipo de Demanda para realizar la busqueda</p></center>
    <div class="row">
      <form class="col s12" name="busqueda_demanda" method="POST">
        <div class="row">
          <div class="col s12"><i class="material-icons prefix">gavel</i><label for="icon_prefix2"><strong>Seleccionar Tipo de Demanda:</strong></label><select id="dem" name="dem" required="No puedes dejar ningun campo vacio">
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
<div id="modal15" class="modal modal-fixed-footer">
<div class="modal-content">
<center><p>Selecciona el Tipo de Estado procesal para realizar la busqueda</p></center>
<div class="row">
  <form class="col s12" name="busqueda_estado" method="POST">
    <div class="row">
      <div class="col s12"><i class="material-icons prefix">gavel</i><label for="icon_prefix2"><strong>Seleccionar Tipo de Estado Procesal:</strong></label><select id="est" name="est" required="No puedes dejar ningun campo vacio">
      <option value="" disabled selected>Seleccione una</option>
      <optgroup label="Estado Inicial:">
        <option value="Demanda Presentada">Demanda Presentada</option>
      </optgroup>
      <optgroup label="Junta 19, 20 Y Local:">
        <option value="Pendiente Radicacion">Pendiente Radicacion</option>
        <option value="CDE">CDE</option>
        <option value="Cde Continuacion del IMSS">Cde Continuacion del IMSS</option>
        <option value="OAP">OAP</option>
        <option value="Desahogo de Pruebas">Desahogo de Pruebas</option>
        <option value="Confesional">Confesional</option>
        <option value="Testimonial">Testimonial</option>
        <option value="Inspeccion">Inspeccion</option>
        <option value="Pericial">Pericial</option>
        <option value="Alegatos">Alegatos</option>
        <option value="Cierre de Instrucciones">Cierre de Instruciones</option>
        <option value="Diactamen">Dictamen</option>
        <option value="Laudo">Laudo</option>
        <option value="Amparo">Amparo</option>
        <option value="2 Laudo">2 Laudo</option>
        <option value="2 Amparo">2 Amparo</option>
        <option value="3 Laudo">3 Laudo</option>
        <option value="Ejecucion">Ejecucion</option>
      </optgroup>
      <optgroup label="Civiles Mercantiles:">
        <option value="Pendiente Radicacion">Pendiente Radicacion</option>
        <option value="Adminision">Adminision</option>
        <option value="Prevencion">Prevencion</option>
        <option value="Desecha">Desecha</option>
        <option value="Emplazamiento">Emplazamiento</option>
        <option value="Contestacion">Contestacion</option>
        <option value="Pruebas">Pruebas</option>
        <option value="Alegatos">Alegatos</option>
        <option value="Sentencia">Sentencia</option>
        <option value="Amparo">Amparo</option>
        <option value="2 Sentencia">2 Sentencia</option>
        <option value="Incidente">Incidente</option>
        <option value="Ejecucion">Ejecucion</option>
        <option value="Concluido">Concluido</option>
      </optgroup>
      <optgroup label="Estado Final:">
        <option  value="Pagado">Pagado</option>
      </optgroup>
    </select>        </div>
    <div class="col s12 ">
      <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Estado(); return false">Buscar
      <i class="material-icons right">youtube_searched_for</i>
      </button>
    </div>
    <br><br>
    <div class="col s12 " id="muestra_resultadosssss">
      
    </div>
  </div>
</form>
</div>
</div>
<div class="modal-footer">
<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
</div>
</div>

<div id="modal16" class="modal modal-fixed-footer">
<div class="modal-content">
<center><p>Selecciona la Fecha de Demanda para realizar la busqueda</p></center>
<div class="row">
<form class="col s12" name="busqueda_fecha" method="POST">
  <div class="row">
    <div class="col s12"><i class="material-icons prefix">event_note</i><label for="icon_prefix2"><strong>Fecha de Presentacion de Demanda:</strong></label><input type="date" required="" id="fech" name="fech" >
    
  </div>
  <div class="col s12 ">
    <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Fecha_Demanda(); return false">Buscar
    <i class="material-icons right">youtube_searched_for</i>
    </button>
  </div>
  <br><br>
  <div class="col s12 " id="muestra_resultadossssss">
    
  </div>
</div>
</form>
</div>
</div>
<div class="modal-footer">
<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
</div>
</div>
    <!--Modales De Busquedas amparos-->
    <div id="modal30" class="modal modal-fixed-footer">
      <div class="modal-content">
        <center><p>Introduce el Tribunal para realizar la busqueda</p></center>
        <div class="row">
          <form class="col s12" name="busqueda_tribunal" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">person_pin</i>
                <input placeholder="Nombre del Tribunal" id="tribunal" name="tribunal" type="text"  class="validate">
                <label for="icon_prefix2">Tribunal o Junta</label>
              </div>
              <div class="col s12 ">
                <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Tribunal(); return false">Buscar
                <i class="material-icons right">youtube_searched_for</i>
                </button>
              </div>
              <br><br>
              <div class="col s12 " id="muestra_resultado">
                
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
      </div>
    </div>
<div id="modal31" class="modal modal-fixed-footer">
  <div class="modal-content">
    <center><p>Introduce el Numero del Amparo para realizar la busqueda</p></center>
    <div class="row">
      <form class="col s12" name="busqueda_amparo" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">explicit</i>
            <input placeholder="No. Amparo" id="amparo" name="amparo" type="text"  class="validate">
            <label for="icon_prefix2">Numero de Amparo</label>
          </div>
          <div class="col s12 ">
            <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Amparo(); return false">Buscar
            <i class="material-icons right">youtube_searched_for</i>
            </button>
          </div>
          <br><br>
          <div class="col s12 " id="muestra_resultadoo">
            
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
  </div>
</div>
<div id="modal32" class="modal modal-fixed-footer">
  <div class="modal-content">
    <center><p>Introduce el Nombre del Quejoso para realizar la busqueda</p></center>
    <div class="row">
      <form class="col s12" name="busqueda_quejoso" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">explicit</i>
            <input placeholder="Nombre del Quejoso" id="quejoso" name="quejoso" type="text"  class="validate">
            <label for="icon_prefix2">Nombre del Quejoso</label>
          </div>
          <div class="col s12 ">
            <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Quejoso(); return false">Buscar
            <i class="material-icons right">youtube_searched_for</i>
            </button>
          </div>
          <br><br>
          <div class="col s12 " id="muestra_resultadooo">
            
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
  </div>
</div>
<div id="modal33" class="modal modal-fixed-footer">
  <div class="modal-content">
    <center><p>Introduce el Nombre del Tercero para realizar la busqueda</p></center>
    <div class="row">
      <form class="col s12" name="busqueda_tercero" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">explicit</i>
            <input placeholder="Nombre del tercero" id="tercero" name="tercero" type="text"  class="validate">
            <label for="icon_prefix2">Nombre del tercero</label>
          </div>
          <div class="col s12 ">
            <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Tercero(); return false">Buscar
            <i class="material-icons right">youtube_searched_for</i>
            </button>
          </div>
          <br><br>
          <div class="col s12 " id="muestra_resultadoooo">
            
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
  </div>
</div>
<div id="modal34" class="modal modal-fixed-footer">
  <div class="modal-content">
    <center><p>Introduce el Nombre del Responsable para realizar la busqueda</p></center>
    <div class="row">
      <form class="col s12" name="busqueda_responsable" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">explicit</i>
            <input placeholder="Nombre del Responsable" id="resp" name="resp" type="text"  class="validate">
            <label for="icon_prefix2">Nombre del Responsable</label>
          </div>
          <div class="col s12 ">
            <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Responsable(); return false">Buscar
            <i class="material-icons right">youtube_searched_for</i>
            </button>
          </div>
          <br><br>
          <div class="col s12 " id="muestra_resultadooooo">
            
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
  </div>
</div>
<div id="modal35" class="modal modal-fixed-footer">
  <div class="modal-content">
    <center><p>Introduce el Acto_r para realizar la busqueda</p></center>
    <div class="row">
      <form class="col s12" name="busqueda_acto" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">explicit</i>
            <input placeholder="Acto_r" id="acto_r" name="acto_r" type="text"  class="validate">
            <label for="icon_prefix2">Acto_r</label>
          </div>
          <div class="col s12 ">
            <button class="btn waves-effect waves-light input-field col s12" type="submit" name="action" onclick="Buscar_Acto(); return false">Buscar
            <i class="material-icons right">youtube_searched_for</i>
            </button>
          </div>
          <br><br>
          <div class="col s12 " id="muestra_resultadoooooo">
            
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
    <script type="text/javascript" src="../js/jquery.tablesorter.min.js"></script>
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
$("#demo").tablesorter();
});
$(document).ready(function() {
$("#demo2").tablesorter();
});
$(document).ready(function() {
$("#demo3").tablesorter();
});
$(document).ready(function() {
$("#demo4").tablesorter();
});
$(document).ready(function() {
$("#demo5").tablesorter();
});
$(document).ready(function(){
$('ul.tabs').tabs();
});
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