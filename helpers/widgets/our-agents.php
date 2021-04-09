<div class="widget our-agents">
    <div class="title">
        <h2>Nuestros Agentes</h2>
    </div><!-- /.title -->

    <div class="content">
                            <?php
                            try {
    $soap = new SoapClient($wsdl, $options);
    $agent = $soap->getAgent('1','1',$oficina);

    }
catch(Exception $e) {
    die($e->getMessage());
}
$topage=new SimpleXMLElement($agent);
//echo $topage->USER[0]->ID;
for ($i=0; $i < 8 ; $i++)
{  ?>
		<div class="agent">
            <div class="image">
                <img src="<?php echo $topage->USER[$i]->FOTO_PRINCIPAL;?>" alt="<?php echo $topage->USER[$i]->NOMBRE;?> <?php echo $topage->USER[$i]->APELLIDOS;?>">
            </div><!-- /.image -->
            <div class="name">
            <?php echo ucfirst(strtolower($topage->USER[$i]->NOMBRE));?> 
            <?php echo ucfirst(strtolower($topage->USER[$i]->APELLIDOS));?></div><!-- /.name -->
            <div class="phone"><?php echo $topage->USER[$i]->CELULAR;?></div><!-- /.phone -->
            <div class="email"><a href="mailto:<?php echo $topage->USER[$i]->EMAIL;?>" title="<?php echo $topage->USER[$i]->NOMBRE;?> <?php echo $topage->USER[$i]->APELLIDOS;?>"><?php echo $topage->USER[$i]->EMAIL;?></a></div><!-- /.email -->
            </div><!-- /.agent -->	
<?php };?>
        
    </div><!-- /.content -->
</div><!-- /.our-agents -->
