<?php
  //Datos de la conexion a Mysql 
  $servidor = "localhost";
  $usuario = "root";
  $password = "root";
  $bd = "unisangil";

  $mysql = new mysqli($servidor, $usuario,$password, $bd);
  if($mysql->connect_errno){
    echo "Error al Conectarse con ".$servidor;
    echo "Error :". $mysql->connect_error;
  }

  $sql = "SELECT * FROM estudiantes  ";
  $resultado = $mysql->query($sql);
  //var_dump($resultado);
  if(!$resultado){
    echo "Error al consultar ". $mysql->error;
  }
  

 ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
      <h2>Estudiantes</h2>
      <a href="crear.php" class="btn btn-success">Nuevo</a>
      <table class="table">
        <tr>
          <th>Identificacion</th>
          <th>Nombre Completo</th>
          <th>Correo</th>
          <th>Telefono</th>
        </tr>
        <?php 
          while($estudiante = $resultado->fetch_assoc()){
            //var_dump($estudiante);
         ?>
         <tr>
           <td><?php echo $estudiante['identificacion'] ?></td>
           <td><?php echo $estudiante['nombres'].' '.$estudiante['apellidos'] ?></td>
           <td><?php echo $estudiante['correo'] ?></td>
           <td><?php echo $estudiante['telefono'] ?></td>
         </tr>

         <?php } ?>
      </table>
    </section>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>