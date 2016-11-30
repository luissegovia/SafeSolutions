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

		include ("conexionBD.php");
		$conexion = crearConexion();

		$insertar="INSERT INTO amparos (id_amparo, tribunal, num_amparo, quejoso, tercero, responsable, origen, acto_r, anotaciones, centencia, pendiente) VALUES (NULL,'{$tribunal}','{$num_amparo}','{$quejoso}','{$tercero}','{$responsable}','{$origen}','{$acto_r}','{$anotaciones}','{$centencia}','{$pendiente}');";
		$re = $conexion -> query($insertar);
		
		if ($re) {  

			/*$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Nuevo Amparo!</h1>";
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
			$titulo    = '! SafeSolutions - Nuevo JAmparo !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras)*/
		
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal({
											title: "SE AGREGO UN NUEVO AMPARO!!",
											text: "Presiona Ok para continuar...",
											type: "success",
											},
											function(isConfirm){
													window.location="add_juicio.php";
												});';
			echo '}, 1000);</script>';

		
		
		 } else { 
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
											title: "NO SE PUEDE AGREGAR NU NUEVO AMPARO!!",
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

		 ?>
		
	</body>
</html>