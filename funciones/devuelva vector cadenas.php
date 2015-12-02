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
    function contiene($cadena,$valor){

      for ($i=0;$i<sizeof($cadena);$i++){
          if ($cadena[$i] == $valor) {
            return true;
          }

      }
      return false;
    }
    $nombres =array("ana","maria");
    if (contiene($nombres,'sa')){
        echo 'la palabra esta ';
    } else{
      echo 'no esta';
    }
    ?>
    </body>
</html>
