<?php 

session_start();

//conexion a base de datos con clases

include "../cn/cn.php";

if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:index.html");
}	


//recepcion de las variables del formulario login 
$user_name=htmlspecialchars($_GET['usuario'],ENT_QUOTES);
//$pass=md5($_POST['password']); // para claves creadas con md5
$pass=$_GET['password'];

//validacion de administrador 

$sql="SELECT * FROM agentes WHERE usuario='".$user_name."' and estado='1'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
//si el usuario es correcto verificamos la contraseña
if ($result->num_rows > 0) {
	//comparamos la contraseña
	if(strcmp($row['password'],$pass)==0)
	{
		echo "yes";
		
	//creamos la variable de session	
$_SESSION['Xdatos'] =$row['usuario'];
$_SESSION['Xnombre']=$row['nombre'];
$_SESSION['Xapellidos']=$row['apellidos']; 
$_SESSION['Xtipouser'] = $row['tipo'];
$_SESSION['Xcodigo'] = $row['id_agente'];
//	$idusu = $row['idusuario'];
//	$tipousu=$row['tipo_usuario'];
//	$ip = $_SERVER['REMOTE_ADDR'];
//	$fecha_reg=	date("j-m-Y");
//	$hora_reg=	date("H:i:s");
		}
	
	else
		echo "no"; 
}
else
	echo "no"; //login incorrecto


?>