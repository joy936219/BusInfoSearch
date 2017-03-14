<?php
    $url = 'http://ibus.tbkc.gov.tw/xmlbus/StaticData/GetRoute.xml';
    $xml =simplexml_load_file($url);
    //print_r($xml);
    //echo $xml->BusInfo[0]->Route[0]['ID'];
    $list='';
     foreach ($xml->BusInfo[0] as  $value) {
         $list.= '<option value="'.$value['ID'].'"">'.$value['nameZh'].'</option>';
     }
    echo $list;

    
?>
