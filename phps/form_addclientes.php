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
		include ("Logeado.php");
		error_reporting(0);
		$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];
		$telefono=$_POST['telefono'];
		$colonia=$_POST['colonia'];
		$calle=$_POST['calle'];
		$numero=$_POST['numero'];
		$email=$_POST['email'];
		$opciones=$_POST['opciones'];
		$fecha_registro=$_POST['fecha_registro'];
		include ("conexionBD.php");
		$conexion = crearConexion();
		$insertar="INSERT INTO clientes (id_cliente, nombres, apellidos, telefono, colonia, calle, numero, email, opciones, fecha_registro) VALUES (NULL,'{$nombres}','{$apellidos}','{$telefono}','{$colonia}','{$calle}','{$numero}','{$email}','{$opciones}','{$fecha_registro}');";
		$re = $conexion -> query($insertar);
		if ($re)  {
			
			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Nuevo Cliente Agregado!</h1>";
			$mensaje .= "Nombre del Cliente: ".$nombres."<br><br>";
			$mensaje .= "Apellido del Cliente: ".$apellidos."<br><br>";
			$mensaje .= "Telefono: ".$telefono."<br><br>";
			$mensaje .= "Colonia: ".$colonia."<br><br>";
			$mensaje .= "<hr>";
			$mensaje .= "Enviado por: http://safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>"; 
			$mensaje .= "</html>"; 
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions - Nuevo Cliente !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
										title: "SE AGREGO UN NUEVO CLIENTE!!",
										text: "Presiona Ok para continuar...",
										type: "success",
										},
										function(isConfirm){
												window.location="agregar_cliente.php";
											});';
		echo '}, 1000);</script>';
		
		
		}else {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
											title: "ERROOOR! NO SE PUEDE AGREGAR NU NUEVO CLIENTE!!",
											text: "Porfavor intentalo de nuevo...",
											type: "error",
											timer: 2000,
											showConfirmButton: false
											},
											function(isConfirm){
													window.location="agregar_cliente.php";
												});';
		echo '}, 1000);</script>';
		
		}
		?>
		
	</body>
</html>