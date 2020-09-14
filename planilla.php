<!DOCTYPE HTML>
<html>
<head>
  <title>Ingresar empleado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>  
<body>
	<div class="container">

<form action="conn.php" method="get">


id_empleado: <input class="form-control" type="text" name="id_empleado"><br>
id_cargo: <input class="form-control" type="text" name="id_cargo"><br>
Nombre: <input class="form-control" type="text" name="Nombre"><br>
Apellido: <input class="form-control" type="text" name="Apellido"><br>
Salario: <input class="form-control" type="text" name="Salario"><br>
Cargo: <input class="form-control" type="text" name="Cargo"><br>
Turno: <input class="form-control" type="text" name="Turno"><br>
<button type="submit" class="btn btn-primary">Guardar</button>

</form>
</div>
</body>
</html>