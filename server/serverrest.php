<?php
// This is the API, 2 possibilities: show the app list or show a specific app by id.
// This would normally be pulled from a database but for demo purposes, I will be hardcoding the return values.
// https://trinitytuts.com/build-first-web-service-php/
function tambah($prm1,$prm2){
        $prm1=28;
        $prm2=10;

        return $prm1 + $prm2;
    }
function get_app_by_id($id)
{
  $app_info = array();
  // normally this info would be pulled from a database.
  // build JSON array.
  switch ($id){
    case 1:
      $app_info = array( "Nama anda adalah"  => "Budi Suseno", "dengan NIM" => "32323");
      break;
    case 2:
      $app_info = array( "Nama anda adalah" => "Budi", "dengan NIM" => "12121");
      break;

  }
  return $app_info;
}
function get_app_list()
{
  //normally this info would be pulled from a database.
  //build JSON array
  $app_list = array(array("id" => 1, "name" => "Budi"), array("id" => 2, "name" => "Budi Suseno"));
  return $app_list;
}


$possible_url = array("tambah","get_app_list", "get_app");
$value = "An error has occurred";
if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
  switch ($_GET["action"])
    {
          case "tambah":
        $value = get_app_list();
        break;
      case "get_app_list":
        $value = get_app_list();
        break;
      case "get_app":
        if (isset($_GET["id"]))
          $value = get_app_by_id($_GET["id"]);
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
