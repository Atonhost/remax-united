<?php include("validar.php"); ?>
<?php include '../cn/cn.php'; 
$id= $_GET['id'];
if(empty($_GET['id'])){
		echo "Selecciones un Propiedad";
		header("Location:propiedades.php");
		exit;
	}
	//retorna distrito
$sql = "select nombre from distrito order by nombre";
$res =  $conn->query($sql);
$arreglo_php = array();
if($res->num_rows==0)
   array_push($arreglo_php, "No hay datos");
else{
  while($palabras = $res->fetch_assoc()){
	array_push($arreglo_php, $palabras["nombre"]);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Propiedades | Remax United</title>
<meta name="description" content="Common form elements and layouts" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->

<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/jquery.fileupload.css">
<!--[if IE 7]>
	<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!--page specific plugin styles-->

<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="assets/css/chosen.css" />
<link rel="stylesheet" href="assets/css/datepicker.css" />
<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="assets/css/daterangepicker.css" />
<link rel="stylesheet" href="assets/css/colorpicker.css" />

<!--fonts-->

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/excite-bike/jquery-ui.css">
<!--ace styles-->

<link rel="stylesheet" href="assets/css/ace.min.css" />
<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

<!--inline styles related to this page-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style>
input {
	border: 1px solid black;
	margin-bottom: .5em;
}
input.error {
	border: 1px solid red;
}
label.error {
	background: url('assets/img/unchecked.gif') no-repeat;
	padding-left: 16px;
	margin-left: .3em;
	color: #F00;
}
label.valid {
	background: url('assets/img/checked.gif') no-repeat;
	display: block;
	width: 16px;
	height: 16px;
}
</style>
<body onload="load()" onunload="GUnload()">
<?php include("_header.php"); ?>
<div class="main-container container-fluid"> <a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>
  <?php include("_menu.php"); ?>
  <div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
      <ul class="breadcrumb">
        <li> <i class="icon-home home-icon"></i> <a href="#">Inicio</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
        <li> <a href="#">Propiedades</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
        <li class="active">Actualizar Propiedades</li>
      </ul>
      <!--.breadcrumb-->
      
      <div class="nav-search" id="nav-search">
        <form class="form-search" />
        
        <span class="input-icon">
        <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
        <i class="icon-search nav-search-icon"></i> </span>
        </form>
      </div>
      <!--#nav-search--> 
    </div>
    <div class="page-content">
      <div class="page-header position-relative">
        <h1> Actualizar Propiedad <small> <i class="icon-double-angle-right"></i> ingresar Propiedad </small> </h1>
      </div>
      <!--/.page-header--> 
      <span id="msgbox" style="display:none; clear:both"></span>
      <div class="row-fluid">
        <div class="span12"> 
          <!--PAGE CONTENT BEGINS--> 
          <br>
          <form class="form-horizontal" id="myform" />
          
      <?php   
       //menu
$queEpro = "SELECT * FROM propiedades where idpropiedade='$id'";
$resEpro = $conn->query($queEpro);
if ($resEpro->num_rows > 0) {
    // output data of each row
    while($rowEpro = $resEpro->fetch_assoc()) {?>  
         <input  type="hidden" name="id" id="id" value="<?php echo $rowEpro['idpropiedade'];?>" />
          <div class="control-group">
            <label class="control-label" for="titulo">Titulo</label>
            <div class="controls">
              <input  placeholder="titulo" type="text" name="titulo" id="titulo"  value="<?php echo $rowEpro['titulo'];?>" class="input-xxlarge"  />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="descripcion">Descripcion</label>
            <div class="controls">
             <textarea id="descripcion" class="input-xxlarge" name="descripcion" placeholder="descripcion" rows="5" ><?php echo $rowEpro['descripcion'];?></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="banos">Baños</label>
            <div class="controls">
              <input  placeholder="Baños" type="text" name="banos" id="banos" class="input-mini" value="<?php echo $rowEpro['banos'];?>"  /><span class="help-inline"> Habitaciones </span> <input  placeholder="Habitaciones" type="text" name="habitaciones" id="habitaciones" class="input-mini" value="<?php echo $rowEpro['habitaciones'];?>" /><span class="help-inline"> Estacionamiento </span> <input  type="text" name="esta" id="esta" class="input-mini" value="<?php echo $rowEpro['esta'];?>" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="precio">Precio</label>
            <div class="controls">
              <input  placeholder="precio" type="text" name="precio" id="precio" value="<?php echo $rowEpro['precio'];?>"/>
              <select id="moneda" class="input-small">
                 <?php if ($rowEpro['moneda']=='$'){ ?>
                <option value="$">Dolares</option>
                <option value="S/.">Soles</option>
                <?php }else{ ?>
                <option value="S/.">Soles</option>
                <option value="$">Dolares</option>
                
                <?php };?>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="area">Área de Terreno</label>
            <div class="controls">
              <input  placeholder="Area de Terreno" type="text" name="area" id="area" value="<?php echo $rowEpro['area'];?>" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="area_con">Area de  Construcción</label>
            <div class="controls">
              <input  placeholder="Area de construcion" type="text" name="area_con" id="area_con" value="<?php echo $rowEpro['area_con'];?>" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="distrito">Distrito</label>
            <div class="controls">
              <input  placeholder="Distrito" type="text" name="distrito" id="distrito" value="<?php echo $rowEpro['distrito'];?>"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="ubicacion">Ubicación</label>
            <div class="controls">
              <input  placeholder="Ubicación" type="text" name="ubicacion" id="ubicacion" value="<?php echo $rowEpro['ubicacion'];?>"/>
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label" for="gps">Gps</label>
            <div class="controls">
              <input  placeholder="Longitud" type="text" name="lng" id="lng" class="input-small" value="<?php echo $rowEpro['longi'];?>"/>
              <input  placeholder="Latitud" type="text" name="lat" id="lat"  class="input-small" value="<?php echo $rowEpro['lati'];?>"/>
              <a href="#modal-form" role="button"  data-toggle="modal" class="btn btn-primary btn-small"><i class="icon-globe "></i>Ver Mapa</a>
            </div>
          </div>
            <div class="control-group">
            <label class="control-label" for="imagen_des" data-title="Seleccionar">Imagen Destacada</label>
            <div class="controls">
                 <span class="btn btn-success fileinput-button">
        
        <span><img src="../propiedades/files/thumbnail/<?php echo $rowEpro['img_des'];?>" alt="<?php echo $rowEpro['titulo'];?>"></span>
              <input id="fileupload" type="file" name="files[]" data-url="../propiedades/" >
              </span><br>
              <input   type="text" name="foto" id="foto"  value="<?php echo $rowEpro['img_des'];?>" readonly/>
            </div>
          </div>
           
          <div class="control-group">
            <label class="control-label" for="tipo_pro">Tipo De Propiedad</label>
            <div class="controls">
              <select id="tipo_pro" >
            <?php   //menu
$queconp = "SELECT * FROM tipo_propiedades where idtipo_propiedade ='".$rowEpro['idtipo_propiedade']."' " ;
$resconp = $conn->query($queconp);
if ($resconp->num_rows > 0) {
    // output data of each row
    while($rowconp = $resconp->fetch_assoc()) {?>
               <option value="<?php echo $rowconp['idtipo_propiedade'];?>"><?php echo $rowconp['nombre'];?></option>
             <?php }};?>
              <?php
          //menu
$quePro = "SELECT * FROM tipo_propiedades where estado ='1' " ;
$resPro = $conn->query($quePro);
if ($resPro->num_rows > 0) {
    // output data of each row
    while($rowPro = $resPro->fetch_assoc()) {?>
                <option value="<?php echo $rowPro['idtipo_propiedade'];?>"><?php echo $rowPro['nombre'];?></option>
                
                <?php }};?>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="estado">Tipo Contrato</label>
            <div class="controls">
              <select id="tipo_cont">
                <?php if ($rowEpro['idtipo_contrato']=='1'){ ?>
                <option value="1">Venta</option>
                <option value="2">Alquiler</option>
                <?php }else{ ?>
                <option value="2">Alquiler</option>
                <option value="1">Venta</option>
                <?php };?>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="estado">Estado</label>
            <div class="controls">
              <select id="estado">
                 <?php if ($rowEpro['estado']=='1'){ ?>
                <option value="1">Activado</option>
                <option value="0">Desactivado</option>
                <?php }else{ ?>
                <option value="0">Desactivado</option>
                <option value="1">Activado</option>
                <?php };?>
              </select>
            </div>
          </div>
          
           <?php }};?>
          <div class="space-4"></div>
          <div class="form-actions">
            <button class="btn btn-info" type="submit" id="boton_enviar"> <i class="icon-ok bigger-110"></i> Enviar </button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"> <i class="icon-undo bigger-110"></i> Limpiar </button>
          </div>
          <div class="hr"></div>
          </form>
          
          <!--PAGE CONTENT ENDS--> 
        </div>
        <!--/.span--> 
      </div>
      <!--/.row-fluid--> 
    </div>
    <!--/.page-content--> 
    
  </div>
  <!--/.main-content--> 
</div>
<!--/.main-container--> 
<div id="modal-form" class="modal hide" tabindex="-1">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="blue bigger">Elegir Ubicación</h4>
								</div>
                                <div class="vspace"></div>
                                
  <form action="#" onsubmit="showAddress(this.address.value); return false" style="margin-left:20px;">
  
     <p >    
     Dirección:    
      <input type="text" size="60" name="address" value="canaval y Moreyra" />
      <input type="submit" value="Buscar!" class="btn btn-small btn-primary"/>
      </p>
    </form>

  <div align="center" id="map" style="width: 560px; height: 400px"><br/></div>
  <div class="modal-footer">

									<button class="btn btn-small btn-primary" data-dismiss="modal">
										<i class="icon-ok"></i>
										Ok
									</button>
								</div>
  </div>
  <script type="text/javascript">
//<![CDATA[
if (typeof _gstat != "undefined") _gstat.audience('','pagesperso-orange.fr');
//]]>
</script>
                               </div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a> 

<!--basic scripts--> 

<!--[if !IE]>--> 
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function(){
    var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     for($p = 0;$p < count($arreglo_php); $p++){ //usamos count para saber cuantos elementos hay ?>
	 
       autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
     <?php } ?>
     $("#distrito").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar //Le decimos que nuestra fuente es el arreglo
     });
  });
