<?php 
include ("Logeado.php");
?>
<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SafeSolutions - Agenda</title>
    <link rel="shortcut icon" href="../images/favicon.ico">

    
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Import Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
	<link href='../css/bootstrap.css' rel='stylesheet' />


	
	<!-- FullCalendar -->
	<link href='../css/fullcalendar.css' rel='stylesheet' />




    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	#calendar {
		max-width: 100%;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
            <a href="#!" class="brand-logo"><img  src="../images/Safe(1).png"></a>
                <button type="button" class="btn btn-default" hre ><a href="principal.php">Regresar</a></button>
                <h1>A G E N D A</h1><br>
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo de Evento</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color de Evento</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Seleccione un color</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Cumpleaños</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Traer documentos</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Evento de Juicio</option>
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Cita en la Oficina</option>
						  <option style="color:#000;" value="#000">&#9724; Vencimiento</option>	
<!-- 						  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Cita en la Oficina</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option> -->
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Inicio del Evento:</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Final del Evento</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
				
			  </div>
			  					 <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Hora del Evento</label>
					<div class="col-sm-3">
					   <select name="hora" class="form-control" id="hora">
					   <option value="" disabled selected>Hora</option>
					    	  <option value="00">00</option>
						  	  <option value="01">01</option>
						      <option value="02">02</option>
						      <option value="03">03</option>
						      <option value="04">04</option>
						      <option value="05">05</option>
						      <option value="06">06</option>
						      <option value="07">07</option>
						      <option value="08">08</option>
						      <option value="09">09</option>
						      <option value="10">10</option>
						      <option value="11">11</option>
						      <option value="12">12</option>   
						  
						</select>
					</div>
					<div class="col-sm-3">
					   <select name="minutos" class="form-control" id="minutos">
					   <option value="" disabled selected>Minutos</option>
						  	  <option value="00">00</option>
						      <option value="01">01</option>
						      <option value="02">02</option>
						      <option value="03">03</option>
						      <option value="04">04</option>
						      <option value="05">05</option>
						      <option value="06">06</option>
						      <option value="07">07</option>
						      <option value="08">08</option>
						      <option value="09">09</option>
						      <option value="10">10</option>
						      <option value="11">11</option>
						      <option value="12">12</option>     
						      <option value="13">13</option>
						      <option value="14">14</option>
						      <option value="15">15</option>
						      <option value="16">16</option>
						      <option value="17">17</option>
						      <option value="18">18</option>
						      <option value="19">19</option>
						      <option value="20">20</option>
						      <option value="21">21</option>
						      <option value="21">22</option>
						      <option value="23">23</option>
						      <option value="24">24</option>
						      <option value="25">25</option>
						      <option value="26">26</option>
						      <option value="27">27</option>
						      <option value="28">28</option>
						      <option value="29">29</option>
						      <option value="30">30</option>
						      <option value="31">31</option>
						      <option value="32">32</option>     
						      <option value="33">33</option>
						      <option value="34">34</option>
						      <option value="35">35</option>
						      <option value="36">36</option>
						      <option value="37">37</option>
						      <option value="38">38</option>
						      <option value="39">39</option>
						      <option value="40">40</option>
						      <option value="41">41</option>
						      <option value="42">42</option>
						      <option value="43">43</option>
						      <option value="44">44</option>
						      <option value="45">45</option>
						      <option value="46">46</option>
						      <option value="47">47</option>
						      <option value="48">48</option>
						      <option value="49">49</option>
						      <option value="50">50</option>
						      <option value="51">51</option>
						      <option value="52">52</option>     
						      <option value="53">53</option>
						      <option value="54">54</option>
						      <option value="55">55</option>
						      <option value="56">56</option>
						      <option value="57">57</option>
						      <option value="58">58</option>
						      <option value="59">59</option>
						  
						</select>
					</div>
					<div class="col-sm-3">
					   <select name="tipo_hora" class="form-control" id="tipo_hora">
					   <option value="" disabled selected>AM/PM</option>
						  	  <option value="AM">AM</option>
      						  <option value="PM">PM</option>
						  
						</select>
					</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar Evento</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Editar Evento</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo del Evento</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color del Evento</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Selecciona un color</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Cumpleaños</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Traer documentos</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Evento de Juicio</option>
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Cita en la Oficina</option>
						  <option style="color:#000;" value="#000">&#9724; Vencimiento</option>					  
						 <!--  <option style="color:#FFD700;" value="#FFD700">&#9724; Cita en la Oficina</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option> -->
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Hora del Evento</label>
					<div class="col-sm-3">
					   <select name="hora" class="form-control" id="hora">
					   <option value="" disabled selected>Hora</option>
					    	  <option value="00">00</option>
						  	  <option value="01">01</option>
						      <option value="02">02</option>
						      <option value="03">03</option>
						      <option value="04">04</option>
						      <option value="05">05</option>
						      <option value="06">06</option>
						      <option value="07">07</option>
						      <option value="08">08</option>
						      <option value="09">09</option>
						      <option value="10">10</option>
						      <option value="11">11</option>
						      <option value="12">12</option>   
						  
						</select>
					</div>
					<div class="col-sm-3">
					   <select name="minutos" class="form-control" id="minutos">
					   <option value="" disabled selected>Minutos</option>
						  	  <option value="00">00</option>
						      <option value="01">01</option>
						      <option value="02">02</option>
						      <option value="03">03</option>
						      <option value="04">04</option>
						      <option value="05">05</option>
						      <option value="06">06</option>
						      <option value="07">07</option>
						      <option value="08">08</option>
						      <option value="09">09</option>
						      <option value="10">10</option>
						      <option value="11">11</option>
						      <option value="12">12</option>     
						      <option value="13">13</option>
						      <option value="14">14</option>
						      <option value="15">15</option>
						      <option value="16">16</option>
						      <option value="17">17</option>
						      <option value="18">18</option>
						      <option value="19">19</option>
						      <option value="20">20</option>
						      <option value="21">21</option>
						      <option value="21">22</option>
						      <option value="23">23</option>
						      <option value="24">24</option>
						      <option value="25">25</option>
						      <option value="26">26</option>
						      <option value="27">27</option>
						      <option value="28">28</option>
						      <option value="29">29</option>
						      <option value="30">30</option>
						      <option value="31">31</option>
						      <option value="32">32</option>     
						      <option value="33">33</option>
						      <option value="34">34</option>
						      <option value="35">35</option>
						      <option value="36">36</option>
						      <option value="37">37</option>
						      <option value="38">38</option>
						      <option value="39">39</option>
						      <option value="40">40</option>
						      <option value="41">41</option>
						      <option value="42">42</option>
						      <option value="43">43</option>
						      <option value="44">44</option>
						      <option value="45">45</option>
						      <option value="46">46</option>
						      <option value="47">47</option>
						      <option value="48">48</option>
						      <option value="49">49</option>
						      <option value="50">50</option>
						      <option value="51">51</option>
						      <option value="52">52</option>     
						      <option value="53">53</option>
						      <option value="54">54</option>
						      <option value="55">55</option>
						      <option value="56">56</option>
						      <option value="57">57</option>
						      <option value="58">58</option>
						      <option value="59">59</option>
						  
						</select>
					</div>
					<div class="col-sm-3">
					   <select name="tipo_hora" class="form-control" id="tipo_hora">
					   <option value="" disabled selected>AM/PM</option>
						  	  <option value="AM">AM</option>
      						  <option value="PM">PM</option>
						  
						</select>
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Eliminar evento</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar Cambios</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->
    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='../js/moment.min.js'></script>
	<script src='../js/fullcalendar.min.js'></script>

	
	<script>

	$(document).ready(function() {

		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: moment() ,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Guardado');
					}else{
						alert('No se pudo Actualizar el evento. Porfavor intenta de nuevo.'); 
					}
				}
			});
		}
		
	});

</script>

</body>

</html>
