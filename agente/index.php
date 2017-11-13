<?php

    function contador()

    {

        $archivo = "contador.txt"; //el archivo que contiene en numero

        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura

        $contador=0;

        if($f)

        {

            $contador = fread($f, filesize($archivo)); //leemos el archivo

            $contador = $contador + 1; //sumamos +1 al contador

            fclose($f);

        }

        $f = fopen($archivo, "w+");

        if($f)

        {

            fwrite($f, $contador);

            fclose($f);

        }

        return $contador;

    }

   $visitante= contador();

   

?>

<!DOCTYPE html>

<html>
		<head>

		<!-- ==============================================

		Title and basic Metas

		=============================================== -->

		<meta charset="utf-8">
		<title>POSTULA REMAX AGENTE</title>
		<meta name="description" content="TU PUEDES SER UN AGENTE REMAX, Porque creemos y confiamos en ti, únete a esta gran familia.RE/MAX United es una red de más de 350 agentes inmobiliarios">
		<meta name="author" content="Remax United">
		<meta property="og:title" content="Ser un Agente RE/MAX UNITED" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://remax-united.com/agente/" />
		<meta property="og:image" content="http://remax-united.com/agente/images/rema_united_agente.png" />
		<meta property="og:description" content="Principal ventaja de recibir las comisiones más altas, desarrollando su negocio con total autonomía. CLICK PARA POSTULAR" />
		<meta property='article:author' content='https://www.facebook.com/remaxunited'>

		<!-- ==============================================

		Mobile Metas

		=============================================== -->

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- ==============================================

		CSS

		=============================================== -->

		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Twitter Bootstrap -->

		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
		<!-- Twitter Bootstrap Responsive -->

		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Font Awesome -->

		<link rel="stylesheet" href="css/flexslider.css">
		<!-- Flexslider -->

		<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css"/>
		<!-- Fancybox -->

		<link rel="stylesheet" href="css/style.css">
		<!-- Main stylesheet -->

		<link rel="stylesheet" href="css/style-responsive.css">
		<!-- Main stylesheet responsive -->

		<!--[if IE 7]>

			<link rel="stylesheet" href="css/font-awesome-ie7.min.css">

		<![endif]-->

		<!--[if lt IE 9]>

			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

		<![endif]-->

		<!-- ==============================================

		Fonts

		=============================================== -->

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic' rel='stylesheet' type='text/css'>
		<!-- ==============================================

		JS

		=============================================== -->

		<script type="text/javascript" src="js/jquery.min.js"></script><!-- jQuery main file -->

		<script type="text/javascript" src="js/jquery.form.js"></script>
		<script type="text/javascript" src="js/jquery.flexslider.min.js"></script><!-- Flexslider -->

		<script type="text/javascript" src="js/jquery.easing.pack.js"></script><!-- Easing for Fancybox -->

		<script type="text/javascript" src="js/jquery.mousewheel.pack.js"></script><!-- Mousewheel for Fancybox -->

		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script><!-- Fancybox -->

		<script type="text/javascript" src="js/jquery.validate.min.js"></script><!-- Form Validation -->

		<script type="text/javascript" src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
		<script type="text/javascript" src="js/attraction.js"></script><!-- Custom JS -->

		<script type="text/javascript">

			$(document).ready(function(){

			$('#emailForm').ajaxForm({

			beforeSubmit: validate,

			success: function(data, statusText, xhr, form) {

				

				$("#loading").fadeTo(200,0.1,function(){

				$(this).html('El email se envio correctamente').fadeTo(900,1);

				});

				setTimeout(function(){document.location='gracias.php';}, 2000);

			}

		});

		

		function validate(formData, jqForm, options) {

			var form = jqForm[0]; 

			if(form.name.value == ""){

				

				form.name.focus();

				return false;

			}else if(form.email.value == ""){

				

				form.email.focus();

				return false;

			}else if(form.phone.value == ""){

				

				form.phone.focus();

				return false;

			}else if(form.address.value == ""){

				

				form.address.focus();

				return false;

			}

			else if(form.field.value == ""){

				

				form.field.focus();

				return false;

			}

			$('#loading').html('Enviando...').show();

		}

	});

	

</script>

		<!-- ==============================================

		Favicons

		=============================================== -->

		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		<style>
#loading {
	background: #F5F5F5;
	border-top: 1px solid #F3F3F3;
	border-bottom: 1px solid #F3F3F3;
	display: none;
	text-align: center;
	margin: 6px 0;
	padding: 5px 0
}
</style>
		</head>

		<body id="top" class="fixed-nav">
 <!-- Google Analytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40105915-2', 'auto');
  ga('send', 'pageview');