</script>
<!--<![endif]--> 

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]--> 

<!--[if !IE]>--> 

<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script> 

<!--<![endif]--> 

<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]--> 

<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script> 
<script src="assets/js/bootstrap.min.js"></script> 

<!--page specific plugin scripts--> 

<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]--> 
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAgrj58PbXr2YriiRDqbnL1RSqrCjdkglBijPNIIYrqkVvD1R4QxRl47Yh2D_0C1l5KXQJGrbkSDvXFA"   type="text/javascript"></script>
    <script type="text/javascript">

 function showmapa() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        var center = new GLatLng(-12.09718, -77.02254);
        map.setCenter(center, 15);
        geocoder = new GClientGeocoder();
        var marker = new GMarker(center, {draggable: true});  
        map.addOverlay(marker);
        document.getElementById("lat").value = center.lat().toFixed(5);
        document.getElementById("lng").value = center.lng().toFixed(5);
		
	  GEvent.addListener(marker, "dragend", function() {
       var point = marker.getPoint();
	      map.panTo(point);
       document.getElementById("lat").value = point.lat().toFixed(5);
       document.getElementById("lng").value = point.lng().toFixed(5);

        });


	 GEvent.addListener(map, "moveend", function() {
		  map.clearOverlays();
    var center = map.getCenter();
		  var marker = new GMarker(center, {draggable: true});
		  map.addOverlay(marker);
		  document.getElementById("lat").value = center.lat().toFixed(5);
	   document.getElementById("lng").value = center.lng().toFixed(5);


	 GEvent.addListener(marker, "dragend", function() {
      var point =marker.getPoint();
	     map.panTo(point);
      document.getElementById("lat").value = point.lat().toFixed(5);
	     document.getElementById("lng").value = point.lng().toFixed(5);

        });
 
        });

      }
    }

	   function showAddress(address) {
	   var map = new GMap2(document.getElementById("map"));
       map.addControl(new GSmallMapControl());
       map.addControl(new GMapTypeControl());
       if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
		  document.getElementById("lat").value = point.lat().toFixed(5);
	   document.getElementById("lng").value = point.lng().toFixed(5);
		 map.clearOverlays()
			map.setCenter(point, 14);
   var marker = new GMarker(point, {draggable: true});  
		 map.addOverlay(marker);

		GEvent.addListener(marker, "dragend", function() {
      var pt = marker.getPoint();
	     map.panTo(pt);
      document.getElementById("lat").value = pt.lat().toFixed(5);
	     document.getElementById("lng").value = pt.lng().toFixed(5);
        });


	 GEvent.addListener(map, "moveend", function() {
		  map.clearOverlays();
    var center = map.getCenter();
		  var marker = new GMarker(center, {draggable: true});
		  map.addOverlay(marker);
		  document.getElementById("lat").value = center.lat().toFixed(5);
	   document.getElementById("lng").value = center.lng().toFixed(5);

	 GEvent.addListener(marker, "dragend", function() {
     var pt = marker.getPoint();
	    map.panTo(pt);
    document.getElementById("lat").value = pt.lat().toFixed(5);
	   document.getElementById("lng").value = pt.lng().toFixed(5);
        });
 
        });

            }
          }
        );
      }
    }
    </script>
  <script type="text/javascript">
