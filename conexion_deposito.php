<?php 
//variables que van a recivir los valores de los formularios html
$id_deposito = $_GET['id_deposito'];
$id_empleado = $_GET['id_empleado'];
$Id_planilla = $_GET['Id_planilla'];

try{
	//preparar la base de datos
	$base=new PDO("mysql:host=localhost; dbname=test", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	    $sql="INSERT INTO deposito(
id_deposito,
id_empleado, 
Id_planilla


)
VALUES
(
:id_deposito,
:id_empleado, 
:Id_planilla
)";
		$resultado=$base->prepare($sql);
		$resultado->execute(array(
		
":id_deposito"=>$id_deposito,
":id_empleado"=>$id_empleado,
":Id_planilla"=>$Id_planilla


)
);

	
	$resultado->closeCursor();

	}catch(Exception $e){


		die('Error: ' . $e->GetMessage());

	}finally{
echo "<h1> Se ha generado un pago detalles:</h1>";
echo "<br>".$id_deposito;
echo "<br>".$id_empleado;
echo "<br>".$Id_planilla;

		$base=null;
	}
 ?>