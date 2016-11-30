<!DOCTYPE html>
<html>
  <head>
    <title>SafeSolution - Login</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materializze.css"  media="screen,projection"/>
    <!-- Import Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body class="white">
    <div class="section"></div>
    <main>
    <center>
    <img class="responsive-img" style="width: 250px;" src="images/Safe(1).png" />
    <div class="section"></div>
    <h5 class="indigo-text">B I E N V E N I D O</h5>
    <p align="center">Por favor, teclee su usuario y contraseña, para iniciar sesión.</p>
    <div class="section"></div>
    <div class="container">
      <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        <form class="col s12" action="phps/validate_datos.php" method="post">
          <div class='row'>
            <div class='col s12'>
            </div>
          </div>
          
          <div class='row'>
            <div class='input-field col s12'><i class="material-icons left">perm_identity</i>
              <select id="tipo_user" name="tipo_user" required="No puedes dejar ningun campo vacio">
                <option value="">Seleccione tipo de usuario</option>
                <option value="Administrador">Administrador</option>
                <option value="Empleado">Empleado</option>
              </select>
              <label for='icon_prefix2'>Seleccione su tipo de usuario:</label>
            </div>
          </div>
          <div class='row'>
            <div class='input-field col s12'>
              <i class="material-icons left">perm_identity</i>
              <input class="validate" type="text" name="user" id="user"  required="No puedes dejar este campo vacio"   length="15" />
              <label for='icon_prefix2'>Teclee su Usuario</label>
            </div>
          </div>
          <div class='row'>
            <div class='input-field col s12'>
              <i class="material-icons left">vpn_key</i>
              <input class="validate" type="password" name="pass" id="pass"  required="No puedes dejar este campo vacio"  length="15"  />
              <label for='password'>Teclee su Contraseña</label>
            </div>
            
          </div>
          <br />
          <center>
          <div class='row'>
            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'><i class="material-icons right">lock_open</i>Iniciar Sesión</button>
          </div>
          </center>
        </form>
      </div>
    </div>
    </center>
    <div class="section"></div>
    <div class="section"></div>
    </main>
    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
    $(".button-collapse").sideNav();
    $(document).ready(function() {
    $('select').material_select();
    });
    $('select').material_select('destroy');
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
    function redireccionar1(){
    document.location.href='principal.php'
    }
    </script>
  </body>
</html>