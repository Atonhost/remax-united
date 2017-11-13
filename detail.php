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
			
	$quedeta = "SELECT * FROM propiedades where estado='1' and idpropiedade='$id ' ";
$resdeta = $conn->query($quedeta);
if ($resdeta->num_rows > 0) {
    // output data of each row
    while($rowdeta = $resdeta->fetch_assoc()) {?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo getSubString($rowdeta['descripcion'], 150);?>">
<meta name="theme-color" content="#05418E" />
<meta name="author" content="Remax-United.com">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

<meta property="og:title" content="<?php echo getSubString(ucwords(strtolower($rowdeta['titulo'])),80);?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://<?php echo dameURL();?>" />
<meta property="og:image" content="propiedades/files/<?php echo $rowdeta['img_des'];?>" />
<meta property="og:description" content="<?php echo getSubString($rowdeta['descripcion'], 100);?> ->VER DETALLES" />
<meta property='article:author' content='https://www.facebook.com/remaxunited'>
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap-responsive.css" type="text/css">
<link rel="stylesheet" href="assets/libraries/chosen/chosen.css" type="text/css">
<link rel="stylesheet" href="assets/libraries/bootstrap-fileupload/bootstrap-fileupload.css" type="text/css">
<link rel="stylesheet" href="assets/libraries/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/realia-blue.css" type="text/css" id="color-variant-default">
<link rel="stylesheet" href="#" type="text/css" id="color-variant">
<title><?php echo ucfirst(strtolower($rowdeta['titulo']));?> - <?php echo $rowdeta['distrito'];?></title>
<!-- Inserta esta etiqueta en la sección "head" o justo antes de la etiqueta "body" de cierre. -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'es-419'}
</script>
</head>
<?php require_once 'helpers/header.php'; ?>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=177712615640872";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class="container">
          <div id="main">
            <div class="row">
              <div class="span9">
                
                <h1 class="page-header"><?php echo ucfirst(strtolower($rowdeta['titulo']));?></h1>
                <div class="carousel property">
                  <div class="preview">
                    <?php
			class gallery {
		var $files = array();
	var $path;
		function loadFolder($path){
				$this->path = $path;
		
		//---Guardar en un arreglo todos los archivos en el directorio	
		$folder = opendir($this->path);
			
		while ($fil = readdir($folder)) {
			
			//---Si no es un directorio
			if(!is_dir($fil)){
				
				$arr = explode('.', $fil);
				
				if(count($arr) > 1){
					
					//---Ir guardando los nombres en un arreglo
					$this->files[] = $fil;
					
				}
				
			}
			
		}
		
		//---Cerrar el directorio
		closedir($folder);
		
		//---Ordenar alfabeticamente el arreglo
		sort($this->files);
	
	}
	
	function show($area = 500, $width = 100, $space = 10){
	
		//---Crear la galería con los nombres de todos los archivos
		$total = count($this->files);
		$cont = 0; 
		echo '<img src="'.$this->path.'/'.$this->files[0].'" alt=""></img>';
		?>
                  </div>
                  <!-- /.preview -->
                  
                  <div class="content"> <a class="carousel-prev" href="#">Previous</a> <a class="carousel-next" href="#">Next</a>
                    <ul>
                      <?php		
			//---Situar los thumbnails
			for($i = 0; $i < $total; $i++){		
				echo"<li>";
				echo '<img src="'.$this->path.'/'.$this->files[$i].'" alt=""></img>';
				echo"</li>";
			}
			
		     
        
       	
		
		
	
	}

}

			$mygallery = new gallery();
			$mygallery->loadFolder('propiedades/'.$rowdeta['imagenes'].'/files');
			$mygallery->show(500, 100, 10);
?>
                    </ul>
                  </div>
                  <!-- /.content --> 
                </div>
                <!-- /.carousel -->
                
                <div class="property-detail">
                  <div class="pull-left overview">
                    <div class="row">
                      <div class="span3">
                        <h2>Datos</h2>
                        <table>
                          <tr>
                            <th>Precio:</th>
                            <td><?php echo $rowdeta['moneda'];?> <?php echo $rowdeta['precio'];?></td>
                          </tr>
                          <tr>
                            <th>Tipo Contrato:</th>
                            <td><?php 
										$quetip = "SELECT * FROM tipo_contrato where idtipo_contrato='".$rowdeta['idtipo_contrato']."' and estado='1' ";
$restip = $conn->query($quetip);
if ($restip->num_rows > 0) {
    // output data of each row
    while($rowtip = $restip->fetch_assoc()) {										
										echo $rowtip['nombre'];								
										}};?></td>
                          </tr>
                          <tr>
                            <th>Tipo:</th>
                            <td><?php 
										$quetippo = "SELECT * FROM tipo_propiedades where idtipo_propiedade='".$rowdeta['idtipo_propiedade']."' and estado='1' ";
$restippo = $conn->query($quetippo);
if ($restippo->num_rows > 0) {
    // output data of each row
    while($rowtippo = $restippo->fetch_assoc()) {								
										echo $rowtippo['nombre'];
										}};?></td>
                          </tr>
                          <tr>
                            <th>Distrito:</th>
                            <td><?php echo $rowdeta['distrito'];?></td>
                          </tr>
                          <tr>
                            <th>Dirección:</th>
                            <td><?php echo $rowdeta['ubicacion'];?></td>
                          </tr>
                          <tr>
                            <th>Baños:</th>
                            <td><?php echo $rowdeta['banos'];?></td>
                          </tr>
                          <tr>
                            <th>Habitaciones:</th>
                            <td><?php echo $rowdeta['habitaciones'];?></td>
                          </tr>
                          <tr>
                            <th>Estacionamiento:</th>
                            <td><?php echo $rowdeta['esta'];?></td>
                          </tr>
                          <tr>
                            <th>Area Terreno:</th>
                            <td><?php echo $rowdeta['area'];?></td>
                          </tr>
                          <tr>
                            <th>Area Construcción:</th>
                            <td><?php echo $rowdeta['area_con'];?></td>
                          </tr>
                          <tr>
                            <th>Compartelo</th>
                        </table>
                        <div class="fb-share-button" data-href="<?php echo dameURL();?>" data-layout="box_count"></div>
                        
                        <!-- Inserta esta etiqueta donde quieras que aparezca Botón Compartir. -->
                        <div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60"></div>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-count="vertical">Twittear</a> 
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script> 
                      </div>
                      <!-- /.span2 --> 
                    </div>
                    <!-- /.row --> 
                  </div>
                  <p><?php echo $rowdeta['descripcion'];?></p>
                  <h2 style=" clear:both;">Mapa</h2>
                  <div id="property-map"></div>
                  <!-- /#property-map --> 
                </div>
              </div>
              <div class="sidebar span3">
                <div class="widget our-agents">
                  <div class="title">
                    <h2>Agente</h2>
                  </div>
                  <!-- /.title -->
                  
                  <div class="content">
                    <?php
//social
$queage = "SELECT * FROM agentes where estado='1' and id_agente='".$rowdeta['id_agente']."' ";

$resage = $conn->query($queage);

if ($resage->num_rows > 0) {
    // output data of each row
    while($rowage = $resage->fetch_assoc()) {?>
                    <div class="agent">
                      <div class="image"> <img src="agentes/files/thumbnail/<?php echo $rowage['foto'];?>" alt="<?php echo $rowage['nombre'];?> <?php echo $rowage['apellidos'];?>"> </div>
                      <!-- /.image -->
                      <div class="name"><?php echo $rowage['nombre'];?> <?php echo $rowage['apellidos'];?></div>
                      <!-- /.name -->
                      <div class="phone"><?php echo $rowage['celular'];?></div>
                      <!-- /.phone -->
                      <div class="email"><a href="mailto:<?php echo $rowage['correo'];?>" title="<?php echo $rowage['nombre'];?> <?php echo $rowage['apellidos'];?>"><?php echo $rowage['correo'];?></a></div>
                      <!-- /.email --> 
                    </div>
                    <!-- /.agent -->
                    <?php }};?>
                  </div>
                  <!-- /.content --> 
                </div>
                <!-- /.our-agents -->
                <?php require_once 'helpers/widgets/contact.php'; ?>
                <div class="widget properties last">
                  <div class="title">
                    <h2>Propiedades del Agente</h2>
                  </div>
                  <!-- /.title -->
                  
                  <div class="content">
                    <?php
//menu
$queulpro = "SELECT * FROM propiedades where estado='1' and id_agente='".$rowdeta['id_agente']."' order by idpropiedade Desc limit 4";

$resulpro = $conn->query($queulpro);

if ($resulpro->num_rows > 0) {
    // output data of each row
    while($rowulpro = $resulpro->fetch_assoc()) {?>
                    <div class="property">
                      <div class="image"> <a href="detail.php?id=<?php echo $rowulpro['idpropiedade'];?>"></a> <img src="propiedades/files/<?php echo $rowulpro['img_des'];?>" alt="<?php echo $rowulpro['titulo'];?>"> </div>
                      <!-- /.image -->
                      
                      <div class="wrapper">
                        <div class="title">
                          <h3> <a href="detail.php?id=<?php echo $rowulpro['idpropiedade'];?>"><?php echo ucfirst(strtolower($rowulpro['titulo']));?></a> </h3>
                        </div>
                        <!-- /.title -->
                        <div class="location"><?php echo $rowulpro['ubicacion'];?></div>
                        <!-- /.location -->
                        <div class="price"><?php echo $rowulpro['moneda'];?> <?php echo $rowulpro['precio'];?></div>
                        <!-- /.price --> 
                      </div>
                      <!-- /.wrapper --> 
                    </div>
                    <!-- /.property -->
                    <?php }};?>
                  </div>
                  <!-- /.content --> 
                </div>
                <!-- /.properties --> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /#content --> 
    </div>
    <!-- /#wrapper-inner -->
    
    <div id="footer-wrapper">
      <div id="footer" class="footer container">
        <div id="footer-inner">
          <div class="row">
            <div class="span6 copyright">
              <p>© Copyright 2014 by <a href="http://remax-united.com">Remax United</a>. Todos Los derechos Reservados.</p>
            </div>
            <!-- /.copyright -->
            
            <div class="span6 share">
              <div class="content">
                <ul class="menu nav">
                  <?php
//social
$quesocial = "SELECT * FROM social where estado='1' limit 6";
$ressocial = $conn->query($quesocial);

if ($ressocial->num_rows > 0) {
    // output data of each row
    while($rowsocial = $ressocial->fetch_assoc()) {?>
                  <li class="leaf"><a  target="_blank" href="<?php echo $rowsocial['url'];?>" class="<?php echo strtolower($rowsocial['nombre']);?>" title="<?php echo $rowsocial['nombre'];?>"><?php echo $rowsocial['nombre'];?></a></li>
                  <?php }};?>
                </ul>
              </div>
              <!-- /.content --> 
            </div>
            <!-- /.span6 --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- /#footer-inner --> 
      </div>
      <!-- /#footer --> 
    </div>
    <!-- /#footer-wrapper --> 
  </div>
  <!-- /#wrapper --> 
</div>
<!-- /#wrapper-outer --> 

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script> 
<script type="text/javascript" src="assets/js/jquery.js"></script> 
<script type="text/javascript" src="assets/js/jquery.ezmark.js"></script> 
<script type="text/javascript" src="assets/js/jquery.currency.js"></script> 
<script type="text/javascript" src="assets/js/jquery.cookie.js"></script> 
<script type="text/javascript" src="assets/js/retina.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/carousel.js"></script> 
<script type="text/javascript" src="assets/js/gmap3.min.js"></script> 
<script type="text/javascript" src="assets/js/gmap3.infobox.min.js"></script> 
<script type="text/javascript" src="assets/libraries/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js"></script> 
<script type="text/javascript" src="assets/libraries/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="assets/libraries/iosslider/_src/jquery.iosslider.min.js"></script> 
<script type="text/javascript" src="assets/libraries/bootstrap-fileupload/bootstrap-fileupload.js"></script> 
<script >
$(document).ready(function() {
	InitCarousel();
    InitPropertyCarousel();
	InitOffCanvasNavigation();
	InitMap();
	InitChosen();
	InitEzmark();
	InitPriceSlider();
	InitImageSlider();
	InitAccordion();
	InitTabs();
    InitPalette();
});

function InitPalette() {
    if ($.cookie('palette') == 'true') {
        $('.palette').addClass('open');
    }

    $('.palette .toggle a').on({
        click: function(e) {
            e.preventDefault();
            var palette = $(this).closest('.palette');

            if (palette.hasClass('open')) {
                palette.animate({'left': '-195'}, 500, function() {
                    palette.removeClass('open');
                });
                $.cookie('palette', false)
            } else {
                palette.animate({'left': '0'}, 500, function() {
                    palette.addClass('open');
                    $.cookie('palette', true);
                });
            }
        }
    });

    if ($.cookie('color-variant')) {
        var link = $('.palette').find('a.'+ $.cookie('color-variant'));
        var file = link.attr('href');
        var klass = link.attr('class');

        $('#color-variant').attr('href', file);
        $('body').addClass(klass);
    }

    if ($.cookie('pattern')) {
        $('body').addClass($.cookie('pattern'));
    }

    if ($.cookie('header')) {
        $('body').addClass($.cookie('header'));
    }

    $('.palette a').on({
        click: function(e) {
            e.preventDefault();

            // Colors
            if ($(this).closest('div').hasClass('colors')) {
                var file = $(this).attr('href');
                var klass = $(this).attr('class');
                $('#color-variant').attr('href', file);

                if (!$('body').hasClass(klass)) {
                    $('body').removeClass($.cookie('color-variant'));
                    $('body').addClass(klass);
                }
                $.cookie('color-variant', klass)
            }
            // Patterns
            else if ($(this).closest('div').hasClass('patterns')) {
                var klass = $(this).attr('class');

                if (!$('body').hasClass(klass)) {
                    $('body').removeClass($.cookie('pattern'));
                    $('body').addClass(klass);
                    $.cookie('pattern', klass);
                }
            }
            // Headers
            else if ($(this).closest('div').hasClass('headers')) {
                var klass = $(this).attr('class');

                if (!$('body').hasClass(klass)) {
                    $('body').removeClass($.cookie('header'));
                    $('body').addClass(klass);
                    $.cookie('header', klass);
                }
            }
        }
    });
    $('.palette .reset').on({
        click: function() {
            $('body').removeClass($.cookie('color-variant'));
            $('#color-variant').attr('href', null);
            $.removeCookie('color-variant');

            $('body').removeClass($.cookie('pattern'));
            $.removeCookie('pattern');

            $('body').removeClass($.cookie('header'));
            $.removeCookie('header');
        }
    })
}

function InitPropertyCarousel() {
    $('.carousel.property .content li img').on({
        click: function(e) {
            var src = $(this).attr('src');
            var img = $(this).closest('.carousel.property').find('.preview img');
            img.attr('src', src);
            $('.carousel.property .content li').each(function() {
                $(this).removeClass('active');
            });
            $(this).closest('li').addClass('active');
        }
    })
}

function InitTabs() {
	$('.tabs a').click(function (e) {
  		e.preventDefault();
  		$(this).tab('show');
	});
}

function InitImageSlider() {
	$('.iosSlider').iosSlider({
		desktopClickDrag: true,
		snapToChildren: true,
		infiniteSlider: true,
		navSlideSelector: '.slider .navigation li',

		onSlideComplete: function(args) {
			if(!args.slideChanged) return false;

			$(args.sliderObject).find('.slider-info').attr('style', '');

			$(args.currentSlideObject).find('.slider-info').animate({
				left: '15px',
				opacity: '.9'
			}, 'easeOutQuint');
		},
		onSliderLoaded: function(args) {
			$(args.sliderObject).find('.slider-info').attr('style', '');

			$(args.currentSlideObject).find('.slider-info').animate({
				left: '15px',
				opacity: '.9'
			}, 'easeOutQuint');
		},
		onSlideChange: function(args) {
			$('.slider .navigation li').removeClass('active');
			$('.slider .navigation li:eq(' + (args.currentSlideNumber - 1) + ')').addClass('active');
		},
		autoSlide: true,
		scrollbar: true,
		scrollbarContainer: '.sliderContainer .scrollbarContainer',
		scrollbarMargin: '0',
		scrollbarBorderRadius: '0',
		keyboardControls: true
	});
}

function InitAccordion() {
    $('.accordion').on('show', function (e) {
        $(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('active');
    });

    $('.accordion').on('hide', function (e) {
        $(this).find('.accordion-toggle').not($(e.target)).removeClass('active');
    });
}

function InitPriceSlider() {
    jQuery('.price-value .from').text(100);
    jQuery('.price-value .from').currency({ region: 'EUR', thousands: ' ', decimal: ',', decimals: 0 });

    jQuery('.price-value .to').text(1000000);
    jQuery('.price-value .to').currency({ region: 'EUR', thousands: ' ', decimal: ',', decimals: 0 });

    $('.property-filter .price-slider').slider({
        range: true,
        min: 100,
        max: 1000000,
        values: [100, 1000000],
        slide: function(event, ui) {
            jQuery('.property-filter .price-from input').attr('value', ui.values[0]);
            jQuery('.property-filter .price-to input').attr('value', ui.values[1]);

            jQuery('.price-value .from').text(ui.values[0]);
            jQuery('.price-value .from').currency({ region: 'USD', thousands: ' ', decimal: ',', decimals: 0 });

            jQuery('.price-value .to').text(ui.values[1]);
            jQuery('.price-value .to').currency({ region: 'USD', thousands: ' ', decimal: ',', decimals: 0 });
        }
    });
}

function InitEzmark() {
	$('input[type="checkbox"]').ezMark();
	$('input[type="radio"]').ezMark();
}

function InitChosen() {
	$('select').chosen({
		disable_search_threshold: 10
	});
}

function InitOffCanvasNavigation() {
	$('#btn-nav').on({
		click: function() {
			$('body').toggleClass('nav-open');
		}
	})
}

function InitCarousel() {
	$('#main .carousel .content ul').carouFredSel({
		scroll: {
			items: 1
		},
		auto: false,
		next: {
    		button: '#main .carousel-next',
    		key: 'right'
		},
		prev: {
    		button: '#main .carousel-prev',
    		key: 'left'
		}
	});

	$('.carousel-wrapper .content ul').carouFredSel({
		scroll: {
			items: 1
		},
		auto: false,
		next: {
    		button: '.carousel-wrapper .carousel-next',
    		key: 'right'
		},
		prev: {
    		button: '.carousel-wrapper .carousel-prev',
    		key: 'left'
		}
	});
}

function LoadMapProperty() {
    var locations = new Array(
        [<?php echo $rowdeta['lati'];?>,<?php echo $rowdeta['longi'];?>]
    );
    var markers = new Array();
    var mapOptions = {
        center: new google.maps.LatLng(<?php echo $rowdeta['lati'];?>,<?php echo $rowdeta['longi'];?>),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

    $.each(locations, function(index, location) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(location[0], location[1]),
            map: map,
            icon: 'http://preview.byaviators.com/theme/realia/wp-content/themes/realia/assets/img/marker-transparent.png'
        });

        var myOptions = {
            content: '<div class="infobox"><div class="title"><?php echo $rowdeta['titulo'];?></div><div class="area"><span class="key">Area:</span><span class="value"><?php echo $rowdeta['area'];?><sup>2</sup></span></div><div class="price"><?php echo $rowdeta['moneda'];?> <?php echo $rowdeta['precio'];?></div></div>',
            disableAutoPan: false,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-146, -190),
            zIndex: null,
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(1, 1),
            position: new google.maps.LatLng(location[0], location[1]),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false
        };
        marker.infobox = new InfoBox(myOptions);
        marker.infobox.isOpen = false;

        var myOptions = {
            draggable: true,
            content: '<div class="marker"><div class="marker-inner"></div></div>',
            disableAutoPan: true,
            pixelOffset: new google.maps.Size(-21, -58),
            position: new google.maps.LatLng(location[0], location[1]),
            closeBoxURL: "",
            isHidden: false,
            // pane: "mapPane",
            enableEventPropagation: true
        };
        marker.marker = new InfoBox(myOptions);
        marker.marker.open(map, marker);
        markers.push(marker);

        google.maps.event.addListener(marker, "click", function (e) {
            var curMarker = this;

            $.each(markers, function (index, marker) {
                // if marker is not the clicked marker, close the marker
                if (marker !== curMarker) {
                    marker.infobox.close();
                    marker.infobox.isOpen = false;
                }
            });


            if(curMarker.infobox.isOpen === false) {
                curMarker.infobox.open(map, this);
                curMarker.infobox.isOpen = true;
                map.panTo(curMarker.getPosition());
            } else {
                curMarker.infobox.close();
                curMarker.infobox.isOpen = false;
            }

        });
    });
}

