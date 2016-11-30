<?php
include ("Logeado.php");
$usuario = $_SESSION['usuario'];
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
		$hoy = date("20y-m-d");
		error_reporting(0);
		$opcion = $_POST['submit'];
		if($opcion == "Actualizar"){
		$id = $_POST['id'];
		$nom = $_POST['nombre_cliente'];
		$junta = $_POST['junta'];
		$expediente = $_POST['expediente'];
		$contrario = $_POST['nom_contrario'];
		$estado_procesal = $_POST['estado_procesal'];
		$observaciones = $_POST['observaciones'];
		$fecha_agenda =$_POST['fecha_agenda'];
		$decr_eve =$_POST['decr_eve'];
		$hora = $_POST['hora'];
		$min = $_POST['min'];
		$tipocita = $_POST['tipocita'];
		$usuario = $_SESSION['usuario'];

		if (empty($fecha_agenda) OR empty($decr_eve) OR empty($hora) OR empty($min) OR empty($tipocita)) {
			
		include ("conexionBD.php");
		$conexion = crearConexion();
		$Mysqll="UPDATE juicios SET tipo_junta = '$junta', num_expediente = '$expediente', nom_contrario = '$contrario', estado_procesal = '$estado_procesal', modificacion = '$usuario', observaciones = '$observaciones' , ultima_modificacion = '$hoy' WHERE id_juicio = $id";
		$re = $conexion -> query($Mysqll);
		if ($re) {
		

			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Se ha modificado un Juicio!</h1>";
			$mensaje .= "Nombre del cliente: ".$nom."<br><br>";
			$mensaje .= "Tipo de Junta: ".$junta."<br><br>";
			$mensaje .= "Numero de Expediente: ".$expediente."<br><br>";
			$mensaje .= "El estado procesal a cambiado a: ".$estado_procesal."<br><br>";
			$mensaje .= "Observaciones: ".$observaciones."<br><br>";
			$mensaje .= "<hr>";
			$mensaje .= "Enviado por: http://safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>"; 
			$mensaje .= "</html>"; 
			$para      = 'luis.segovia244@gmail.com'. ','.'licjonathanleal@outlook.com';
			$titulo    = '! SafeSolutions -  Juicio Modificado !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);

		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
										title: "SE A ACTULIZADO CORRECTAMENTE EL JUICIO!!",
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
											title: "ERROOOOR!! NO SE PUDO ACTUALIZAR EL JUICIO",
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
			$title = "Hora del evento: ".$horaFinal.";"." "."Expediente: No. : ".$expediente.";"." "."Junta : ".$junta.";"." "."clave : ".$decr_eve.";"." "."Estado Procesal: ".$estado_procesal.";"." "."Nombre del cliente: ".$nom.";"." "."Nombre del contrario: ".$contrario;
			
			/*$title .= "Hora del evento: ".$horaFinal."<br>";
			$title .= "Expediente No.: ".$expediente."<br>";
			$title .= "Junta: ".$junta."<br>";
			$title .= "clave: ".$decr_eve."<br>";
			$title .= "Estado Procesal: ".$estado_procesal."<br>";
			$title .= "Nombre del cliente: ".$nom."<br>";
			$title .= "Nombre del Contrario: ".$contrario."<br>";*/

			$color = "#FF0000";

		$insertar="INSERT INTO events (id, title, color, start, end) VALUES (NULL,'{$title}','{$color}','{$fecha_agenda}','{$fecha_agenda}');";
		$re = $conexion -> query($insertar);

		$Mysqll="UPDATE juicios SET tipo_junta = '$junta', num_expediente = '$expediente', nom_contrario = '$contrario', estado_procesal = '$estado_procesal', modificacion = '$usuario', observaciones = '$observaciones' , ultima_modificacion = '$hoy' WHERE id_juicio = $id";
		$re = $conexion -> query($Mysqll);
		if ($re) {

			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Se ha modificado un Juicio!</h1>";
			$mensaje .= "Nombre del cliente: ".$nom."<br><br>";
			$mensaje .= "Tipo de Junta: ".$junta."<br><br>";
			$mensaje .= "Numero de Expediente: ".$expediente."<br><br>";
			$mensaje .= "El estado procesal a cambiado a: ".$estado_procesal."<br><br>";
			$mensaje .= "Observaciones: ".$observaciones."<br><br>";
			$mensaje .= "Cita O Evento Agendada: ".$title."<br><br>";
			$mensaje .= "<hr>";
			$mensaje .= "Enviado por: http://safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>"; 
			$mensaje .= "</html>"; 
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions -  Juicio Modificado !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
										title: "SE A ACTULIZADO CORRECTAMENTE EL JUICIO!!",
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
											title: "ERROOOOR!! NO SE PUDO ACTUALIZAR EL JUICIO",
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
		$nom = $_POST['nombre_cliente'];
		$junta = $_POST['junta'];
		$expediente = $_POST['expediente'];
		$contrario = $_POST['nom_contrario'];
		$estado_procesal = $_POST['estado_procesal'];
		$observaciones = $_POST['observaciones'];
		$fecha_agenda =$_POST['fecha_agenda'];
		$decr_eve =$_POST['decr_eve'];
		$hora = $_POST['hora'];
		$min = $_POST['min'];
		$tipocita = $_POST['tipocita'];
		$usuario = $_SESSION['usuario'];
		include ("conexionBD.php");
		$conexion = crearConexion();
		$Mysqll="DELETE FROM juicios WHERE id_juicio = {$id}";
		$re = $conexion -> query($Mysqll);
		if ($re) {

			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Se ha Eliminado un Juicio!</h1>";
			$mensaje .= "Nombre del cliente: ".$nom."<br><br>";
			$mensaje .= "Tipo de Junta: ".$junta."<br><br>";
			$mensaje .= "Numero de Expediente: ".$expediente."<br><br>";
			$mensaje .= "<hr>";
			$mensaje .= "Enviado por: http://safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>"; 
			$mensaje .= "</html>"; 
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions -  Juicio Eliminado !';
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