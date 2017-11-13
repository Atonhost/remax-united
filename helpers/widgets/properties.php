<div class="widget properties last">
    <div class="title">
        <h2>Ultimas Propiedades</h2>
    </div><!-- /.title -->

    <div class="content">
    <?php
try {

    // categoria propiedad
    $cate=$soap->getTypeCategory();
    }
catch(Exception $e) {
    die($e->getMessage());
}
$topage=new SimpleXMLElement($pro);

for ($i=0; $i < 4 ; $i++) 
{  ?>
<div class="property">
                      <div class="image"> <a href="propiedades.php?id=<?php echo $topage->PROPERTIE[$i]->ID;?>"></a> <img src="<?php echo $topage->PROPERTIE[$i]->FOTO_PRINCIPAL;?>" alt="<?php echo $rowulpro['titulo'];?>"> </div>
                      <!-- /.image -->                      
                      <div class="wrapper">
                        <div class="title">
                          <h3> <a href="propiedades.php?id=<?php echo $topage->PROPERTIE[$i]->ID;?>">
                          <?php echo getSubString(ucwords(strtolower($topage->PROPERTIE[$i]->NOTA)),50);?></a> </h3>
                        </div>
                        <!-- /.title -->
                        <div class="location"><span style="color: #E41B36;"><?php $idcatS= $topage->PROPERTIE[$i]->CATEGORIA;
                            $Scategorias = new SimpleXMLElement($cate);
                            $Srcat = $Scategorias->xpath("/TYPE-CATEGORYS/TYPE-CATEGORY[ID='$idcatS']");
                            echo $Srcat[0]->NOMBRE;                            
                            ?></span></div>
                        <!-- /.location -->
                        <div class="price"><?php $sidmoneda= $topage->PROPERTIE[$i]->MONEDA;
                           $scurrencys = new SimpleXMLElement($currency);
                            $Sresultados = $scurrencys->xpath("/CURRENCYS/CURRENCY[ID='$sidmoneda']");
                            echo $Sresultados[0]->ALIAS;?> <?php  $precios= (int) $topage->PROPERTIE[$i]->PRECIO;
                            echo number_format($precios);
                            ?></div>
                        <!-- /.price --> 
                      </div>
                      <!-- /.wrapper --> 
                    </div><!-- /.property --><?php };?>

    </div><!-- /.content -->
</div><!-- /.properties -->
