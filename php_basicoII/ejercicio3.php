<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <?php
    $nombres = array ('roberto','juan','marta','moria','martin',
'jorge','miriam','nahuel','mirta');
$nombres_con_m = array();
$cadena;
for ($i=0;$i<sizeof($nombres);$i++){
    $cadena=$nombres[$i];
    $cadena=substr($cadena,0,1);
    if ($cadena == 'm') {#buscamos los nombres que en la primera posicion sea m
        array_push($nombres_con_m,$nombres[$i]);#agregamos al array vacio ,todos los nombres que comiensen por m 
    }
}
    
    # para mostrar el vector seria: var_dump($nombres_con_m);
   
 for($a=0;$a<sizeof($nombres_con_m);$a++){
    echo "$nombres_con_m[$a]".",";
}
?>


</body>
</html>
