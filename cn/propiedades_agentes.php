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
<meta name="author" content="Remax United.com">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
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
            $users = new SimpleXMLElement($agent);
                            $ragente = $users->xpath("/USERS/USER[ID='$id']");
            ?>
                <h1 class="page-header">Propiedades de - <?php echo  $ragente[0]->NOMBRE; ?> <?php echo  $ragente[0]->APELLIDOS; ?>  </h1>

                <?php require_once 'helpers/properties-agentes.php'; ?>
                <?php require_once 'helpers/pagination.php'; ?>
            </div>
            <div class="sidebar span3">

                <div class="widget our-agents" style="border-bottom:4px solid #E41B36;">
                  <div class="title">
                    <h2>Agente</h2>
                  </div>
                  <!-- /.title -->
                  
                  <div class="content">
                  <?php  ;?>
                    <?php
                    
                    
                    
                            foreach( $ragente as $agente ){
                           
                            ?>
                    <div class="agent">
                      <div class="image" style="width: 100%; margin-bottom: 8px;"> 
                      <img src="<?php echo $agente->FOTO_PRINCIPAL; ?>" alt="<?php echo $agente->NOMBRE; ?> <?php echo $agente->APELLIDOS; ?>"style="width: 100%;"> </div>
                      <!-- /.image -->
                      
                      <div class="name"><?php echo $agente->NOMBRE; ?> <?php echo $agente->APELLIDOS; ?></div>
                      <!-- /.name -->
                      <div class="phone"> <i class="fa fa-mobile fa-lg" style="margin-right:8px; "></i><?php echo $agente->CELULAR;?></div>
                      <!-- /.phone -->
                      <div class="email"> <i class="fa fa-envelope-o fa-lg" style="margin-right:8px;"></i><a href="mailto:<?php echo $agente->EMAIL;?>" title="<?php echo $agente->NOMBRE; ?> <?php echo $agente->APELLIDOS; ?>"><?php echo  $agente->EMAIL;?></a></div>
                      <!-- /.email --> 

                    </div>
                    <!-- /.agent -->
                    <?php };?>
                  </div>
                  <!-- /.content --> 
                </div>
                <!-- /.our-agents -->
                <?php require_once 'helpers/widgets/ad.php'; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once 'helpers/footer.php'; ?>