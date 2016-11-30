<?php
error_reporting(0);
include ("Logeado.php");
    $email = $_POST['email'];
    include ("conexionBD.php");
    $conexion = crearConexion();
    $Mysqll="SELECT * FROM clientes Where email = '$email'  order by email asc";
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
            <th align='center' data-field='id'>Nombre(s)</th>
            <th align='center' data-field='name'>Apellido(s)</th>
            <th align='center' data-field='price'>Telefono</th>
            <th align='center' data-field='id'>Colonia</th>
            <th align='center' data-field='id'>Calle</th>
            <th align='center' data-field='id'>Numero</th>
            <th align='center' data-field='id'>Email</th>
            <th align='center' data-field='id'>Tipo de Demanda</th>
            <th align='center' data-field='id'>Fecha de Registro</th>
            </tr>";

        while($fila = mysqli_fetch_object($re)) {

          echo "<tr>
              <td  align=center>".$fila->nombres."</td>
              <td  align='center'>".$fila->apellidos."</td>
              <td  align='center'>".$fila->telefono."</td>
              <td  align='center'>".$fila->colonia."</td>
              <td  align='center'>".$fila->calle."</td>
              <td  align='center'>".$fila->numero."</td>
              <td  align='center'>".$fila->email."</td>
              <td  align='center'>".$fila->opciones."</td>
              <td  align='center'>".$fila->fecha_registro."</td>
              <td scope='column' align='center'>
              <a  class='btn-floating btn-small waves-effect waves-light red' href='Editar_cliente2.php?id=".$fila->id_cliente."'><i class='material-icons'>mode_edit</i></a>
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