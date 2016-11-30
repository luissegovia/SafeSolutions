<?php
error_reporting(0);
include ("Logeado.php");
    $actoo = $_POST['acto_r'];
    include ("conexionBD.php");
    $conexion = crearConexion();
    $Mysqll="SELECT * FROM amparos WHERE acto_r = '$actoo' order by acto_r asc";
    $re = $conexion -> query($Mysqll);
    $fila = mysqli_fetch_object($re);
    $re->data_seek(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SafeSolution - Busqueda Tribunal</title>
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
  <br>
  <center><p>RESULTADOS:</p></center>
    
    <?php 


      echo "<table id='demo' class='responsive-table'>
            <tr>
            <th align='center' data-field='id'>Ttibunal</th>
            <th align='center' data-field='name'>No. Amparo</th>
            <th align='center' data-field='price'>Quejoso</th>
            <th align='center' data-field='id'>Tercero</th>
            <th align='center' data-field='id'>Responsable</th>
            <th align='center' data-field='id'>Origen</th>
            <th align='center' data-field='id'>Acto_r</th>
            <th align='center' data-field='id'>Anotaciones</th>
            <th align='center' data-field='id'>Centencias</th>
            <th align='center' data-field='id'>Pendientes</th>
            <th align='center' data-field='id'>Editar</th>
            </tr>";

        while($fila = mysqli_fetch_object($re)) {

          echo "<tr>
              <td  align=center>".$fila->tribunal."</td>
              <td  align='center'>".$fila->num_amparo."</td>
              <td  align='center'>".$fila->quejoso."</td>
              <td  align='center'>".$fila->tercero."</td>
              <td  align='center'>".$fila->responsable."</td>
              <td  align='center'>".$fila->origen."</td>
              <td  align='center'>".$fila->acto_r."</td>
              <td  align='center'>".$fila->anotaciones."</td>
              <td  align='center'>".$fila->centencia."</td>
              <td  align='center'>".$fila->pendiente."</td>
              <td scope='column' align='center'>
              <a  class='btn-floating btn-small waves-effect waves-light red' href='Editar_amparo2.php?id=".$fila->id_amparo."'><i class='material-icons'>mode_edit</i></a>
              </td>
              </tr>";


        }

          echo "</table>";



     ?>
    
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
</script>
</body>
</html>