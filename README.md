# q9y7h9khn
webservice konsep, menggunakan apache, php5, hanya response json

Cara Pakai
----------

test pada terminal Anda


```
curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XPOST "http://localhost/latihan/utswebservice/server/serverrest.php/" -d '{"nama": "Budi Suseno","nim":"32323"}'
	output: "Hello, selamat datang Budi Suseno, nim Anda 32323" 
[alternatif]
curl -i -H "Accept:application/json" -H "application/x-www-form-urlencoded" -d "nama=budi&nim=22111" -XPOST "http://localhost/latihan/utswebservice/server/serverrest.php"
	output: "Hey, selamat datang budi, nim Anda 22111"
```

get, dengan lebih dari 1 parameter
```
curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XGET ""http://localhost/latihan/utswebservice/server/serverrest.php?action=get_app&id=3"
```

get, 1 parameter
**"http://localhost/latihan/utswebservice/server/serverrest.php?action=get_app_list**
```
curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XGET "http://localhost/latihan/utswebservice/server/serverrest.php?action=get_app_list"
```