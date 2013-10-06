<?php
 function activation($cardId){
  mysql_connect("localhost","root","root");
  mysql_select_db("ws");

  $result = mysql_query("select * from card where id_kartu ='".$cardId."'");
  while ($data = mysql_fetch_array($result)) {

   $update = mysql_query("update card set tgl=now(), status='active', 
    msdn='1234321',sn='2345623' where id_kartu ='".$cardId."'");

   $card = array(
    "id" => $data['id'],
    "id_kartu" => $data['id_kartu'],
    "tgl" => $data['tgl'],
    "status" => $data['status'],
    "msdn" => $data['msdn'],
    "sn" => $data['sn']
   );
  }
  mysql_close();
  return $card;
 }

 require ("../../lib/nusoap.php");
 $server = new nusoap_server();
 $server->configureWSDL("Activation","urn:activationService");
 $server->wsdl->addComplexType(
  "card",
  "complexType",
  "struct",
  "all",
  "",
  array(
   "id_kartu"=>array("name"=>"id_kartu","type"=>"xsd:string"),
   "tgl"=>array("name"=>"tgl","type"=>"xsd:string"),
   "status"=>array("name"=>"status","type"=>"xsd:string"),
   "msdn"=>array("name"=>"msdn","type"=>"xsd:string"),
   "sn"=>array("name"=>"sn","type"=>"xsd:string")
  )
 );

 $server->register("activation",array("cardId"=>"xsd:string"), array("return"=>"tns:card"),"urn:activationService","urn:activationService#activation");

 $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : "";
 $server->service($HTTP_RAW_POST_DATA);
?>