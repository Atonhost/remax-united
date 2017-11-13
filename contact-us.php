<?php 
include 'cn/cn.php';
include 'cn/soap.php'; 
include 'cn/funciones.php';?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Cont&aacute;ctate con nosotros y tendr&aacute;s a tu disposici&oacute;n el mejor equipo de profesionales inmobiliarios.">
<meta name="author" content="Remax United.com">
<meta name="theme-color" content="#05418E" />
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
<title>RE/MAX UNITED | Contactenos</title>
</head>
<?php require_once 'helpers/header.php'; ?>

        <div class="container">

          <div id="main">

            <div class="row">

              <div class="span9">

                <h1 class="page-header">CONTÁCTENOS</h1>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.0780026048687!2d-77.03346528518685!3d-12.106812491427334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c86ac34c3441%3A0x19cfb72040a02426!2sAv.+Arequipa+4104%2C+Lima+15074!5e0!3m2!1ses-419!2spe!4v1449320942322" width="425" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                <p>Contáctate con nosotros y tendrás a tu disposición el mejor equipo de profesionales inmobiliarios.</p>

                <p> ¿Interesado en nuestros servicios, o simplemente tiene una consulta? Utilice el formulario que aparece a continuación </p>

                <div class="row">

                  <div class="span3">

                    <h3 class="address">Dirección</h3>

                    <p class="content-icon-spacing"> Av. Arequipa No. 4104,<br>

                      Miraflores, Lima, Perú.</p>

                  </div>

                  <div class="span3">

                    <h3 class="call-us">Llamanos</h3>

                    <p class="content-icon-spacing"> (51) 593-6000<br>

                    </p>

                  </div>

                  <div class="span3">

                    <h3 class="email">Email</h3>

                    <p class="content-icon-spacing"> <a href="mailto:info@remax-united.com">Contacto Administrativo</a><br>

                      <a href="mailto:maricelac@remax-united.com">Contact Ventas</a> </p>

                  </div>

                </div>

                <h2>Nos encantaría saber de usted. Nos Saluda!</h2>

                <form method="post" class="contact-form" action="?">

                  <div class="name control-group">

                    <label class="control-label" for="inputContactName"> Nombre <span class="form-required" title="This field is required.">*</span> </label>

                    <div class="controls">

                      <input type="text" id="inputContactName">

                    </div>

                    <!-- /.controls --> 

                  </div>

                  <!-- /.control-group -->

                  

                  <div class="email control-group">

                    <label class="control-label" for="inputContactEmail"> Correo <span class="form-required" title="This field is required.">*</span> </label>

                    <div class="controls">

                      <input type="text" id="inputContactEmail">

                    </div>

                    <!-- /.controls --> 

                  </div>

                  <!-- /.control-group -->

                  

                  <div class="control-group">

                    <label class="control-label" for="inputContactMessage"> Mensaje <span class="form-required" title="This field is required.">*</span> </label>

                    <div class="controls">

                      <textarea id="inputContactMessage"></textarea>

                    </div>

                    <!-- /.controls --> 

                  </div>

                  <!-- /.control-group -->

                  

                  <div class="form-actions">

                    <input type="submit" class="btn btn-primary arrow-right" value="Enviar">

                  </div>

                  <!-- /.form-actions -->

                </form>

              </div>

              <div class="sidebar span3">

                <?php require_once 'helpers/widgets/properties.php'; ?>

                <?php require_once 'helpers/widgets/ad.php'; ?>

              </div>

            </div>

          </div>

        </div>

        <?php require_once 'helpers/footer.php'; ?>