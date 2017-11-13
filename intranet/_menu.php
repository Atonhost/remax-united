<div class="sidebar" id="sidebar">
  
  <!--#sidebar-shortcuts-->
  
  <ul class="nav nav-list">
    
    <?php if ($_SESSION['Xtipouser']=='admin'){ ?>
    <li> <a href="#" class="dropdown-toggle"> <i class="icon-desktop"></i> <span class="menu-text"> Configuraciones </span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">
        <li> <a href="social.php"> <i class="icon-double-angle-right"></i> Social </a> </li>
      </ul>
    </li>
    
  
    <li> <a href="#" class="dropdown-toggle"> <i class="icon-group"></i> <span class="menu-text"> Agentes </span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">
        <li> <a href="agentes.php"> <i class="icon-double-angle-right"></i> Todos Agentes </a> </li>
        <li> <a href="nuevo_agente.php"> <i class="icon-double-angle-right"></i> Nuevo Agentes </a> </li>
        <li> <a href="postulantes.php"> <i class="icon-double-angle-right"></i> Postulantes </a> </li>
      </ul>
    </li>
	<?php }?>
    <li> <a href="#" class="dropdown-toggle"> <i class="icon-home"></i> <span class="menu-text"> Propiedades </span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">
        <li> <a href="propiedades.php"> <i class="icon-double-angle-right"></i> Todas Propiedades </a> </li>
        <li> <a href="nueva_propiedad.php"> <i class="icon-double-angle-right"></i> Nueva Propiedades </a> </li>
      </ul>
    </li>

<li class="active"> <a href="login.php?logout"> <i class="icon-dashboard"></i> <span class="menu-text"> Salir </span> </a> </li>
  </ul>
  <!--/.nav-list-->
  
  <div class="sidebar-collapse" id="sidebar-collapse"> <i class="icon-double-angle-left"></i> </div>
</div>
