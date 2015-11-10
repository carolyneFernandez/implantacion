<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
    .input {

      margin-left: 10px;
    }
    .primero{
      border:3px dashed;
      border-color: blue;
      background-color: #A9D0F5;

    }
.nom{
  color:red;
}
    </style>

    </head>
    <body>
      <script type="text/javascript" src=" "></script>
    </body>
    <?php if (!isset($_POST["dni"])) : ?>

      <form action="matricula.php" method="post">
     <caption class="primero"><center><b>Matricula</b></center></caption>
    <fieldset class="primero">
        <legend class="nom"><b>Datos personales(*)</b></legend><BR>
         <table style="100%">
                    <tr>
                        <td>NOMBRE:<br><input type="texto" name="nombre" required></td>
                          </tr>
              <tr>
                        <td>APELLIDO:<br><input type="texto" name="apellido" required></td>
               </tr>
              <tr>
                        <td>DNI:<br><input type="texto" name="dni" required></td>
          </tr>
              <tr>
                        <td>TELEFONO:<br><input type="texto" name="telefono" required></td>
          </tr>
              <tr>
                        <td>E-MAIL:<br><input type="texto" name="e-mail" ></td>
                    </tr>
                    <tr>
                              <td>DOMICILIO :<br><input type="texto" name="casa" ></td>
                          </tr>
             </table>
                </fieldset>
                <fieldset class="primero">
                  <legend class="nom">
                    <b>Año  que Cursa:</b>
                  </legend>
                  <input type="radio" name=curso value="1º año" required>1º Año<br>
                  <input type="radio" name=curso value="2º año" required>2º Año<br>
                  <p>
                    <b>Solicita beca</b>
                  </p>
                    <input type="radio" name="beca" value="si" required >si<br>
                    <input type="radio" name ="beca" value="no" required >No<br>
                </fieldset>

         <fieldset class="primero">
        <legend class="nom"><b>Asignaturas :</b> </legend>

               <table style="100%">
                 <p>
                   Primer año
                 </p>
                 <input type="checkbox" name="asignatura[]" value="Lenguaje de marcas">Lenguaje de Marcas<br>
                 <input type="checkbox" name="asignatura[]" value="Sistema operativo">Sistema Operativo<br>
                 <input type="checkbox" name="asignatura[]" value="Redes">Redes<br>
                  <input type="checkbox" name="asignatura[]" value="Harware">Harware<br>
                 <input type="checkbox" name="asignatura[]" value="FOL">Fol<br>
                    <input type="checkbox" name="asignatura[]" value="Base de datos">Base de Datos<br>
                 <p>
                   Seguno año
                 </p>
                   <input type="checkbox" name="asignatura[]" value="Implantacion">Implantacion<br>
                   <input type="checkbox" name="asignatura[]" value="Sistema operativo 2">Sistema Operativo<br>
                   <input type="checkbox" name="asignatura[]" value="Seguridad">Seguridad<br>
                <input type="checkbox" name="asignatura[]" value="Redes">Redes<br>
                   <input type="checkbox" name="asignatura[]" value="Empresa">Empresa<br>
                      <input type="checkbox" name="asignatura[]" value="Base de  datos 2">Base de Datos<br>

       </table><br>
        <input type="reset"><br><br>
        <input type="submit">
        </form>



  <?php else:

    if (isset($_POST["asignatura"])) {
      echo "<H3>Resumen de la Matricula</H3>";
      echo "<B>Nombre:</B>";
      echo $_POST['nombre']."<br>";
        echo "<B>Apellido:</B>";
      echo $_POST['apellido']."<br>";
        echo "<B>DNI:</B>";
      echo $_POST['dni']."<br>";
        echo "<B>Telefono : </B>";
      echo  $_POST['telefono']."<br>";
        echo "<B>Correo Electronico: </B>";
       echo  $_POST['e-mail']."<br>";
         echo "<B>Direccion : </B>";
     echo  $_POST['casa']."<br>";
       echo "<B>Curso: </B>";
  echo  $_POST['curso']."<br>";
  echo "<B>Asignaturas:</B>"."<br>";
  $asignaturas=$_POST['asignatura'];
  for($i=0; $i<sizeof($asignaturas); $i++){

  echo "$asignaturas[$i]"."<br>";

  }
  echo "<B>Ha solicitado Beca: </B>";
  echo  $_POST['beca']."<br>";

    }
    else{
       echo "<font color='red'>No has seleccionado ninguna asignatura *  </font>";
      echo "<form action='matricula.php' method='post'>
     <caption class='primero'><center><b>Matricula</b></center></caption>
     <fieldset class='primero'>
        <legend class='nom'><b>Datos personales(*)</b></legend><BR>
       <table style='100%'><tr>
                         <td>NOMBRE:<br><input type='texto' name='nombre' required></td>
                           </tr>
               <tr>
                         <td>APELLIDO:<br><input type='texto' name='apellido' required></td>
                </tr>
               <tr>
                         <td>DNI:<br><input type='texto' name='dni' required></td>
           </tr>
               <tr>
                         <td>TELEFONO:<br><input type='texto' name='telefono' required></td>
           </tr>
               <tr>
                         <td>E-MAIL:<br><input type='texto' name='e-mail' ></td>
                     </tr>
                     <tr>
                               <td>DOMICILIO :<br><input type='texto' name='casa' ></td>
                           </tr>
              </table>
            </fieldset>
                <fieldset class='primero'>
                   <legend class='nom'>
                     <b>Año  que Cursa:</b>
                   </legend>
                   <input type='radio' name=curso value='1º año' required>1º Año<br>
                   <input type='radio' name=curso value='2º año' required>2º Año<br>
                   <p>
                     <b>Solicita beca</b>
                   </p>
                     <input type='radio' name='beca' value='si'required >si<br>
                     <input type='radio' name ='beca' value='no' required  >No<br>
                 </fieldset>

          <fieldset class='primero'>
         <legend class='nom'><b>Asignaturas :</b> </legend>

                <table style='100%''>
                  <p>
                    Primer año
                  </p>
                  <input type='checkbox' name='asignatura[]' value='Lenguaje de marcas'>Lenguaje de Marcas<br>
                  <input type='checkbox' name='asignatura[]' value='Sistema operativo'>Sistema Operativo<br>
                  <input type='checkbox' name='asignatura[]' value='Redes'>Redes<br>
     <input type='checkbox' name='hardware'>Harware<br>
                  <input type='checkbox' name='asignatura[]' value='FOL'>Fol<br>
                  <input type='checkbox' name='asignatura[]' value='Base de datos'>Base de Datos<br>
                  <p>
                    Seguno año
                  </p>
                    <input type='checkbox' name='asignatura[]' value='Implantacion'>Implantacion<br>
                    <input type='checkbox' name='asignatura[]' value='Sistema operativo 2'>Sistema Operativo<br>
                    <input type='checkbox' name='asignatura[]' value='Seguridad'>Seguridad<br>
                 <input type='checkbox' name='asignatura[]' value='Redes'>Redes<br>
                    <input type='checkbox' name='asignatura[]' value='Empresa'>Empresa<br>
                       <input type='checkbox' name='asignatura[]' value='Base de  datos 2'>Base de Datos<br>

        </table><br>
         <input type='reset'><br><br>
         <input type='submit'>
       </fieldset>
     </form>";
}
    ?>

  <?php endif ?>

</html>
