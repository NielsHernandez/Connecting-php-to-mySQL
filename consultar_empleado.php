<head>
  <title>Consultar empleados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
//nombre del host, usuario, contrasena, nombre de la base
$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM empleado");

echo "<table class='container'>";
 echo "<thead>";
     echo"<tr>
        <th>Id empleado</th>
        <th>Nombre</th>
        <th>Salario</th>
        <th>Cargo</th>
      </tr>
    </thead>";

while($row = mysqli_fetch_array($result))
{
    
    
    
        
         echo "<tr>";
        echo "<td>" . $row['id_empleado'] . "</td>";
        echo "<td>" . $row['Nombre'] . "</td>";
        echo "<td>" . $row['Salario'] . "</td>";
        echo "<td>" . $row['Cargo'] . "</td>";
      echo "</tr>";
       
}
echo "</table>";



mysqli_close($con);



?>

