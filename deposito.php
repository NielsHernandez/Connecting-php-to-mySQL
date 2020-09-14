<!DOCTYPE html>
<html lang="en">
<head>
  <title>Deposito a empleados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Depostios Directos Q.</h2>
  
  <form action="conexion_deposito.php" method="get">

    <div class="form-group">
      <label for="usr">Id del deposito:</label>
      <input type="text" class="form-control" name="id_deposito">
    </div>

    <div class="form-group">
      <label for="pwd">Id el empleado a pagar:</label>
      <input type="text" class="form-control" name="id_empleado">
    </div>

    <div class="form-group">
      <label for="pwd">Id de la planilla a usar:</label>
      <input type="text" class="form-control" name="Id_planilla">
    </div>



  

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

  
  <br>
  <iframe src="consultar_empleado.php" height="100%" width="500" title="consulta_empleado"></iframe>
<br>

<a class="btn btn-primary" href="home.php">Menu principal</a>
</div>

</body>
</html>