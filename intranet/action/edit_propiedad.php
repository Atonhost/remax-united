<?php session_start(); ?>
<?php

	include "../../cn/cn.php";
		
	/*verificamos si las variables se envian*/
	if(empty($_GET['titulo']) || empty($_GET['descripcion'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	$id = $_GET['id'];

$sql = "update  propiedades  set esta='".$_GET['esta']."', titulo='".$_GET['titulo']."', descripcion='".$_GET['descripcion']."',  banos='".$_GET['banos']."', habitaciones='".$_GET['habitaciones']."', longi='".$_GET['longi']."', lati='".$_GET['lati']."', area='".$_GET['area']."', precio='".$_GET['precio']."', moneda='".$_GET['moneda']."', distrito='".$_GET['distrito']."', ubicacion='".$_GET['ubicacion']."', img_des='".$_GET['foto']."', situacion='".$_GET['situacion']."', estado='".$_GET['estado']."', idtipo_propiedade='".$_GET['tipo_pro']."', idtipo_contrato='".$_GET['tipo_cont']."',  area_con='".$_GET['area_con']."' where idpropiedade='$id'";
if ($conn->query($sql) === TRUE)
		echo "yes";
		exit;
?>