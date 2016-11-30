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
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$telefono = $_POST['telefono'];
		$colonia = $_POST['colonia'];
		$calle = $_POST['calle'];
		$numero = $_POST['numero'];
		$email = $_POST['email'];
		$nom=$nombres." ".$apellidos;
		include ("conexionBD.php");
		$conexion = crearConexion();
		$Mysqll="UPDATE clientes SET nombres = '$nombres', apellidos = '$apellidos', telefono = '$telefono', colonia = '$colonia', calle = '$calle', numero = '$numero', email = '$email' WHERE id_cliente = $id";
		$re = $conexion -> query($Mysqll);
		$qll="UPDATE juicios SET nombre_cliente = '$nom' WHERE id_cliente = $id";
		$ree = $conexion -> query($qll);
		if ($ree) {
		
			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Nuevo Cliente Modificado!</h1>";
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
			$titulo    = '! SafeSolutions - Nuevo Cliente Modificado !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);


		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
										title: "SE A ACTULIZADO CORRECTAMENTE EL CLIENTE!!",
										text: "Presiona Ok para continuar...",
										type: "success",
										},
										function(isConfirm){
												window.location="listado_clientes.php";
											});';
		echo '}, 1000);</script>';
		
		
		} else {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
											title: "ERROOOOR!! NO SE PUDO ACTUALIZAR EL CLIENTE",
											text: "Porfavor intentalo de nuevo...",
											type: "error",
											timer: 2000,
											showConfirmButton: false
											},
											function(isConfirm){
													window.location="listado_clientes.php";
												});';
		echo '}, 1000);</script>';
		
		}
		}else{
		$id = $_POST['id'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$telefono = $_POST['telefono'];
		$colonia = $_POST['colonia'];
		$calle = $_POST['calle'];
		$numero = $_POST['numero'];
		$email = $_POST['email'];
		include ("conexionBD.php");
		$conexion = crearConexion();
		$Mysqll="DELETE FROM clientes WHERE id_cliente = {$id}";
		$re = $conexion -> query($Mysqll);
		if ($re) {

			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Nuevo Cliente Eliminado!</h1>";
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
			$titulo    = '! SafeSolutions - Nuevo Cliente Eliminado !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);

		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
										title: "SE A ELIMINADO CORRECTAMENTE EL CLIENTE!!",
										text: "Presiona Ok para continuar...",
										type: "success",
										},
										function(isConfirm){
												window.location="listado_clientes.php";
											});';
		echo '}, 1000);</script>';
		
		
		} else {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
											title: "ERROOOOR!! NO SE PUD ELIMINAR EL CLIENTE",
											text: "Porfavor intentalo de nuevo...",
											type: "error",
											timer: 2000,
											showConfirmButton: false
											},
											function(isConfirm){
													window.location="listado_clientes.php";
												});';
		echo '}, 1000);</script>';
		
		}
		}
		?>
		
	</body>
</html>