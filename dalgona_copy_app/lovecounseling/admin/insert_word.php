<?php
  include('dblib.php');
  $name=$_POST['word'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="insert into dalgona_banned_word values(NULL,'$name')";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
