<?php 
include 'cn/cn.php';
include 'cn/soap.php';
include 'cn/funciones.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="¡Sé un Agente Inmobiliario en Re/Max United! Cambia tu destino y únete a la red más grande Agentes Inmobiliarios a nivel mundial.">
<meta name="theme-color" content="#05418E" />
<meta name="author" content="Remax-United">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap-responsive.css" type="text/css">
<link rel="stylesheet" href="assets/libraries/chosen/chosen.css" type="text/css">
<link rel="stylesheet" href="assets/libraries/bootstrap-fileupload/bootstrap-fileupload.css" type="text/css">
<link rel="stylesheet" href="assets/libraries/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/realia-blue.css" type="text/css" id="color-variant-default">
<link rel="stylesheet" href="#" type="text/css" id="color-variant">
<title>RE/MAX UNITED | Nuestros Agentes</title>
</head>
<?php require_once 'helpers/header.php'; ?>

<div class="container">
    <div>
        <div id="main">
            <?php require_once 'helpers/our-agents.php'; ?>
        </div>
    </div>
</div>

<?php require_once 'helpers/footer.php'; ?>