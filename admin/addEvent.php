<?php

// Connexion à la base de données
require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];
	$hora = $_POST['hora'];
	$minutos = $_POST['minutos'];
	$tipo_hora = $_POST['tipo_hora'];

	$horaFinal = $hora.":".$minutos." ".$tipo_hora;


	$titlee = $horaFinal." ".$title;

	$sql = "INSERT INTO events(title, start, end, color) values ('$titlee', '$start', '$end', '$color')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: agenda.php');
//header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
