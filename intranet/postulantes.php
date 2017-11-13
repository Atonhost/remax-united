<?php include("validar.php"); ?>
<?php include '../cn/cn.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Postulantes Agentes | Remax United</title>
<meta name="description" content="Postulantes Agentes" />
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
        <li class="active">Postulantes</li>
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
            <h3 class="header smaller lighter blue">Relación de Postulantes</h3>
            <div class="table-header"> Resultado de los ultimos Postulantes </div>
            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th class="center"> <label>
                      <input type="checkbox" />
                      <span class="lbl"></span> </label>
                  </th>
                  <th>Nombre y Apellidos</th>
                  <th>Correo</th>
                  <th class="hidden-480">Teléfono</th>
                  <th>Distrito</th>
                  <th class="hidden-480">Fecha</th>                  
                </tr>
              </thead>
              <tbody>
                <?php
//menu
$queage = "SELECT * FROM post_agente where estado='1'";

$resage = $conn->query($queage);
if ($resage->num_rows > 0) {
 while($rowage = $resage->fetch_assoc()) {?>
                <tr>
                  <td class="center"><label>
                      <input type="checkbox" />
                      <span class="lbl"></span> </label></td>
                  <td><?php echo $rowage['nombre'];?></td>
                  <td><a href="mailto:<?php echo $rowage['correo'];?>"><?php echo $rowage['correo'];?></a></td>
                  <td class="hidden-480"><?php echo $rowage['telefono'];?></td>
                  <td class="hidden-phone"><?php echo $rowage['distrito'];?></td>
                  <td class="hidden-480"><?php echo $rowage['fec_ing'];?></td>
                  <td class="td-actions">
                  <div class="hidden-phone visible-desktop action-buttons">
                      <?php if ($rowage['estado']=='1'){ ?>
                      <a title="Eliminar" id="delete" class="red" href="javascript: fn_eliminar(<?=$rowage['id']?>);"> <i class="icon-trash bigger-130"></i></a>
                      <?php }?>
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
		
	
		
		
		//elimina agente
		
		
		
		function fn_eliminar(ide_per){
			
	var respuesta = confirm("Deseas Eliminar Postulante ");
	if (respuesta){
		$.ajax({
			url: 'action/eliminar_postulantes.php',
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
