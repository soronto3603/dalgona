<?php
  include('dblib.php');
  $no=$_POST['no'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="delete from dalgona_comment where no=$no";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
