<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include 'producto/conexion.php';
	$sentencia = $bd->prepare("DELETE FROM producto WHERE id = ?;");
	$resultado = $sentencia->execute([$id]);

	if ($resultado === TRUE) {
		header('Location: inventory.php');
	}else{
		echo "Error";
	}

?>