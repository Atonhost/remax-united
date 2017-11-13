<div class="properties-rows">
    <div class="row">
    <?php 
    try {
    $soap = new SoapClient($wsdl, $options);
    $pro = $soap->getPropertie('1','1',$oficina);
    //tipo de moneda
    $currency = $soap->getCurrency();
    //tipos de areas
    $typearea = $soap->getTypeArea();
    //ubicacion
    $ubi = $soap->getLocale();
    // categoria propiedad
    $cate= $soap->getTypeCategory();
    }
catch(Exception $e) {
    die($e->getMessage());
}
$propiedades = new SimpleXMLElement($pro);
$resultado = $propiedades->xpath("/PROPERTIES/PROPERTIE[ID_AGENTE='$id']");
foreach( $resultado as $propiedad )
    { 
        ?>
        <div class="property span9">
            <div class="row">
                <div class="image span3">
                    <div class="content">
                        <a href="propiedades.php?id=<?php echo $propiedad->ID;?>"></a>
                        <img src="<?php echo $propiedad->FOTO_PRINCIPAL;?>" alt="<?php echo $propiedad->NOTA;?>">
                    </div><!-- /.content -->
                </div><!-- /.image -->

                <div class="body span6">
                    <div class="title-price row">
                        <div class="title span4">
                            <h2>
                            <a href="propiedades.php?id=<?php echo $propiedad->ID;?>" title="<?php echo $propiedad->NOTA;?>">
                            <?php echo getSubString(ucwords(strtolower($propiedad->NOTA)),50);?></a></h2>
                        </div><!-- /.title -->

                        <div class="price">
                           <?php $idmoneda= $propiedad->MONEDA;
                           $currencys = new SimpleXMLElement($currency);
                            $resultados = $currencys->xpath("/CURRENCYS/CURRENCY[ID='$idmoneda']");
                            foreach( $resultados as $tipomoneda ){
                            echo $tipomoneda->ALIAS; } ?> 
                            <?php echo number_format( (int)$propiedad->PRECIO);?>
                            <br><br>
                            <span style="color: #E41B36; font-size: 21px;"><?php $idcat=$propiedad->CATEGORIA;
                            $categorias = new SimpleXMLElement($cate);
                            $rcat = $categorias->xpath("/TYPE-CATEGORYS/TYPE-CATEGORY[ID='$idcat']");
                            echo $rcat[0]->NOMBRE;
                            ?></span>
                        </div><!-- /.price -->
                    </div><!-- /.title -->
                    <div class="location"><?php 
                        $iddis= $propiedad->DISTRITO;
                        $idpro=$propiedad->PROVINCIA;
                        $depar=$propiedad->DEPARTAMENTO;
                        $ubicaciones = new SimpleXMLElement($ubi);
                        $rdepa = $ubicaciones->xpath("/LOCAL/ROW[ID_DEPARTAMENTO='$depar']");
                        $rpro = $ubicaciones->xpath("/LOCAL/ROW[ID_PROVINCIA='$idpro']");
                        $rubi = $ubicaciones->xpath("/LOCAL/ROW[ID_DISTRITO='$iddis']");
                        echo ucfirst(strtolower($rdepa[0]->DEPARTAMENTO))." - ". ucfirst(strtolower($rpro[0]->PROVINCIA))." - ". ucfirst(strtolower($rubi[0]->DISTRITO));?>
                    </div><!-- /.location -->
                    <p><?php echo getSubString($propiedad->DESCRIPCION, 200);?></p>
                     <div class="area">
                        <span class="key">Area:</span><!-- /.key -->
                        <span class="value"><?php echo $propiedad->AREA_TERRENO;?> <?php $idarea= $propiedad->TIPO_AREA_CONSTRUCCION;
                            $typeareas = new SimpleXMLElement($typearea);
                            $rarea = $typeareas->xpath("/TYPE-AREAS/TYPE-AREA[ID='$idarea']");
                            foreach( $rarea as $tipoarea ){
                            echo $tipoarea->ALIAS;
                            }
                        ?></span><!-- /.value -->
                    </div><!-- /.area -->
                    <div class="bedrooms"><div class="content"><?php echo $propiedad->HABITACION;?></div></div><!-- /.bedrooms -->
                    <div class="bathrooms"><div class="content"><?php echo $propiedad->BANO;?></div></div><!-- /.bathrooms -->
                    <a class="btn btn-primary arrow-right" href="propiedades.php?id=<?php echo $propiedad->ID;?>">Ver Detalles</a>

                </div><!-- /.body -->
            </div><!-- /.property -->
        </div><!-- /.row -->
<?php };?>
    </div><!-- /.row -->
</div><!-- /.properties-rows -->
