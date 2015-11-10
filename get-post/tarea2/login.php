<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Modal message</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script>
  $(function() {
          $('#dialog').dialog();
    });
  </script>
<style>
  .error{
    color:red;

  }
</style>
</head>
<body>
<?php if (!isset($_POST["nombre"])) : ?>

<div id="dialog" title="LOGIN"  >
  <form action="" method="post">

  nombre: <input type="text"  name="nombre">
  contraseña : <input type="password" name="contraseña">
  <input type=submit value="Acceder">
</form>
</div>
<?php else: ?>
<?php
  $nombre=$_POST["nombre"];
  $contraseña=$_POST["contraseña"];
  if($nombre =="pepe" && $contraseña == "1234"){
    header("refresh:0; url=matricula.php");
    }
    else{
      echo '<div class="error"><h3>Su usuario es incorrecto, intentelo nuevamente</h3></div>';
      header("refresh:3 ; url=login.php");
    }

?>
<?php endif ?>
</body>
</html>
