<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <?php
    $numeros = array (5,8,9,32,64,74,100,852,41,3);
    $mayor=0;
    
for ($i=0;$i<sizeof($numeros);$i++){
    if($mayor<$numeros[$i]){
        $mayor=$numeros[$i];
    }
    
}
echo "el mayor es  ".$mayor;
?>


</body>
</html>
