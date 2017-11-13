<?php session_start(); ?>
<?php

if ($_SESSION['Xcodigo'] == "" ){
	session_destroy();
	header("Location:index.html");
exit;
}


$Xcodigo=$_SESSION['Xcodigo'];
$Xtipouser=$_SESSION['Xtipouser'] ;
$Xdatos=$_SESSION['Xdatos'] ;
?>
