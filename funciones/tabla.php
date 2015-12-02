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
  function print_table($numerodefilas,$numerodecolumnas)
  {
    echo "<table style='border:1px solid black'>";
    for($i=0;$i<$numerodefilas; $i++){
      echo "<tr>";
        for ($j=0;$j<$numerodecolumnas; $j++){
          echo "<td>
          $i,$j
          </td>";
        }
      echo "</tr>";
    }

    echo "</table>";

  }
    print_table(5,20);
  ?>
    </body>
</html>
