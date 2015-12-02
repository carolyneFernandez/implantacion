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
      function media($v){
        $sum=0;
        for ($i=0; $i <sizeof($v) ; $i++) {
          $sum+=$v[$i];
        }
        return $sum/sizeof($v);
      }


      $data=array(13,54,58,8,5,2 );
      echo "la media es ". media($data);
       ?>
    </body>
</html>
