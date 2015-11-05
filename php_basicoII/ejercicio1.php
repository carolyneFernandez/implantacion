<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

</head>

<body>
  <?php
$contador=0;
    $Ciudad=array("San cristobal","Cucuta","Maracaibo","caracas");
    echo "numero de elementos ".sizeof($Ciudad)."<br>";
      for ($i=0;$i<sizeof($Ciudad);$i++) {
      echo "Ciudad  $i"."<br>"."<h1>".$Ciudad[$i]."</h1>";

    }


  ?>

</body>
</html>
