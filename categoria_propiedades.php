<?php 
include 'cn/cn.php'; 
include 'cn/soap.php'; 
include 'cn/funciones.php'; 

$id= $_GET['id'];
if(empty($_GET['id'])){
        echo "Selecciones Propiedad";
        header("Location:index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Alquiler, compra y venta de inmuebles en Perú: encuentra aquí RE/MAX UNITED">
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
<title>RE/MAX UNITED | Buscar Propiedad</title>
</head>
<?php require_once 'helpers/header.php'; ?>

<div class="container">

    <div id="main">
        <div class="row">
            <div class="span9">
            <?php
                            $cate= $soap->getTypeCategory();
                            $type = new SimpleXMLElement($cate);
                            $rtype = $type->xpath("/TYPE-CATEGORYS/TYPE-CATEGORY[ID='$id']");
                            ?>                           

                   <h1 class="page-header">Propiedades - <?php echo  $rtype[0]->NOMBRE; ?> </h1>

                <?php require_once 'helpers/cate-propiedades.php'; ?>
                <?php require_once 'helpers/pagination.php'; ?>
            </div>
            <div class="sidebar span3">
                <?php require_once 'helpers/widgets/our-agents.php'; ?>
                <?php require_once 'helpers/widgets/ad.php'; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once 'helpers/footer.php'; ?>