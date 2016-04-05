<?php

class uts{
    function hello($data) {
        $nama=$data->nama;
        $nim=$data->nim;

        return ['out' => "Hallo, Selamat datang ". $nama ." nim anda ". $nim];
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

$server = new SoapServer("http://localhost:8080/latihan/utswebservice/q9y7h9khn/server/uts.wsdl");
$server->setClass("MyWs");
$server->handle();

?>
