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
      <h2>Nuevo Estudiante</h2>
      
        <form method="POST" action="guardar.php" class="form">
        <div class="form-group ">
          <label>Identificacion</label>
          <input type="text" name="identificacion" class="form-control" required>
        </div>
        <div class="form-group ">
          <label>Nombres</label>
          <input type="text" name="nombres" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Apellidos</label>
          <input type="text" name="apellidos" class="form-control" required>
        </div>
        <div class="form-group ">
          <label>Correo</label>
          <input type="text" name="correo" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Telefono</label>
          <input type="text" name="telefono" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
      </form>
   
      
    </section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>