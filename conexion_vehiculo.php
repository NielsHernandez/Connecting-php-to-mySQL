<?php 
//variables que van a recivir los valores de los formularios html
$id_vehiculo = $_GET['id_vehiculo'];
$Modelo = $_GET['Modelo'];
$Marca = $_GET['Marca'];


try{
	//preparar la base de datos
	$base=new PDO("mysql:host=localhost; dbname=test", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	
	    $sql="INSERT INTO vehiculo(
id_vehiculo,
Modelo, 
Marca


)
VALUES
(
:id_vehiculo,
:Modelo, 
:Marca
)";
		$resultado=$base->prepare($sql);
		$resultado->execute(array(
		
":id_vehiculo"=>$id_vehiculo,
":Modelo"=>$Modelo,
":Marca"=>$Marca


)
);

	
	$resultado->closeCursor();

	}catch(Exception $e){


		die('Error: ' . $e->GetMessage());

	}finally{
echo "<h1> Los datos han sido ingresados</h1>";
echo "<br>".$id_vehiculo;
echo "<br>".$Modelo;
echo "<br>".$Marca;


		$base=null;

	}

 ?>