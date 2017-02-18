<?php
  $no=$_POST['no'];

  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="delete from dalgona_content where no=$no";
  $ret=mysqli_query($conn,$query);
?>