</script>

<!-- End Google Analytics -->
<!-- ==============================================

		Header

		=============================================== -->

<section class="header">
          <div class="container">
    <div class="row">
              <div class="span12"> 
        
        <!-- ==============================================

						Logo

						=============================================== -->
        
        <div class="logo float-left"> <a href="#top"> <img src="images/logo.png" alt=""/> </a> </div>
        
        <!-- End Logo 

						=============================================== --> 
        
        <!-- ==============================================

						Navigation

						=============================================== -->
        
        <ul class="nav hidden-phone hidden-tablet">
                  <li><a href="#top">Inicio</a></li>
                  <li><a href="#features">Ventajas</a></li>
                  <li><a href="#testimonials">Testimonios</a></li>
                </ul>
        
        <!-- End Navigation 

						=============================================== --> 
        
        <!-- ==============================================

						Mobile Navigation

						=============================================== -->
        
        <form name="nav" class="float-right">
                  <select class="mobile-nav hidden-desktop" data-autogenerate="true">
          </select>
                </form>
        
        <!-- End Mobile Navigation 

						=============================================== --> 
        
      </div>
            </div>
  </div>
        </section>

<!-- End Header 

		=============================================== --> 

<!-- ==============================================

		Teaser

		=============================================== -->

<section class="teaser">
          <div class="container">
    <div class="row"> 
              
              <!-- ==============================================

					Slider

					=============================================== -->
              
              <div class="span7 offset5">
        <div class="flexslider">
                  <ul class="slides">
                  <li><img src="images/remax_agente_varon.jpg" alt=""/></li>
            <li> <img src="images/remax_agente_creer.jpg" alt=""/> </li>
            <li> <img src="images/teaser-image-1.jpg" alt=""/>
                      <p class="flex-caption">Desarrollar una Carrera Profesional de alto nivel </p>
                    </li>
            <li> <img src="images/remax_agente_unete.png" alt=""/>
                      <p class="flex-caption">Ven y se parte de nuestro equipo</p>
                    </li>
          </ul>
                </div>
      </div>
              
              <!-- End Slider

					=============================================== --> 
              
            </div>
  </div>
        </section>

<!-- End Teaser 

		============================================== --> 

<section class="featured dark-gray-background">
<div class="container">
<div class="row"> 
 <div class="span12" style="text-align: center;">
 <h2>Unete Ahora</h2>
 <p>No pierdas esta oportunidad, postula ahora!</p>
	<form action="send-mail.php" method="post" name="emailForm" id="emailForm" enctype="multipart/form-data">
                  
                  <input name="name" type="text" required class="required" placeholder="Nombres y Apellidos">
                  <input name="email" type="text" required class="required email" placeholder="Correo Electrónico" pattern="^[a-zA-Z0-9.!#$%&amp;'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" /><br>
                  <input name="phone" type="text" required class="required" placeholder="Número Telefónico">
                  <input name="address" type="text" required class="required" placeholder="Distrito"><br>
                 <label for="field">Adjunta tu CV</label>
                 <input name="field" type="file" required class="required" id="field" style="width: 160px;">
                  <input type="submit" value="Postular">
                  <div id="loading"></div>
                </form>
 </div>
 </div>
 </div>
</section>



<!-- ==============================================

		Features

		=============================================== -->

<section class="features light-gray-background" id="features">
          <div class="container">
    <div class="row">
              <div class="span12">
        <h2 class="no-margin-bottom" style="text-align: center;">4 Principales Ventajas de ser AGENTE RE/MAX UNITED</h2>
        <h4 style="text-align: center;">Esto facilita su trabajo, pudiendo en pocos meses alcanzar medias de facturación muy elevadas.</h4>
      </div>
            </div>
    <div class="row"> 
              
              <!-- ==============================================

					First Feature

					=============================================== -->
              
              <div class="span6">
      <div class="modulo fondo_comi">
      <div class="conteni">
      <span class="p_ra" >Gana el máximo de la</span><br>
<span class="p_ra" >Comision que tú</span><br>
<span class="p_ra">Generas (hasta 80%)</span>
</div>
</div>
      </div>
              
              <!-- End First Feature 

					============================================== --> 
              
              <!-- ==============================================

					Second Feature

					=============================================== -->
              
              <div class="span6">
     <div class="modulo fondo_trabajo">
     	<div class="conteni">
     	<span class="p_ra">Libertad e independencia</span><br>
		<span class="p_ra"> para trabajar, con el </span><br>
		<span class="p_ra">respaldo del team </span><br>
		<span class="p_ra">RE/MAX UNITED</span>
     		
     	</div>
     </div>
      </div>
              
              <!-- End Second Feature 

					============================================== --> 
              
            </div>
    <div class="row"> 
              
              <!-- ==============================================

					Third Feature

					=============================================== -->
              
              <div class="span6">
     <div class="modulo fondo_fran">
     <div class="conteni">
     <span class="p_ra">Serás un Agente Asociado al </span><br>
	<span class="p_ra">prestigio y reconocimiento</span><br>
