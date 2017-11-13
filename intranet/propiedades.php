<?php include("validar.php"); ?>
<?php include '../cn/cn.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Propiedades | Remax United</title>
<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->

<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

<!--page specific plugin styles-->

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

<body>
<?php include("_header.php"); ?>
<div class="main-container container-fluid"> <a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>
  <?php include("_menu.php"); ?>
  <div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
      <ul class="breadcrumb">
        <li> <i class="icon-home home-icon"></i> <a href="#">Inicio</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
        <li class="active">Propiedades</li>
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
    <div class="page-content"><!--/.page-header-->
      
      <div class="row-fluid">
        <div class="span12"> 
          <!--PAGE CONTENT BEGINS--><!--/row-->
          <div class="row-fluid">
            <h3 class="header smaller lighter blue">Todos las Propiedades</h3>
            <div class="table-header"> Resultado de las Ultimas Propiedades </div>
            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th class="center"> <label>
                      <input type="checkbox" />
                      <span class="lbl"></span> </label>
                  </th>
                  <th>Titulo</th>
                  <th>Imagen Destacada</th>
                  <th>Precio</th>
                  <th>Ubicación</th>
                  
				  <th>Fecha Ingreso</th>
                  <th><button ONCLICK="window.location.href='nueva_propiedad.php'"  class="btn btn-small btn-primary">Nueva Propiedad</button></th>
                </tr>
              </thead>
              <tbody>
                <?php
//menu
 if ($Xtipouser=='admin'){ 
 $quepro = "SELECT * FROM propiedades order by destacado desc";
 }else{
	$quepro = "SELECT * FROM propiedades where id_agente='$Xcodigo' order by fec_ing desc";
 
 }
$respro = $conn->query($quepro);
if ($respro->num_rows > 0) {
 while($rowpro = $respro->fetch_assoc()) {?>
                <tr>
                  <td class="center"><label>
                      <input type="checkbox" />
                      <span class="lbl"></span> </label></td>
                  <td><a href="editar_propiedad.php?id=<?php echo $rowpro['idpropiedade'];?>"><?php echo $rowpro['titulo'];?></a></td>
                  <td><img src="../propiedades/files/thumbnail/<?php echo $rowpro['img_des'];?>" alt="<?php echo $rowpro['titulo'];?>"></td>
                  <td><?php echo $rowpro['moneda'];?> <?php echo $rowpro['precio'];?></td>
                  <td><?php echo $rowpro['ubicacion'];?></td>
                  
                  <td><?php echo $rowpro['fec_ing'];?></td>
                  <td class="td-actions"><div class="hidden-phone visible-desktop action-buttons"> 
                  <?php if ($Xtipouser=='admin' and $rowpro['destacado']=='0'){ ?>
                  <a title=" Destacar" class="blue" href="javascript: fn_destacar(<?php echo $rowpro['idpropiedade'];?>)"> <i class="icon-zoom-in bigger-130"></i> </a> 
                  <?php }elseif ($Xtipouser=='admin' and $rowpro['destacado']=='1') {?>
                  <a title="Quitar Destacar" class="red" href="javascript: fn_ndestacar(<?php echo $rowpro['idpropiedade'];?>)"> <i class="icon-eye-close  bigger-130"></i> </a> 
                   <?php }?>
                  <a title="Editar" class="green" href="editar_propiedad.php?id=<?php echo $rowpro['idpropiedade'];?>"> <i class="icon-pencil bigger-130"></i> </a>
                      <?php if ($rowpro['estado']=='1'){ ?>
                      <a title="Desacticar" id="delete" class="red" href="javascript: fn_eliminar(<?=$rowpro['idpropiedade']?>);"> <i class="icon-trash bigger-130"></i></a>
                      <?php }?>
                      <a title="Subir Fotos" id="delete" class="Blue" href="galeria.php?id=<?php echo $rowpro['idpropiedade'];?>"> <i class="icon-picture bigger-130"></i></a>
                       </div></td>
                </tr>
                <?php }};?>
              </tbody>
            </table>
          </div>
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

<script src="assets/js/jquery.dataTables.min.js"></script> 
<script src="assets/js/jquery.dataTables.bootstrap.js"></script> 

<!--ace scripts--> 

<script src="assets/js/ace-elements.min.js"></script> 
<script src="assets/js/ace.min.js"></script> 

<!--inline scripts related to this page--> 

<script type="text/javascript">
		//no destacar propiedad
function fn_ndestacar(ide_per){
			
	var respuesta = confirm("Desea quitar destacado");
	if (respuesta){
		$.ajax({
			url: 'action/ndestacar_propiedad.php',
			data: 'ide_per=' + ide_per,
			type: 'post',
			success: function(data){
				if(data!="")
				location.reload();
			}
		});
	}
}
		//destacar propiedad
function fn_destacar(ide_per){
			
	var respuesta = confirm("Desea Destacar esta Proiedad");
	if (respuesta){
		$.ajax({
			url: 'action/destacar_propiedad.php',
			data: 'ide_per=' + ide_per,
			type: 'post',
			success: function(data){
				if(data!="")
				location.reload();
			}
		});
	}
}	
		
		
		//elimina propiedad
function fn_eliminar(ide_per){
			
	var respuesta = confirm("Desea Eliminar Propiedad");
	if (respuesta){
		$.ajax({
			url: 'action/eliminar_propiedad.php',
			data: 'ide_per=' + ide_per,
			type: 'post',
			success: function(data){
				if(data!="")
				location.reload();
			}
		});
	}
}
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
</body>
</html>
