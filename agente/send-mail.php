<?php
include "../cn/cn.php";
require("classes/class.phpmailer.php");

$success_message = 'Mensaje Enviado'; // Message displayed id the email has been sent successfully

$varname = $_FILES['field']['name'];

        $vartemp = $_FILES['field']['tmp_name'];     

        $mail = new PHPMailer();

        $mail->Host = "localhost";

        $mail->From = $_POST['email'];

        $mail->FromName =  $_POST['name'];

        $mail->Subject = "Postulante Agente";

        $mail->AddAddress("jorges@remax-united.com");

        $mail->AddCC("info@remax-united.com");

        if ($varname != "") {

            $mail->AddAttachment($vartemp, $varname);

        }

        $body = "<strong>Mensaje</strong><br><br>";

        $body.= $_POST['name']."<br>";

        $body.= $_POST['phone']."<br>";

        $body.= $_POST['email']."<br>";

        $body.= $_POST['address']."<br>";

        $mail->Body = $body;

        $mail->IsHTML(true);

 		
 		$fecha=date("Y-m-d");
        $sql = "INSERT INTO post_agente (nombre, correo, telefono, distrito, sexo, cv, fec_ing, estado) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['address']."', '', '',  '$fecha', '1')";
        
		
		if ($conn->query($sql) === TRUE) {
			$mail->Send();
			echo($success_message);
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

$conn->close();

?>