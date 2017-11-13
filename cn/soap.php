<?php

ini_set('soap.wsdl_cache_enabled', 0);

ini_set('soap.wsdl_cache_ttl', 900);

ini_set('default_socket_timeout', 6000);

$oficina = '25';

$wsdl = 'http://ws.remax.net.pe/index.php?wsdl';

$options = array(

        'uri'=>'http://schemas.xmlsoap.org/soap/envelope/',

        'style'=>SOAP_RPC,

        'use'=>SOAP_ENCODED,

        'soap_version'=>SOAP_1_1,

        'cache_wsdl'=>WSDL_CACHE_NONE,

        'connection_timeout'=>6000,

        'trace'=>true,

        'encoding'=>'UTF-8',

        'exceptions'=>true,

    );

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

    //tipo propiedad

    $types= $soap->getTypePropertie();

    // agentes

    $agent = $soap->getAgent('1','1',$oficina);

    }

catch(Exception $e) {

    die($e->getMessage());

}

?>