<body class="pattern-pw-maze-white header-light">

<div id="wrapper-outer" >

<div id="wrapper">

<div id="wrapper-inner">

<!-- BREADCRUMB -->

<div class="breadcrumb-wrapper">

  <div class="container">

    <div class="row">

      <div class="span12">

        <ul class="breadcrumb pull-left">

          <li><a href="index.php" title="Remax United">Inicio</a></li>

        </ul>

        <!-- /.breadcrumb -->

        

        <div class="account pull-right">

          <ul class="nav nav-pills">
          <li><a href="agente/" title="Se un agente RE/MAX"><i class="fa fa-users "></i> Se un agente RE/MAX</a></li>
            <li><a href="intranet/" target="_blank">Intranet</a></li>

            <li><a href="#">Correos</a></li>

          </ul>

        </div>

      </div>

      <!-- /.span12 --> 

    </div>

    <!-- /.row --> 

  </div>

  <!-- /.container --> 

</div>

<!-- /.breadcrumb-wrapper --> 



<!-- HEADER -->

<div id="header-wrapper">

  <div id="header">

    <div id="header-inner">

      <div class="container">

        <div class="navbar">

          <div class="navbar-inner">

            <div class="row">

              <div class="logo-wrapper span4"> <a href="#nav" class="hidden-desktop" id="btn-nav">Toggle navigation</a>

                <div class="logo"> <a href="index.php" title="Remax United"> <img src="assets/img/logo.png" alt="Remax United"> </a> </div>

                <!-- /.logo --> 

                

                <!--<div class="site-name">

                                                <a href="/" title="Home" class="brand">Realia</a>

                                            </div> /.site-name --> 

                

                <!--<div class="site-slogan">

                                                <span>Real estate &amp; Rental<br>made easy</span>

                                            </div> /.site-slogan --> 

              </div>

              <!-- /.logo-wrapper -->

              

              <div class="info">

                <div class="site-email"> 
                <?php
                $url=dameURL();
                if ($url=='http://remax-united.com/servicios.php') {
                ?>
                <a href="mailto:united_consulting@remax-united.com" title="united_consulting@remax-united.com">united_consulting@remax-united.com</a> </div>
                <?php
                  }else{?>
                <a href="mailto:info@remax-united.com" title="info@remax-united.com">info@remax-united.com</a> </div>
                 <?php }
                ?>
                <!-- /.site-email -->

                

                <div class="site-phone"> <span>(51) 593-6000</span> </div>

                <!-- /.site-phone --> 

              </div>

              <!-- /.info --> 

              

              <a class="btn btn-primary btn-large list-your-property arrow-right" href="/intranet/" target="_blank" title="Publicar Propiedades">Publicar Propiedades</a> </div>

            <!-- /.row --> 

          </div>

          <!-- /.navbar-inner --> 

        </div>

        <!-- /.navbar --> 

      </div>

      <!-- /.container --> 

    </div>

    <!-- /#header-inner --> 

  </div>

  <!-- /#header --> 

</div>

<!-- /#header-wrapper --> 



<!-- NAVIGATION -->

<div id="navigation">

  <div class="container">

    <div class="navigation-wrapper">

      <div class="navigation clearfix-normal">

        <ul class="nav">

          <li><a href="index.php" title="Inicio">Inicio</a></li>

          <li><a href="about-us.php" title="Nosotros">Nosotros</a></li>

          <li class="menuparent"> <span class="menuparent nolink">Propiedades</span>

            <ul>

              <li class="menuparent"> <span class="menuparent nolink">Tipo Propiedades</span>

                <ul>

                <?php     

$type = new SimpleXMLElement($types);
//print_r($type);
foreach( $type as $typopro )
    { 
          switch((string) $typopro->NOMBRE) { // Obtener los atributos como índices del elemento
                  case 'Casa':?>
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
    <?PHP break; case 'Condominio':?>
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
    <?PHP break; case 'Departamento':?>   
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
    <?PHP break; case 'Local Comercial':?>   
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
    <?PHP break; case 'Local Industrial':?>   
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
    <?PHP break; case 'Oficinas':?>   
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
    <?PHP break; case 'Playas':?>   
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
    <?PHP break; case 'Proyectos':?>   
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
    <?PHP break; case 'Terreno':?>   
                  <li><a href="tipo_propiedades.php?id=<?php echo  $typopro->ID;?>"><?php echo  $typopro->NOMBRE;?></a></li>
<?php     break; }};?>

                </ul>

             </li>
            

              <li class="menuparent"> <span class="menuparent nolink">Tipo Contrato</span>

                <ul>
                <?php
                $cate = new SimpleXMLElement($cate);
foreach( $cate as $catepro )
    { 

      ?>    
                  <li><a href="categoria_propiedades.php?id=<?php echo  $catepro->ID;?>"><?php echo  $catepro->NOMBRE;?></a></li>
                 <?php } ?>

                </ul>

              </li>

            </ul>

          </li>
<li><a href="servicios.php" title="Nuestros Servicios">Servicios</a></li>
          <li><a href="blog/" title="Visite Nuestro Blog">Blog</a></li>

           <li class="menuparent"> <span class="menuparent nolink">Agente</span>
            <ul>
          <li> <a href="our-agents.php" title="Nuestros agentes">Nuestros Agentes</a></li>
          <li> <a href="agente/" title="Ser un Agente RE/MAX">Postular como Agente</a></li>
      </ul>
      </li>
          <li><a href="contact-us.php" title="Contactenos">Contacto</a></li>

        </ul>

        <!-- /.nav -->

        

        

        <!-- /.language-switcher --> 

        

        

                                <div class="input-append">



                                </div> 

        

        <form method="get" class="site-search" action="resultados.php">

                                <div class="input-append">

                      <input name="q" type="text" autofocus="autofocus" class="search-query span2 form-text input-xlarge" placeholder="Buscar" autocomplete="on" size="20">

                                    <button type="submit" class="btn"><i class="icon-search"></i></button>

          </div> 

        </form>   </div>

      <!-- /.navigation --> 

    </div>

    <!-- /.navigation-wrapper --> 

  </div>

  <!-- /.container --> 

</div>

<!-- /.navigation --> 



<!-- CONTENT -->

<div id="content" class="clearfix">