//<![CDATA[
var gs_d=new Date,DoW=gs_d.getDay();gs_d.setDate(gs_d.getDate()-(DoW+6)%7+3);
var ms=gs_d.valueOf();gs_d.setMonth(0);gs_d.setDate(4);
var gs_r=(Math.round((ms-gs_d.valueOf())/6048E5)+1)*gs_d.getFullYear();
var gs_p = (("https:" == document.location.protocol) ? "https://" : "http://");
document.write(unescape("%3Cscript src='" + gs_p + "s.gstat.orange.fr/lib/gs.js?"+gs_r+"' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script> 
<script src="assets/js/jquery.ui.touch-punch.min.js"></script> 
<script src="assets/js/chosen.jquery.min.js"></script> 
<script src="assets/js/fuelux/fuelux.spinner.min.js"></script> 
<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script> 
<script src="assets/js/date-time/bootstrap-timepicker.min.js"></script> 
<script src="assets/js/date-time/moment.min.js"></script> 
<script src="assets/js/date-time/daterangepicker.min.js"></script> 
<script src="assets/js/bootstrap-colorpicker.min.js"></script> 
<script src="assets/js/jquery.knob.min.js"></script> 
<script src="assets/js/jquery.autosize-min.js"></script> 
<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script> 
<script src="assets/js/jquery.maskedinput.min.js"></script> 
<script src="assets/js/bootstrap-tag.min.js"></script> 

<!--ace scripts--> 

<script src="assets/js/ace-elements.min.js"></script> 
<script src="assets/js/ace.min.js"></script> 
<!--upload scripts--> 
<script src="js/vendor/jquery.ui.widget.js"></script>
<script src="js/jquery.iframe-transport.js"></script>
<script src="js/jquery.fileupload-validate.js"></script>
<script src="js/jquery.fileupload.js"></script>

<script>
$(function () {
	'use strict';
    $('#fileupload').fileupload({
		maxFileSize: 2000000,
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                document.getElementById("foto").value=file.name;
				$('#boton_enviar').attr('disabled', false);
            });
        }
    });
});


