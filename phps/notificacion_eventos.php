<?php
$hoy = date("20y-m-d");
$num = date("d");
$mes = date("M");
$anio = date("20y");
$fecha_mostrar = $num."-"."$mes"."-"."$anio";
//echo($fecha_mostrar);
//echo "fecha actual:"."<br>";
//echo($hoy);
include ("conexionBD.php");
$conexion = crearConexion();
$sqll = "SELECT * FROM events WHERE start = '$hoy'";
$resultado = $conexion -> query($sqll);
$fila = mysqli_fetch_object($resultado);
$resultado->data_seek(0);
/*if (mysqli_num_rows($resultado)>0) {
			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
				$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
				$mensaje .= "<hr>";
				$mensaje .= "<body><h1>! SafeSolutions - Informacion de Agenda!</h1>";
					$mensaje .= "Eventos del Dia:".$num." "."De"." "."$mes"." "."del"." "."$anio"."<br>"."<br>"."<br>";
					$mensaje .= "<table id='demo' class='responsive-table'>
						<tr>
							<th align='left' width='30' data-field='id'>No. de Evento</th>
							<th align='center' width='300' data-field='id'>Descripcion del Evento</th>
							<th align='left' width='100' data-field='name'>Fecha de Evento</th>
						</tr>";
						while($fila = mysqli_fetch_object($resultado)) {
						$mensaje .= "<tr>
								<td  align=left>".$fila->id."</td>
							<td  align=left>".$fila->title."</td>
							<td  align='left'>".$fecha_mostrar."</td>
						</tr>";
						}
					$mensaje .= "</table>";
					$mensaje .= "<hr>";
					$mensaje .= "Enviado por: hhttp://system.safesolutions.com.mx/";
				$mensaje .= "</div";
			$mensaje .= "</body>";
			$mensaje .= "</html>";
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions -  Informacion de Agenda!';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';
			mail($para, $titulo, $mensaje, $cabeceras);
			} else {
			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Informacion de Agenda SafeSolutions!</h1>";
				$mensaje .= "<h1>! Hoy no se Registra ningun Evento!</h1>";
				$mensaje .= "<hr>";
				$mensaje .= "Enviado por:http://system.safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>";
			$mensaje .= "</html>";
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions -  Informacion de Agenda!';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';
			mail($para, $titulo, $mensaje, $cabeceras);
			}
			

			if (mysqli_num_rows($resultado)>0) {

				echo "si hay registros en este dia";

			}else{

				echo "No hay registros en este dia";
			}
			*/
echo "Eventos del Dia:".$num." "."De"." "."$mes"." "."del"." "."$anio"."<br>"."<br>"."<br>";
echo "<table id='demo' class='responsive-table'>
<tr>
<th align='left' data-field='id'>No. de Evento</th>
<th align='center' data-field='id'>Descripcion del Evento</th>
<th align='left' data-field='name'>Fecha de Evento</th>
</tr>";
while($fila = mysqli_fetch_object($resultado)) {
echo "<tr>
	<td  align=left>".$fila->id."</td>
<td  align=left>".$fila->title."</td>
<td  align='left'>".$fecha_mostrar."</td>
</tr>";
}
echo "</table>";
?>