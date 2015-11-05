<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

</head>

<body>
    <table border="1" >
      
  <?php
  $uno = array("22222222X"=> "Pepe","33333333X"  => "Manuel","44444444-X" => "Jose","55555555X" => "Rosa");
  $dos = array("22222222X"=> "Perez","33333333X"  => "Jimenez","44444444-X" => "Martinez","55555555X" => "Rodriguez");
  foreach ($uno as $k => $v) {
         echo "<tr><td> $v</td>"."<td> $dos[$k]</td></tr> ";

       }
//$k es el valor 2222.... y $v seria el array uno

?>
</table>
</body>
</html>