<span class="p_ra">de una marca como RE/MAX</span>
</div>
</div>
      </div>
              
              <!-- End Third Feature 

					============================================== --> 
              
              <!-- ==============================================

					Fourth Feature

					=============================================== -->
              
              <div class="span6">
     <div class="modulo fondo_ofi">
		<div class="conteni">
			<span class="p_ra">Te ofrecemos Oficinas</span><br>
			<span class="p_ra">Corporativas para recibir</span><br>
			<span class="p_ra">clientes y prestar el</span><br>
			<span class="p_ra">mejor servicio</span>
		</div>
     </div>
      </div>
              
              <!-- End Fourth Feature 

					============================================== --> 
              
            </div>
  </div>
        </section>

<!-- End Features 

		============================================== --> 

<!-- ==============================================

		Testimonials

		=============================================== -->

<section class="testimonials gray-background" id="testimonials">
          <div class="container">
    <div class="row">
              <div class="span12">
        <h2 class="no-margin-bottom">Testimonios</h2>
        <h4>Testimonios de Nuestros Agentes RE/MAX UNITED</h4>
      </div>
              
              <!-- ==============================================

					First Testimonial

					=============================================== -->
              
              <div class="span4">
        <div class="bubble"> Con RE/MAX UNITED en pocos meses puedo alcanzar medias de facturación muy elevadas. </div>
        <div class="person"> <img src="images/diana.jpg" alt="diana Pinto" class="float-left">
                  <h3 class="no-margin-bottom">Diana Pinto</h3>
                  <h4>981564510</h4>
                </div>
      </div>
              
              <!-- End First Testimonial

					============================================== --> 
              
              <!-- ==============================================

					Second Testimonial

					=============================================== -->
              
              <div class="span4">
        <div class="bubble"> En RE/MAX UNITED puedo ser dueño de mi propio negocio y controlar mi tiempo. </div>
        <div class="person"> <img src="images/amaia_aramburu.png" alt="amaia aramburu" class="float-left">
                  <h3 class="no-margin-bottom">Amaia Aramburu</h3>
                  <h4>997927920</h4>
                </div>
      </div>
              
              <!-- End Second Testimonial

					============================================== --> 
              
              <!-- ==============================================

					Third Testimonial

					=============================================== -->
              
              <div class="span4">
        <div class="bubble"> Posibilidad de desarrollar una Carrera Profesional de alto nivel con escuela de formación propia. </div>
        <div class="person"> <img src="images/francisco_peralta.jpg" alt="francisco peralta" class="float-left">
                  <h3 class="no-margin-bottom">Francisco Peralta</h3>
                  <h4>961817649 - 981399663</h4>
                </div>
      </div>
              
              <!-- End Third Testimonial

					============================================== --> 
              
            </div>
  </div>
        </section>

<!-- End Testimonials

		============================================== --> 

<!-- ==============================================

		Footer

		=============================================== -->

<section class="footer dark-gray-background">
          <div class="container" style="padding:10px 0;">
    <div class="row">
              <div class="span6">
        <p class="no-margin-bottom"> Av. Arequipa No. 4104, Miraflores<br>
                  (51) 593-6000<br>
                  <a href="mailto:info@remax-united.com">jorges@remax-united.com</a><br>
                  Visitante Número: <?php echo $visitante ; ?> </p>
      </div>
              
              <!-- ==============================================

					Social

					=============================================== -->
              
              <div class="span6">
        <ul class="social float-right">
                  <li><a href="https://plus.google.com/+Remax-united/" target="_blank" title="Remax United en Google plus"><i class="icon-google-plus"></i></a></li>
                  <li><a href="https://twitter.com/remaxunitedperu/" target="_blank" title="Remax United en Twitter"><i class="icon-twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/remaxunitedperu" target="_blank" title="Remax United en Facebook"><i class="icon-facebook"></i></a></li>
                </ul>
        <p class="no-margin-bottom float-right copyright">Copyright &copy; 2015 <a href="http://remax-united.com">Remax United</a>. Todos los Derechos Reservado</p>
      </div>
              
              <!-- End Social

					============================================== --> 
              
            </div>
  </div>
        </section>

<!-- End Footer

		============================================== -->

</body>
</html>