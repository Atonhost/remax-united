<?php

	include "../clases/conexion.class.php";
	include "../clases/basico.php";
// JQuery File Upload Plugin v1.4.1 by RonnieSan - (C)2009 Ronnie Garcia
if (!empty($_FILES)) {
	$fecha=date("d/m/Y");
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_GET['folder'] . '/';
	$var=explode(".",$_FILES['Filedata']['name']);
	$newFileName =  $_GET['id'].".".$var[1];
	$targetFile =  str_replace('//','/',$targetPath) . $newFileName;
  
	// Uncomment the following line if you want to make the directory if it doesn't exist
	mkdir(str_replace('//','/',$targetPath), 0755, true);

		
	move_uploaded_file($tempFile,$targetFile);
	
	$sql2 = "UPDATE profesionales SET  foto='".$newFileName."' where idalumno='".$_GET['id']."'";

	mysql_query($sql2);
	
	
	
}



?>
