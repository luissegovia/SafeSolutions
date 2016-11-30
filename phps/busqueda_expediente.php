<?php
error_reporting(0);
include ("Logeado.php");
    $expediente = $_POST['exp'];
    include ("conexionBD.php");
    $conexion = crearConexion();
    $Mysqll="SELECT * FROM juicios WHERE num_expediente = '$expediente' order by num_expediente asc";
    $re = $conexion -> query($Mysqll);
    $fila = mysqli_fetch_object($re);
    $re->data_seek(0);
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
  <br>
  <center><p>RESULTADOS:</p></center>
    
    <?php 


      echo "<table id='demo' class='responsive-table'>
            <tr>
            <th align='center' data-field='id'>Nombre(s) del Cliente</th>
            <th align='center' data-field='name'>Tipo de Junta</th>
            <th align='center' data-field='price'>Expediente</th>
            <th align='center' data-field='id'>Nombre de Contrario</th>
            <th align='center' data-field='id'>Fecha de Demanda</th>
            <th align='center' data-field='id'>Tipo de Demanda</th>
            <th align='center' data-field='id'>Estado Procesal</th>
            <th align='center' data-field='id'>Registro del Cliente</th>
            <th align='center' data-field='id'>Anticipo</th>
            <th align='center' data-field='id'>Vendedor</th>
            <th align='center' data-field='id'>Observaciones</th>
            </tr>";

        while($fila = mysqli_fetch_object($re)) {

          echo "<tr>
              <td  align=center>".$fila->nombre_cliente."</td>
              <td  align='center'>".$fila->tipo_junta."</td>
              <td  align='center'>".$fila->num_expediente."</td>
              <td  align='center'>".$fila->nom_contrario."</td>
              <td  align='center'>".$fila->fecha_demanda."</td>
              <td  align='center'>".$fila->tipo_demanda."</td>
              <td  align='center'>".$fila->estado_procesal."</td>
              <td  align='center'>".$fila->fecha_registro_cliente."</td>
              <td  align='center'>".$fila->anticipo."</td>
              <td  align='center'>".$fila->vendedor."</td>
              <td  align='center'>".$fila->observaciones."</td>
              <td scope='column' align='center'>
              <a  class='btn-floating btn-small waves-effect waves-light red' href='Editar_juicio2.php?id=".$fila->id_juicio."'><i class='material-icons'>mode_edit</i></a>
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