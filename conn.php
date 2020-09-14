<?php 
//variables que van a recivir los valores de los formularios html
$id_empleado = $_GET['id_empleado'];
$id_cargo = $_GET['id_cargo'];
$Nombre = $_GET['Nombre'];
$Apellido = $_GET['Apellido'];
$Salario = $_GET['Salario'];
$Cargo = $_GET['Cargo'];
$Turno = $_GET['Turno'];


try{
	//preparar la base de datos
	$base=new PDO("mysql:host=localhost; dbname=test", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	
	    $sql="INSERT INTO empleado(
id_empleado,
id_cargo, 
Nombre, 
Apellido, 
Salario, 
Cargo, 
Turno 

)
VALUES
(
:id_empleado,
:id_cargo, 
:Nombre, 
:Apellido, 
:Salario, 
:Cargo, 
:Turno
)";
		$resultado=$base->prepare($sql);
		$resultado->execute(array(
		
":id_empleado"=>$id_empleado,
":id_cargo"=>$id_cargo,
":Nombre"=>$Nombre,
":Apellido"=>$Apellido,
":Salario"=>$Salario,
":Cargo"=>$Cargo,
":Turno"=>$Turno

)
);

	
	$resultado->closeCursor();

	}catch(Exception $e){


		die('Error: ' . $e->GetMessage());

	}finally{
echo "<h1> Los datos han sido ingresados</h1>";
echo "<br>".$id_empleado;
echo "<br>".$id_cargo;
echo "<br>".$Nombre;
echo "<br>".$Apellido;
echo "<br>".$Salario;
echo "<br>".$Cargo;
echo "<br>".$Turno;


		$base=null;

	}

 ?>