<?php
  $mensaje = "";



  $CI =& get_instance();
  if ($_POST){
    $datos = $_POST;
    $datos['ip'] = $_SERVER['REMOTE_ADDR'];

    $CI->db->insert('personas',$datos);
    $mensaje ="registro recibido";
  }
?>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
  </head>
  <body>
    <div class="container" align="left">
      <h3><?php echo $mensaje; ?></h3>
      <h3>Firma con Nosotros</h3>
      <form method="post">
        <div class="row">
          <div class="col col-sm6">
            <div class="form-group input-group">
              <span class="input-group-addon">Cedula</span>
              <input type="number" required class="form-control" name="cedula">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Nombre</span>
              <input type="text" required class="form-control" name="nombre">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Apellido</span>
              <input type="text" required class="form-control" name="apellido">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Telefono</span>
              <input type="tel" class="form-control" name="telefono">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Comentario</span>
              <textarea name="comentario" class="form-control"></textarea>
            </div>
            <div class="text-center">
              <button class="btn btn-success" type="submit">guardar</button>
              <a href="<?php echo base_url('app'); ?>" class="btn btn-info">regresar</a>
            </div>
          </div>
        </div>
        <input  type="hidden" name="latitud" id="lat"/>
        <input  type="hidden" name="longitud" id="lon"/>
      </form>
    </div>
    <script>
      window.onload = function(){
        navigator.geolocation.getCurrentPosition(function(datos){
          document.getElementById('lat').value = datos.coords.latitude;
          document.getElementById('lon').value = datos.coords.longitude;
        });
      }

    </script>
  </body>
</html>
