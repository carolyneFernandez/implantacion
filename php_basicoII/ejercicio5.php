<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <?php
    $i=0;
    $elementos=0;
    $v=[];
    while($elementos < 10){
       //echo "valor i: ".$i."<br>";
        if($i%77==0){
            $v[$elementos]=$i;
            $elementos++;
            //echo "valor elemento: ".$elementos."<br>";
        }
        $i++;
    }
    for($j=0;$j<sizeof($v);$j++){
        echo $v[$j]."<br>";
    }

?>


</body>
</html>
