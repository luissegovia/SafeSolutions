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
		$nom_cliente=$_POST['nom_cliente'];
		$tipo_junta=$_POST['tipo_junta'];
		$num_expediente=$_POST['num_expediente'];
		$nom_contrario=$_POST['nom_contrario'];
		$fecha_demanda=$_POST['fecha_demanda'];
		$anticipo=$_POST['anticipo'];
		$vendedor=$_POST['vendedor'];
		$obs_iniciales=$_POST['obs_iniciales'];
		$estado_procesal=$_POST['estado_procesal'];
		include ("conexionBD.php");
		$conexion = crearConexion();
		$sqll = "SELECT nombres,apellidos,opciones,fecha_registro FROM Clientes where id_cliente = $nom_cliente";
		$resultado = $conexion -> query($sqll);
		$fila = mysqli_fetch_object($resultado);
		$resultado->data_seek(0);
		$nombre=$fila->nombres." ".$fila->apellidos;
		$Tipo_demanda=$fila->opciones;
		$fecha_registro=$fila->fecha_registro;
		
		$insertar="INSERT INTO juicios (id_juicio, nombre_cliente, tipo_junta, num_expediente, nom_contrario, fecha_demanda, tipo_demanda, fecha_registro_cliente, anticipo, vendedor, estado_procesal, modificacion, observaciones, ultima_modificacion) VALUES (NULL,'{$nombre}','{$tipo_junta}','{$num_expediente}','{$nom_contrario}','{$fecha_demanda}','{$Tipo_demanda}','{$fecha_registro}','{$anticipo}','{$vendedor}','{$estado_procesal}','{$usuario}','{$obs_iniciales}','{$hoy}');";
		$re = $conexion -> query($insertar);
		
		if ($re) {  

			$mensaje = "<html>";
			$mensaje .= "<head><title>Email con HTML</title></head>";
			$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
			$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
			$mensaje .= "<hr>";
			$mensaje .= "<body><h1>! SafeSolutions - Nuevo Juicio!</h1>";
			$mensaje .= "Nombre del cliente: ".$nombre."<br><br>";
			$mensaje .= "Tipo de Junta: ".$tipo_junta."<br><br>";
			$mensaje .= "Numero de Expediente: ".$num_expediente."<br><br>";
			$mensaje .= "Fecha de la Demanda: ".$fecha_demanda."<br><br>";
			$mensaje .= "Anticipo: ".$anticipo."<br><br>";
			$mensaje .= "Vendedor: ".$vendedor."<br><br>";
			$mensaje .= "<hr>";
			$mensaje .= "Enviado por: http://safesolutions.com.mx/";
			$mensaje .= "</div";
			$mensaje .= "</body>"; 
			$mensaje .= "</html>"; 
			$para      = 'luis.segovia244@gmail.com';
			$titulo    = '! SafeSolutions - Nuevo Juicio !';
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: SafeSolutions<SafeSolutions@safesolutions.com>';

			mail($para, $titulo, $mensaje, $cabeceras);
		
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal({
											title: "SE AGREGO UN NUEVO JUICIO!!",
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
											title: "NO SE PUEDE AGREGAR NU NUEVO JUICIO!!",
											text: "Porfavor intentalo de nuevo...",
											type: "error",
											timer: 2000,
											showConfirmButton: false
											},
											function(isConfirm){
													window.location="add_juicio.php";
												});';
		echo '}, 1000);</script>';
		
		 } 

		 ?>
		
	</body>
</html>