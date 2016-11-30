<?php
include ("Logeado.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script src="../js/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	</head>
	<body>
		<?php
		error_reporting(0);
		$opcion = $_POST['submit'];
		if($opcion == "Actualizar"){
		$id = $_POST['id'];
		$tribunal=$_POST['tribunal'];
		$num_amparo=$_POST['num_amparo'];
		$quejoso=$_POST['quejoso'];
		$tercero=$_POST['tercero'];
		$responsable=$_POST['responsable'];
		$origen=$_POST['origen'];
		$acto_r=$_POST['acto_r'];
		$anotaciones=$_POST['anotaciones'];
		$centencia=$_POST['centencia'];
		$pendiente=$_POST['pendiente'];
		$fecha_agenda =$_POST['fecha_agenda'];
		$decr_eve =$_POST['decr_eve'];
		$hora = $_POST['hora'];
		$min = $_POST['min'];
		$tipocita = $_POST['tipocita'];

		if (empty($fecha_agenda) OR empty($decr_eve) OR empty($hora) OR empty($min) OR empty($tipocita)) {
			
		include ("conexionBD.php");
		$conexion = crearConexion();
		$Mysqll="UPDATE amparos SET tribunal = '$tribunal', num_amparo = '$num_amparo', quejoso = '$quejoso', tercero = '$tercero', responsable = '$responsable', origen = '$origen', acto_r = '$acto_r', anotaciones = '$anotaciones', centencia = '$centencia', pendiente = '$pendiente' WHERE id_amparo = $id";
		$re = $conexion -> query($Mysqll);
		if ($re) {
		
			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Se ha Modificado un juicio!</h1>";
			$mensaje .= "Nombre del Quejoso: ".$quejoso."<br><br>";
			$mensaje .= "Tribunal: ".$tribunal."<br><br>";
			$mensaje .= "Numero de Amparo: ".$num_amparo."<br><br>";
			$mensaje .= "Tercero: ".$tercero."<br><br>";
			$mensaje .= "Responsable: ".$responsable."<br><br>";
			$mensaje .= "Origen: ".$origen."<br><br>";
			$mensaje .= "<hr>";
			$mensaje .= "Enviado por: http://safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>"; 
			$mensaje .= "</html>"; 
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions - Nuevo Juicio Modificado !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);

		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
										title: "SE A ACTULIZADO CORRECTAMENTE EL AMPARO!!",
										text: "Presiona Ok para continuar...",
										type: "success",
										},
										function(isConfirm){
												window.location="principal.php";
											});';
		echo '}, 1000);</script>';
		
		
		} else {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
											title: "ERROOOOR!! NO SE PUDO ACTUALIZAR EL AMPARO",
											text: "Porfavor intentalo de nuevo...",
											type: "error",
											timer: 2000,
											showConfirmButton: false
											},
											function(isConfirm){
													window.location="principal.php";
												});';
		echo '}, 1000);</script>';
		
		}
			
		} else {


		include ("conexionBD.php");
		$conexion = crearConexion();

			$horaFinal = $hora.":".$min." ".$tipocita;
			$title = "Hora del evento: ".$horaFinal.";"." "."No. Amparo. : ".$num_amparo.";"." "."Tribunal : ".$tribunal.";"." "."clave : ".$decr_eve.";"." "."Centencia: ".$centencia.";"." "."Quejoso: ".$quejoso.";"." "."Tercero: ".$tercero;
			
			/*$title .= "Hora del evento: ".$horaFinal."<br>";
			$title .= "Expediente No.: ".$expediente."<br>";
			$title .= "Junta: ".$junta."<br>";
			$title .= "clave: ".$decr_eve."<br>";
			$title .= "Estado Procesal: ".$tercero."<br>";
			$title .= "Nombre del cliente: ".$nom."<br>";
			$title .= "Nombre del Contrario: ".$contrario."<br>";*/

			$color = "#FF0000";

		$insertar="INSERT INTO events (id, title, color, start, end) VALUES (NULL,'{$title}','{$color}','{$fecha_agenda}','{$fecha_agenda}');";
		$re = $conexion -> query($insertar);

		$Mysqll="UPDATE amparos SET tribunal = '$tribunal', num_amparo = '$num_amparo', quejoso = '$quejoso', tercero = '$tercero', responsable = '$responsable', origen = '$origen', acto_r = '$acto_r', anotaciones = '$anotaciones', centencia = '$centencia', pendiente = '$pendiente' WHERE id_amparo = $id";
		$re = $conexion -> query($Mysqll);
		if ($re) {

			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Se ha Modificado un Amparo!</h1>";
			$mensaje .= "Nombre del Quejoso: ".$quejoso."<br><br>";
			$mensaje .= "Tribunal: ".$tribunal."<br><br>";
			$mensaje .= "Numero de Amparo: ".$num_amparo."<br><br>";
			$mensaje .= "Tercero: ".$tercero."<br><br>";
			$mensaje .= "Responsable: ".$responsable."<br><br>";
			$mensaje .= "Origen: ".$origen."<br><br>";
			$mensaje .= "Cita o Evento Agendado: ".$title."<br><br>";
			$mensaje .= "<hr>";
			$mensaje .= "Enviado por: http://safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>"; 
			$mensaje .= "</html>"; 
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions - Nuevo Amparo Modificado !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);
		

		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
										title: "SE A ACTULIZADO CORRECTAMENTE EL AMPARO!!",
										text: "Presiona Ok para continuar...",
										type: "success",
										},
										function(isConfirm){
												window.location="principal.php";
											});';
		echo '}, 1000);</script>';
		
		
		} else {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
											title: "ERROOOOR!! NO SE PUDO ACTUALIZAR EL AMPARO",
											text: "Porfavor intentalo de nuevo...",
											type: "error",
											timer: 2000,
											showConfirmButton: false
											},
											function(isConfirm){
													window.location="principal.php";
												});';
		echo '}, 1000);</script>';
		
		}
			
		
		}

		
		}else{
		$id = $_POST['id'];
		$tribunal=$_POST['tribunal'];
		$num_amparo=$_POST['num_amparo'];
		$quejoso=$_POST['quejoso'];
		$tercero=$_POST['tercero'];
		$responsable=$_POST['responsable'];
		$origen=$_POST['origen'];
		$acto_r=$_POST['acto_r'];
		$anotaciones=$_POST['anotaciones'];
		$centencia=$_POST['centencia'];
		$pendiente=$_POST['pendiente'];
		$fecha_agenda =$_POST['fecha_agenda'];
		$decr_eve =$_POST['decr_eve'];
		$hora = $_POST['hora'];
		$min = $_POST['min'];
		$tipocita = $_POST['tipocita'];
		include ("conexionBD.php");
		$conexion = crearConexion();
		$Mysqll="DELETE FROM amparos WHERE id_amparo = {$id}";
		$re = $conexion -> query($Mysqll);
		if ($re) {

			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Se ha Eliminado un Amparo!</h1>";
			$mensaje .= "Nombre del Quejoso: ".$quejoso."<br><br>";
			$mensaje .= "Tribunal: ".$tribunal."<br><br>";
			$mensaje .= "Numero de Amparo: ".$num_amparo."<br><br>";
			$mensaje .= "<hr>";
			$mensaje .= "Enviado por: http://safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>"; 
			$mensaje .= "</html>"; 
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions - Nuevo Amparo Modificado !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);


		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
										title: "SE A ELIMINADO CORRECTAMENTE EL JUICIO!!",
										text: "Presiona Ok para continuar...",
										type: "success",
										},
										function(isConfirm){
												window.location="principal.php";
											});';
		echo '}, 1000);</script>';
		
		
		} else {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
											title: "ERROOOOR!! NO SE PUD ELIMINAR EL JUICIO",
											text: "Porfavor intentalo de nuevo...",
											type: "error",
											timer: 2000,
											showConfirmButton: false
											},
											function(isConfirm){
													window.location="principal.php";
												});';
		echo '}, 1000);</script>';
		
		}
		}
		?>
		
	</body>
</html>