function LoadMap() {
	var locations = new Array(
        [34.01843,-118.491046], [34.006673,-118.486562], [34.009714,-118.480296], [34.010408,-118.473215], [34.01521,-118.474889], [34.022502,-118.480124],
        [34.024423,-118.459868], [34.024885,-118.44871], [34.002368,-118.482828], [34.003791,-118.473001], [34.015922,-118.457422], [34.022147,-118.457894],
        [34.028904,-118.46725], [34.030114,-118.481326], [34.03143,-118.494029], [34.031643,-118.504758], [34.029616,-118.515058], [34.001834,-118.451414]
	);
	var markers = new Array();
	var mapOptions = {
		center: new google.maps.LatLng(34.019000, -118.455458),
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $.each(locations, function(index, location) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(location[0], location[1]),
            map: map,
            icon: 'http://html.realia.byaviators.com/assets/img/marker-transparent.png'
        });

	    var myOptions = {
	        content: '<div class="infobox"><div class="image"><img src="http://html.realia.byaviators.com/assets/img/tmp/property-tiny-1.png" alt=""></div><div class="title"><a href="detail.html">1041 Fife Ave</a></div><div class="area"><span class="key">Area:</span><span class="value">200m<sup>2</sup></span></div><div class="price">€450 000.00</div><div class="link"><a href="detail.html">View more</a></div></div>',
	        disableAutoPan: false,
	        maxWidth: 0,
	        pixelOffset: new google.maps.Size(-146, -190),
	        zIndex: null,
	        closeBoxURL: "",
	        infoBoxClearance: new google.maps.Size(1, 1),
	        position: new google.maps.LatLng(location[0], location[1]),
	        isHidden: false,
	        pane: "floatPane",
	        enableEventPropagation: false
	    };
	    marker.infobox = new InfoBox(myOptions);
		marker.infobox.isOpen = false;

	    var myOptions = {
	        draggable: true,
			content: '<div class="marker"><div class="marker-inner"></div></div>',
			disableAutoPan: true,
			pixelOffset: new google.maps.Size(-21, -58),
			position: new google.maps.LatLng(location[0], location[1]),
			closeBoxURL: "",
			isHidden: false,
			// pane: "mapPane",
			enableEventPropagation: true
	    };
	    marker.marker = new InfoBox(myOptions);
		marker.marker.open(map, marker);
		markers.push(marker);

        google.maps.event.addListener(marker, "click", function (e) {
            var curMarker = this;

            $.each(markers, function (index, marker) {
                // if marker is not the clicked marker, close the marker
                if (marker !== curMarker) {
                    marker.infobox.close();
                    marker.infobox.isOpen = false;
                }
            });


            if(curMarker.infobox.isOpen === false) {
                curMarker.infobox.open(map, this);
                curMarker.infobox.isOpen = true;
                map.panTo(curMarker.getPosition());
            } else {
                curMarker.infobox.close();
                curMarker.infobox.isOpen = false;
            }

        });
    });
}

function InitMap() {
	google.maps.event.addDomListener(window, 'load', LoadMap);
    google.maps.event.addDomListener(window, 'load', LoadMapProperty);
} 
</script>
</body>
</html>
<?php }};?>