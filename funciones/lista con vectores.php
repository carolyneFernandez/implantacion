<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <?php
    function crearlista($v)
    {
        echo "<ul>";

          foreach ($v as $valor) {

          echo " <li>$valor</li>";
          }
      echo "</ul>";

    }
    $data =array(1,2,3,4,5,6);
    $data2=array('A' => 1,'B' => 2);
    crearlista($data2);
    ?>
    </body>
</html>
