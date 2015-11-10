<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
img {
  width: 250px;
  height: 250px;
}
div{
  float: left;
  margin-right:20px;
}
.segundo  {
   margin: 15px;
}
</style>
    </head>
    <body>
      <?php

      $alumno=[
            array(
                  "Nombre"=>"Juana",
                  "Apellido"=>"Figueroa",
                  "Dni"=>"75963200L",
                  "Direccion"=>"jr.ancash 16",
                  "telefono"=>893240025,
                  "email"=>"juan@hotmail.com",
                  "foto"=>"<img src='imagenes/1.jpg' />"
                  ),
              array(
                    "Nombre"=>"Erica",
                    "Apellido"=>"Rodriguez",
                    "Dni"=>"77596322P",
                    "Direccion"=>"jr.puno 54",
                    "telefono"=>993240024,
                    "email"=>"pepe@hotmail.com",
                    "foto"=>"<img src='imagenes/2.jpg' />"
                ),
              array(
                    "Nombre"=>"Alva",
                    "Apellido"=>"Martinez",
                    "Dni"=>"65874269N",
                    "Direccion"=>"calle el agustino numero 5",
                    "telefono"=>99658241,
                    "email"=>"alva@hotmail.com",
                    "foto"=>"<img src='imagenes/3.jpg' />"
                  ),
              array(
                    "Nombre"=>"Rosario",
                    "Apellido"=>"Merino",
                    "Dni"=>"88744396P",
                    "Direccion"=>"carretera sevilla-lora 54",
                    "telefono"=>993244085,
                    "email"=>"Rosario-lope@hotmail.com",
                    "foto"=>"<img src='imagenes/4.jpg' />"
                      ),
              array(
                    "Nombre"=>"Karla",
                    "Apellido"=>"Gonzales",
                    "Dni"=>"552496314A",
                    "Direccion"=>"carretera sevilla-lora 87",
                    "telefono"=>986940027,
                    "email"=>"karla.45@hotmail.com",
                    "foto"=>"<img src='imagenes/5.jpg' />"
                              ),
              array(
                    "Nombre"=>"Carlos",
                    "Apellido"=>"Nieto",
                    "Dni"=>"55555596A",
                  "Direccion"=>"calle juan jimenez 45",
                  "telefono"=>687423986,
                    "email"=>"carlos-l@gmail.com",
                    "foto"=>"<img src='imagenes/6.jpg' />"
                            ),
              array(
                    "Nombre"=>"Dulce",
                    "Apellido"=>"Cotorra",
                    "Dni"=>"87596314J",
                    "Direccion"=>"urbanizacion maria piso 4",
                    "telefono"=>997451369,
                    "email"=>"la.nena.45@hotmail.com",
                    "foto"=>"<img src='imagenes/7.jpg' />"
                          ),
                  array(
                    "Nombre"=>"paco",
                    "Apellido"=>"saco",
                    "Dni"=>"12345678K",
                    "Direccion"=>"urbanizacion el nuevo piso 5",
                    "telefono"=>896325749,
                    "email"=>"pakito@hotmail.com",
                    "foto"=>"<img src='imagenes/8.jpg' />"
                      ),
                  array(
                      "Nombre"=>"Dolores",
                      "Apellido"=>"Garcia",
                        "Dni"=>"87596318J",
                      "Direccion"=>"frente al rio 4",
                      "telefono"=>52136974,
                    "email"=>"midolores.ay@hotmail.comm",
                    "foto"=>"<img src='imagenes/9.jpg'  />"
                  ),

                array(
                    "Nombre"=>"Ines",
                    "Apellido"=>"Cotorra",
                    "Dni"=>"42366577H",
                    "Direccion"=>"urbanizacion maria piso 4",
                  "telefono"=>997451369,
                    "email"=>"ines.lspw@hotmail.com",
                    "foto"=>"<img src='imagenes/10.jpg'  />"
                    )
    ];



echo "<div>";
echo $alumno[$_GET["id"]]["foto"];
echo "</div >";

echo "<div>";


echo "<h2>" ."<b>".$alumno[$_GET["id"]]["Nombre"]." "."</b>";
echo "<b>".$alumno[$_GET["id"]]["Apellido"]."</b>"."</h2>";
echo "Estudiante de 2ASIR del I.E.S Triana<br>";
echo "<div class ='segundo'>";
  echo "<b>"."Contacto de Informacion"."</b>"."<br>";
  echo "<font color='#886A08'>Dni :  </font>";
  echo $alumno[$_GET["id"]]["Dni"]."<br>";
  echo "<font color='#886A08'>Direccion :  </font>";
  echo $alumno[$_GET["id"]]["Direccion"]."<br>";
  echo "<font color='#886A08'>Telefono :  </font>";

  echo $alumno[$_GET["id"]]["telefono"]."<br>";
    echo "<font color='#886A08'>Email :  </font>";
  echo $alumno[$_GET["id"]]["email"]."<br>";
    echo "<font color='#886A08'>Telefono :  </font>";
  echo $alumno[$_GET["id"]]["telefono"]."<br>";

echo "</div>";

echo "</div >";

  //$datos = $alumno[$_GET["id"]]["foto"]; para meterlo a la variable y luego mostrarla
  //echo "$datos";

?>




    </body>
</html>
