<?php
	include "../../cn/cn.php";
	
	/*verificamos si las variables se envian*/
//	if(empty($_GET['facebook']) || empty($_GET['google']) || empty($_GET['twitter'])){
//		echo "Usted no a llenado todos los campos";
//		exit;
//	}
	
	/*modificar el registro*/

	$sql = "UPDATE social SET  url='".$_GET['facebook']."' where nombre='Facebook'";
	if($conn->query($sql))
		echo "yes";
?>