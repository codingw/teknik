<?php
 require ("../../lib/nusoap.php");
?>

<html>
 <head>
  <title>Activation Card</title>
 </head>
 <body>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method = "POST">
   ID Kartu&nbsp;:&nbsp;<input type="text" name="idkartu">&nbsp;
   <input type="submit" name="submit" value="Activate">
  </form>
  <?php
  $url = "http://teknik.net/webservice/nusoap/blog.rosihanari.net/contoh4/server.php";

  if($_POST['submit']){
   $client = new nusoap_client($url);
   $result = $client->call("activation",array("cardId"=>$_POST["idkartu"]));
   $err = $client->getError();
   if($err){
    echo $client->getError();
   }
   else{
    if($result!=null){
     echo $result['id_kartu']." Berhasil diaktivasi";
    }
    else{
     echo "Code Not Found!!!";
    }
   }
  }
  ?>
 </body>
</html>