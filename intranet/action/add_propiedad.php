<?php session_start(); ?>
<?php
echo $_FILES['fichero']['tmp_name'];
	include "../../cn/cn.php";
	/*verificamos si las variables se envian*/
	if(empty($_GET['titulo']) || empty($_GET['descripcion'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}

	$fecha=date("Y-m-d");
	$sql = "INSERT INTO propiedades VALUES ('','".$_GET['titulo']."','".$_GET['descripcion']."','".$_SESSION['Xcodigo']."', '".$_GET['banos']."', '".$_GET['habitaciones']."', '".$_GET['longi']."', '".$_GET['lati']."','".$_GET['area']."','".$_GET['precio']."','".$_GET['moneda']."','".$_GET['distrito']."','".$_GET['ubicacion']."','".$_GET['foto']."','".$_GET['dir']."','".$_GET['situacion']."','$fecha','".$_GET['estado']."','".$_GET['tipo_pro']."','".$_GET['tipo_cont']."','0','".$_GET['area_con']."','".$_GET['esta']."')";

	if ($conn->query($sql) === TRUE)
	
		echo "yes";
mkdir("../../propiedades/".$_GET['dir'], 0777);
mkdir("../../propiedades/".$_GET['dir']."/files/", 0777);
$archivo = 'indexu.php';
$nuevo_archivo = '../../propiedades/'.$_GET['dir'].'/index.php';
$archivo2 = 'UploadHandler.php';
$nuevo_archivo2 = '../../propiedades/'.$_GET['dir'].'/UploadHandler.php';

if (!copy($archivo, $nuevo_archivo)) {
    echo "Error al copiar $archivo...\n";
}
if (!copy($archivo2, $nuevo_archivo2)) {
    echo "Error al copiar $archivo...\n";
}

?>

