<?php
error_reporting(0);
		$tipo_usuario=$_POST['tipo_user'];
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		include ("conexionBD.php");
		
		$conexion = crearConexion();
		$sqll="SELECT * FROM users WHERE user='{$user}' AND password='{$pass}' AND tipo_usuario='{$tipo_usuario}' LIMIT 1;";
		$resultado = $conexion -> query($sqll);
		$fila = mysqli_fetch_object($resultado);
		$resultado->data_seek(0);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Validando Usuario</title>
		<link rel="shortcut icon" href="../imagdmines/favicon.ico">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script src="../js/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	</head>
	<body>
		<?php
		if ($user==$fila->user and $pass==$fila->password) {
		if ($fila->tipo_usuario=="Administrador") {
			session_start();
			$_SESSION['usuario']=$_POST['user'];
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
						title: "INICIO DE SESION CORRECTAMENTE!!",
						text: "En breve accederas al sistema...",
						type: "success",
						timer: 3000,
						showConfirmButton: false
						},
						function(isConfirm){
								window.location="../admin/principal.php";
							});';
		echo '}, 1000);</script>';
		
		} else {
		session_start();
		$_SESSION['usuario']=$_POST['user'];
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
						title: "INICIO DE SESION CORRECTAMENTE!!",
						text: "En breve accederas al sistema...",
						type: "success",
						timer: 3000,
						showConfirmButton: false
						},
						function(isConfirm){
								window.location="principal.php";
							});';
		echo '}, 1000);</script>';
		}
		
		
		}
		else {
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal({
								title: "ERROOOOR!! CONTRASEÑAS INCORRECTAS O TIPO DE USUARIO INCORRECTO",
								text: "Porfavor intentalo de nuevo...",
								type: "error",
								timer: 3000,
								showConfirmButton: false
								},
								function(isConfirm){
										window.location=" ../index.php";
									});';
		echo '}, 1000);</script>';
		
		}
		
		?>
		
	</body>
</html>