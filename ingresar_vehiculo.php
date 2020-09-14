<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ingresar Vehiculos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vehiculos</h2>
  
  <form action="conexion_vehiculo.php" method="get">

    <div class="form-group">
      <label for="usr">placa vehiculo:</label>
      <input type="text" class="form-control" name="id_vehiculo">
    </div>

    <div class="form-group">
      <label for="pwd">modelo:</label>
      <input type="text" class="form-control" name="Modelo">
    </div>

  

    <div class="form-group">
  <label for="sel1">marca:</label>
  <select class="form-control" name="Marca">
    <option>Toyota</option>
    <option>Honda</option>
    <option>Mazda</option>
  </select>
</div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>

</body>
</html>