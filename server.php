<?php

class MyWs{

    function hello($data) {
        $nama=$data->nama;
        $nim=$data->nim;

        return ['out' => 'Hallo, Selamat datang '.$nama.' NIM anda '.$nim];
    }

    function tambah($prmTambah){
        $prm1=$prmTambah->prm1;
        $prm2=$prmTambah->prm2;

        return ['out' => $prm1 + $prm2];
    }

    function kurang($prmKurang){
        $prm1=$prmKurang->prm1;
        $prm2=$prmKurang->prm2;

        return ['out' => $prm1 - $prm2];
    }

}

//ini_set("soap.wsdl_cache_enabled", 0);

$server = new SoapServer("../server/uts.wsdl");
$server->setClass("MyWs");
$server->handle();

?>
