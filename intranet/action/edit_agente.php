<?php
	include "../../cn/cn.php";
		
	/*verificamos si las variables se envian*/
	if(empty($_GET['usuario']) || empty($_GET['password'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	$id = $_GET['id'];
$sql = "update agentes  set foto='".$_GET['foto']."', password='".$_GET['password']."', nombre='".$_GET['nombre']."', apellidos='".$_GET['apellidos']."', telefono='".$_GET['telefono']."', celular='".$_GET['celular']."', correo='".$_GET['correo']."', tipo='agente', estado='".$_GET['estado']."' where id_agente='$id'";
if($conn->query($sql))
		echo "yes";
?>