<?php
	include "../../cn/cn.php";
		
	/*verificamos si las variables se envian*/
	if(empty($_POST['ide_per']) ){
		echo "Usted no a llenado todos los campos";
		exit;
	}
	
     function eliminarDir($carpeta)
    {
    foreach(glob($carpeta . "/*") as $archivos_carpeta)
    {
        
    if (is_dir($archivos_carpeta))
    {
    eliminarDir($archivos_carpeta);
    }
    else
    {
    unlink($archivos_carpeta);
    }
    }
     
    rmdir($carpeta);
    }
	echo $id = $_POST['ide_per'];
	$sql2="SELECT * FROM propiedades WHERE  idpropiedade='$id'";
$result2 = $conn->query($sql2);
$row2=$result2->fetch_assoc();

//eliminamos carpetas
if($result2->num_rows>0)
{
	echo $row2['imagenes'];
	eliminarDir("../../propiedades/".$row2['imagenes']);
	$sql = "delete from propiedades where idpropiedade='$id'";
if($conn->query($sql))
		echo "yes";
}else{
	echo "no";
	}
	

		

?>
