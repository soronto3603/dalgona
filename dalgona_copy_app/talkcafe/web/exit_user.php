<?php
  include('dblib.php');
  $id=$_POST['id'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $id=str_replace("?","",$id);
  $query="delete from dalgona_user where phone_number='$id'";
  $ret=mysqli_query($conn,$query);
?>
