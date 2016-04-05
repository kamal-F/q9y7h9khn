# q9y7h9khn
webservice konsep, menggunakan apache, php5, hanya response json

Cara pakai di terminal (menggunakan curl)
---------------------------------------------------------------------

test pada terminal anda 

update
-------------

curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XPOST "http://localhost/latihan/utswebservice/server/serverrest.php/" -d '{"nama": "Budi Suseno","nim":"32323"}'

alternatif
-------------------------
curl -i -H "Accept:application/json" -H "application/x-www-form-urlencoded" -d "nama=budi&nim=22111" -XPOST "http://localhost/latihan/utswebservice/server/serverrest.php"

tambah
-----------------------
curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XGET "http://localhost/latihan/utswebservice/server/serverrest.php?operation=tambah&prm1=28&prm2=10"

alternatif
------------------
curl -i -H "Accept:application/json" -H "application/x-www-form-urlencoded" -d "operation=tambah&prm1=10&prm2=20" -XPOST "http://localhost/latihan/utswebservice/server/serverrest.php"

kurang
----------------
curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XGET "http://localhost/latihan/utswebservice/server/serverrest.php?operation=kurang&prm1=28&prm2=10"

alternatif
-------------------
curl -i -H "Accept:application/json" -H "application/x-www-form-urlencoded" -d "operation=kurang&prm1=10&prm2=20" -XPOST "http://localhost/latihan/utswebservice/server/serverrest.php"


get, dengan lebih dari 1 parameter
```
curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XGET "http://localhost/latihan/utswebservice/server/serverrest.php/?action=get_app&id=3"
```

get, 1 parameter
**"http://localhost/latihan/utswebservice/server/serverrest.php/?action=get_app_list**
```
curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XGET ""http://localhost/latihan/utswebservice/server/serverrest.php/?action=get_app_list"
```
