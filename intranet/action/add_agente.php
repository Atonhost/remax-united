<?php
	include "../../cn/cn.php";
		
	/*verificamos si las variables se envian*/
	if(empty($_GET['usuario']) || empty($_GET['password'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
	$usuario = $_GET['usuario'];
	
	$sql = "select * from agentes where usuario='$usuario' or correo='".$_GET['correo']."'";
	$per = $conn->query($sql);
	$num_rs_per = $per->num_rows;
	if($num_rs_per == 0){
		$fecha=date("Y-m-d");
	$sql = "INSERT INTO agentes (usuario, password, nombre, apellidos, telefono, celular, correo, foto, tipo, estado, fec_ing) VALUES ('".$_GET['usuario']."', '".$_GET['password']."', '".$_GET['nombre']."', '".$_GET['apellidos']."', '".$_GET['telefono']."', '".$_GET['celular']."', '".$_GET['correo']."', '".$_GET['foto']."', 'agente', '".$_GET['estado']."', '".$fecha."')";
	if($conn->query($sql))
		echo "yes";
	}else{
		echo "existe";
	

	exit;
	}
?>