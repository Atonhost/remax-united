
<div class="properties-grid">

    <div class="row">
        <?php
        try {

            // categoria propiedad
            $cate=$soap->getTypeCategory();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
        $topage=new SimpleXMLElement($pro);

        for ($i=0; $i < 9 ; $i++)
        {  ?>
        <div id="norma" style="width:auto; float:left; margin-top:20px;">
            <div class="property span3">
                <div class="image">
                    <div class="content">
                        <a href="propiedades.php?id=<?php echo $topage->PROPERTIE[$i]->ID;?>"> </a>
                        <img src="<?php echo $topage->PROPERTIE[$i]->FOTO_PRINCIPAL;?>" alt="<?php echo $rowulpro['titulo'];?>" style="height: 200px">
                    </div><!-- /.content -->

                    <div class="price"><?php $sidmoneda= $topage->PROPERTIE[$i]->MONEDA;
                        $scurrencys = new SimpleXMLElement($currency);
                        $Sresultados = $scurrencys->xpath("/CURRENCYS/CURRENCY[ID='$sidmoneda']");
                        echo $Sresultados[0]->ALIAS;?> <?php  $precios= (int) $topage->PROPERTIE[$i]->PRECIO;
                        echo number_format($precios);
                        ?></div><!-- /.price -->
                    <div class="reduced"></div><!-- /.reduced -->
                </div><!-- /.image -->

                <div class="title">
                    <h2 style="display:block; height:50px; "><a href="propiedades.php?id=<?php echo $topage->PROPERTIE[$i]->ID;?>"><?php echo getSubString(ucwords(strtolower($topage->PROPERTIE[$i]->NOTA)),50);?></a></h2>
                </div><!-- /.title -->

                <div class="location" style="display:block; height:50px;"><br>
                   peru- lima</div><!-- /.location -->
                <div class="location"><span style="color: #E41B36;"><?php $idcatS= $topage->PROPERTIE[$i]->CATEGORIA;
                        $Scategorias = new SimpleXMLElement($cate);
                        $Srcat = $Scategorias->xpath("/TYPE-CATEGORYS/TYPE-CATEGORY[ID='$idcatS']");
                        echo $Srcat[0]->NOMBRE;
                        ?></span></div>
                <!-- /.location -->
                <div class="area">
                    <span class="key">Area:</span><!-- /.key -->
                    <span class="value">2000M</span><!-- /.value -->
                </div><!-- /.area -->
                <div class="bedrooms"><div class="content">5 </div></div><!-- /.bedrooms -->
                <div class="bathrooms"><div class="content">4</div></div><!-- /.bathrooms -->
            </div><!-- /.property -->

        </div>
        <?php };?>
    </div><!-- /.row -->

</div>