</script>
<!--inline scripts related to this page--> 
<script src="assets/js/jquery.validate.min.js"></script> 
<script src="assets/js/additional-methods.min.js"></script> 
<script>
$("#myform").validate({
rules: {
titulo: "required",
descripcion: "required",
precio: "required",

distrito: "required",
ubicacion: "required",
lng: "required",
lat: "required",
imagen_des: "required",
situacion: "required",
tipo_pro: "required",
tipo_cont: "required",
estado: "required",

email: {
required: true,
email: true,

}

},
messages: {
titulo: "Ingrese Titulo",
descripcion: "Ingrese Una descrpcion",
precio: "Ingrese Precio",

distrito: "Ingrese Distrito",
ubicacion: "Ingrese Ubicacion",
lng: "Ingrese Longitud",
lat: "Ingrese Latitud",
imagen_des: "Ingrese Imagen",
situacion: "required",
tipo_pro: "Ingrese Tipo Propiedad",
tipo_cont: "Ingrese Tipo Contrato",
estado: "Ingrese Estado",

email: {
required: "Especifique un email",
email: "Email no valido name@domain.com",

}
},

submitHandler: function(form){
$.ajax({type: "GET",
url:"action/edit_propiedad.php",
contentType:"application/x-www-form-urlencoded",
processData: false,
data: "titulo="+$('#titulo').val()+"&esta="+$('#esta').val()+"&foto="+$('#foto').val()+"&id="+$('#id').val()+"&descripcion="+$('#descripcion').val()+"&banos="+$('#banos').val()+"&habitaciones="+$('#habitaciones').val()+"&precio="+$('#precio').val()+"&moneda="+$('#moneda').val()+"&area="+$('#area').val()+"&area_con="+$('#area_con').val()+"&distrito="+$('#distrito').val()+"&ubicacion="+$('#ubicacion').val()+"&longi="+$('#lng').val()+"&lati="+$('#lat').val()+"&imagen_des="+$('#imagen_des').val()+"&situacion="+$('#situacion').val()+"&tipo_pro="+$('#tipo_pro').val()+"&tipo_cont="+$('#tipo_cont').val()+"&estado="+$('#estado').val(),

success: function(msg){
if(msg=='yes'){
	$("#msgbox").removeClass();
	$("#msgbox").fadeTo(200,0.1,function(){
$(this).html('Los Datos Fueron Actualizado').addClass('alert alert-success').fadeTo(900,1);
setTimeout(function(){document.location='propiedades.php';}, 7000);
});
}else if(msg=='no'){
//////////si no son correcto los datos
$("#msgbox").removeClass();
$("#msgbox").fadeTo(200,0.1,function(){
$(this).html('Error al actualizar').addClass('alert alert-error').fadeTo(900,1);
});
}else{
	////////error al enviar mail
$("#msgbox").fadeTo(200,0.1,function(){
	$("#msgbox").removeClass();
$(this).html('Error al actualizar').addClass('alert alert-error').fadeTo(900,1);
});
}
}
});
}	

								  
});
</script> 
<script type="text/javascript">
			$(function() {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chzn-select").chosen(); 
				
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea[class*=limited]').each(function() {
					var limit = parseInt($(this).attr('data-maxlength')) || 100;
					$(this).inputlimiter({
						"limit": limit,
						remText: '%n character%s remaining...',
						limitText: 'max allowed : %n.'
					});
				});
				
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
				
				
				
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 6,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 11,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				})
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
			
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('show', function () {
					$(this).find('.chzn-container').each(function(){
						$(this).find('a:first-child').css('width' , '900px');
						$(this).find('.chzn-drop').css('width' , '910px');
						$(this).find('.chzn-search input').css('width' , '900px');
					});
					showmapa();
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element has a width now and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>
</body>
</html>
