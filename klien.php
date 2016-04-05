<?php

$wsdl="http://localhost/latihan/utswebservice/server/uts.wsdl";
$client2 = new SoapClient ( $wsdl, array('cache_wsdl' => WSDL_CACHE_NONE, 'trace'=>1) );

//var_dump($client2->__getFunctions());
//var_dump($client2->__getTypes());
//PERHATIKAN WSDL !!!

echo '<p>';
$helloReq = [
        "nama" => "SILVIANA IDELIA Y SIPAHELUT",
        "nim" => "1144112"
];
$helloResponse = $client2->hello($helloReq);
echo $helloResponse->out;
echo '</p>';

echo '<p>';
$tambahReq = ['prm1'=>10, 'prm2'=>29];
$tambahResponse = $client2->tambah($tambahReq);
echo 'hasil tambah='.$tambahResponse->out;
echo '</p>';

echo '<p>';
$kurangReq = ['prm1'=>10, 'prm2'=>29];
$kurangResponse = $client2->kurang($kurangReq);
echo 'hasil kurang='.$kurangResponse->out;
echo '</p>';


/*
//echo '<br>'.'--------------------'.'<br>';
//var_dump($client2->__getLastResponse());
*/

?>
