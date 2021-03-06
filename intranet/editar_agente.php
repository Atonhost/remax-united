<?php include("validar.php"); ?>
<?php include '../cn/cn.php'; 
$id= $_GET['id'];
if(empty($_GET['id'])){
		echo "Selecciones un usuario";
		header("Location:agentes.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Agente | Remax United</title>
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
<body>
<?php include("_header.php"); ?>
<div class="main-container container-fluid"> <a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>
  <?php include("_menu.php"); ?>
  <div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
      <ul class="breadcrumb">
        <li> <i class="icon-home home-icon"></i> <a href="#">Inicio</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
        <li> <a href="#">Agente</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
        <li class="active">Nuevo Agente</li>
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
        <h1> Nuevo Agente <small> <i class="icon-double-angle-right"></i> ingresar agente </small> </h1>
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
$queEage = "SELECT * FROM agentes where id_agente='$id'";

$resEage = $conn->query($queEage);
if ($resEage->num_rows > 0) {
 while($rowEage = $resEage->fetch_assoc()) {?>
	   
			<input  type="hidden" name="id" id="id" value="<?php echo $rowEage['id_agente'];?>" />
          <div class="control-group">
            <label class="control-label" for="usuario">Usuario</label>
            <div class="controls">
              <input  placeholder="usuario" type="text" name="usuario" id="usuario" value="<?php echo $rowEage['usuario'];?>" readonly />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="password">Contraseña</label>
            <div class="controls">
              <input  placeholder="contraseña" type="text" name="password" id="password" value="<?php echo $rowEage['password'];?>"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="nombre">Nombre</label>
            <div class="controls">
              <input  placeholder="nombre" type="text" name="nombre" id="nombre" value="<?php echo $rowEage['nombre'];?>" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="apellidos">Apellidos</label>
            <div class="controls">
              <input  placeholder="Apellidos" type="text" name="apellidos" id="apellidos" class="input-xlarge" value="<?php echo $rowEage['apellidos'];?>" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="telefono">Telefono</label>
            <div class="controls">
              <input  placeholder="Telefono" type="text" name="telefono" id="telefono" value="<?php echo $rowEage['telefono'];?>" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="celular">Celular</label>
            <div class="controls">
              <input  placeholder="Celular" type="text" name="celular" id="celular" value="<?php echo $rowEage['celular'];?>" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Correo</label>
            <div class="controls">
              <input  placeholder="Correo" type="text" name="email" id="email" value="<?php echo $rowEage['correo'];?>"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="foto">Foto</label>
            <div class="controls">
             <span class="btn btn-success fileinput-button">
        
        <span><img src="../agentes/files/thumbnail/<?php echo $rowEage['foto'];?>" alt="<?php echo $rowEage['nombre'];?> <?php echo $rowEage['apellidos'];?>"></span>
              <input id="fileupload" type="file" name="files[]" data-url="../agentes/" >
              </span>
              <input   type="text" name="foto" id="foto"  value="<?php echo $rowEage['foto'];?>" readonly/>

            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="estado">Estado</label>
            <div class="controls">
              <select id="estado">
              <?php if ($rowEage['estado']=='1'){ ?>
                <option value="1">Activado</option>
                <option value="2">Desactivado</option>
                <?php }else{ ?>
                <option value="2">Desactivado</option>
                <option value="1">Activado</option>
                <?php };?>
              </select>
            </div>
          </div>
           <?php }};?>
          <div class="space-4"></div>
          <div class="form-actions">
            <button class="btn btn-info" type="submit" > <i class="icon-ok bigger-110"></i> Enviar </button>
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

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a> 

<!--basic scripts--> 

<!--[if !IE]>--> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 

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

<!--uploaf scripts--> 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/vendor/jquery.ui.widget.js"></script>
<script src="js/jquery.iframe-transport.js"></script>
<script src="js/jquery.fileupload.js"></script>
<script>
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                
				document.getElementById("foto").value=file.name;
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
usuario: "required",
password: "required",
nombre: "required",
apellidos: "required",
celular: "required",
email: {
required: true,
email: true,

}

},
messages: {
usuario: "Ingrese Usuario",
password: "Ingrese password",
nombre: "Ingrese nombre",
apellidos: "Ingrese apellidos",
celular: "Ingrese celular",
email: {
required: "Especifique un email",
email: "Email no valido name@domain.com",

}
},

submitHandler: function(form){
$.ajax({type: "GET",
url:"action/edit_agente.php",
contentType:"application/x-www-form-urlencoded",
processData: false,
data: "usuario="+$('#usuario').val()+"&id="+$('#id').val()+"&foto="+$('#foto').val()+"&password="+$('#password').val()+"&nombre="+$('#nombre').val()+"&apellidos="+$('#apellidos').val()+"&telefono="+$('#telefono').val()+"&celular="+$('#celular').val()+"&correo="+$('#email').val()+"&estado="+$('#estado').val(),

success: function(msg){
	
if(msg=='yes'){
	
	$("#msgbox").removeClass();
	$("#msgbox").fadeTo(200,0.1,function(){
$(this).html('Los Datos Fueron Actualizados').addClass('alert alert-success').fadeTo(900,1);
setTimeout(function(){document.location='agentes.php';}, 7000);
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
$(this).html('usuario existe').addClass('alert alert-warning').fadeTo(900,1);
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
						$(this).find('a:first-child').css('width' , '200px');
						$(this).find('.chzn-drop').css('width' , '210px');
						$(this).find('.chzn-search input').css('width' , '200px');
					});
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
