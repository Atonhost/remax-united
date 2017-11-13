<?php
	include "../../cn/cn.php";
	$sql = sprintf("update agentes set estado='0' where id_agente=%d",
		(int)$_POST['ide_per']
	);
	if(!$conn->query($sql))
		echo "Ocurrio un error\n$sql";
	exit;
?>