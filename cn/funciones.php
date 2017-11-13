<?php
//funcion url
 function dameURL(){
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
return $url;
}


  /**
* Return sub string sin etiquetas HTML y puntos suspensivos al final
* @param $string String 
* @param $length Largo que queremos el substring
* @return String con ...
*/
  
  
function getSubString($string, $length=NULL)
{
    //Si no se especifica la longitud por defecto es 50
    if ($length == NULL)
        $length = 50;
    //Primero eliminamos las etiquetas html y luego cortamos el string
    $stringDisplay = substr(strip_tags($string), 0, $length);
    //Si el texto es mayor que la longitud se agrega puntos suspensivos
    if (strlen(strip_tags($string)) > $length)
        $stringDisplay .= '...';
    return $stringDisplay;
};  

?>