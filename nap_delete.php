<?php
$link = mysql_connect("localhost","root","");
  if (!$link)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $link);
include("nap_encrypt.php");

if(isset($_POST['activity'])){


  $activity = $_POST['activity'];

  $main = explode("/",$activity);

  $id = $main[0];
  $table = $main[1];
  //$msg = $main[2];

  $table1 = encrypt_decrypt('decrypt', $table);


  $update = mysql_query("UPDATE test SET name='$table' WHERE id='1'");

}


?>
