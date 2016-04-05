<?php
// This is the serverrest, 2 possibilities: show the app list or show a specific app by id.
// This would normally be pulled from a database but for demo purposes, I will be hardcoding the return values.
// https://trinitytuts.com/build-first-web-service-php/

function get_app_by_id($id)
{
  $app_info = array();

  // normally this info would be pulled from a database.
  // build JSON array.
  switch ($id){
    case 1:
      $app_info = array("Hello, selamat datang" => "Budi Suseno", "nim anda" => "32323"); 
      break;
    case 2:
      $app_info = array("Hey, selamat datang budi" => "nim anda 22111");
      break;
    case 3:
      $app_info = array("38");
      break;
    case 4:
      $app_info = array("30");
      break;
	case 5:
      $app_info = array("18");
      break;
	case 6:
      $app_info = array("-10");
      break;
  }

  return $app_info;
}

function get_app_list()
{
  //normally this info would be pulled from a database.
  //build JSON array
  $app_list = array(array("id" => 1, "name" => "Hello,selamat datang"), array("id" => 2, "name" => "Hey, selamat datang budi"), array("id" => 3, "name" => "38"), array("id" => 4, "name" => "30"), array("id" => 5, "name" => "18"), array("id" => 6, "name" => "-10")); 

  return $app_list;
}

$possible_url = array("get_app_list", "get_app", "getMahasiswa");

$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
  switch ($_GET["action"])
    {
      case "get_app_list":
        $value = get_app_list();
        break;
      case "get_app":
        if (isset($_GET["id"]))
          $value = get_app_by_id($_GET["id"]);
        else
          $value = "Missing argument";
        break;
       case "getMahasiswa":
        if (isset($_GET["id"]))
          $value = getMahasiswa($_GET["id"]);
        else
          $value = "Missing argument";
        break;
    }
}

// kamal

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$json = file_get_contents('php://input');
	$obj = json_decode($json);
	$value =  "berhasil diinput ". $obj->{'nama'};
}

if($_SERVER['REQUEST_METHOD'] == "PUT"){
	$json = file_get_contents('php://input');
	$obj = json_decode($json);	
	$id= $_SERVER['HTTP_ID'];
	
	$value = "berhasil diupdate ".$id." ".$obj->{'nama'};
}

if($_SERVER['REQUEST_METHOD'] == "DELETE"){
	$id= $_SERVER['HTTP_ID'];	
	$value = "dihapus ". $id;
	
}

header('Content-type: application/json');
//return JSON array
exit(json_encode($value));
?>
