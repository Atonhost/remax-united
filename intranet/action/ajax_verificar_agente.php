<?php
	include "../../cn/cn.php";
	$correo = $_GET['email'];
	echo $correo;
	$sql = "select * from agentes where correo='mrleonel22@hotmaail.com'";
	$per = mysql_query($sql,$con);
	$num_rs_per = mysql_num_rows($per);
	if($num_rs_per == 0)
		echo "true";
	else
		echo "false";
?>