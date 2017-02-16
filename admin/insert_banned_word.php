<?php
  $word=$_POST['word'];

  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="insert into dalgona_user values( NULL,'$word')";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
