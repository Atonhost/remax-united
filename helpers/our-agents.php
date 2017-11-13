<div class="our-agents-large">
    <h2 class="page-header">Nuestros Agentes</h2>

    <div class="content">
       
<?php 

$users=new SimpleXMLElement($agent);

foreach( $users as $agente )
    {
	 ?>
 
 
        <div class="agent">
            <div class="row">
                <div class="image span2">
                    <img src="<?php echo $agente->FOTO_PRINCIPAL;?>" alt="<?php echo $agente->NOMBRE;?> <?php echo $agente->APELLIDOS;?>">
                </div><!-- /.image -->

                <div class="body span6">
                    <h3><?php echo $agente->NOMBRE;?> <?php echo $agente->APELLIDOS;?></h3>
 					
                    </div><!-- /.body -->

                <div class="info span4">
                    <div class="box">
                        <div class="phone"><a href="tel:<?php echo $agente->CELULAR;?>"><?php echo $agente->CELULAR;?></a></div>
                        <div class="office"><a href="tel:<?php echo $agente->TELEFONO;?>"><?php echo $agente->TELEFONO;?></a> </div>
                        <div class="email"><a href="mailto:<?php echo $agente->EMAIL;?>"><?php echo $agente->EMAIL;?></a> </div>
                        
                        <a class="btn btn-primary arrow-right" href="propiedades_agentes.php?id=<?php echo $agente->ID;?>">Ver <?php echo $rowagecc['Total'];?> Propiedades</a>
                  
                    </div>
                </div><!-- /.info -->
            </div><!-- /.row -->
        </div><!-- /.agent -->
<?php };?>
       
       
    </div><!-- /.content -->
</div><!-- /.our-agents -->