<?php 
//variables que van a recivir los valores de los formularios html
$id_planilla = $_GET['id_planilla'];
$fecha = $_GET['fecha'];
$Total = $_GET['Total'];


try{
	//preparar la base de datos
	$base=new PDO("mysql:host=localhost; dbname=test", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	
	    $sql="INSERT INTO planilla(
id_planilla,
fecha, 
Total


)
VALUES
(
:id_planilla,
:fecha, 
:Total
)";
		$resultado=$base->prepare($sql);
		$resultado->execute(array(
		
":id_planilla"=>$id_planilla,
":fecha"=>$fecha,
":Total"=>$Total


)
);

	
	$resultado->closeCursor();

	}catch(Exception $e){


		die('Error: ' . $e->GetMessage());

	}finally{
echo "<h1> Los datos han sido ingresados</h1>";
echo "<br>".$id_planilla;
echo "<br>".$fecha;
echo "<br>".$Total;


		$base=null;

	}

 ?>