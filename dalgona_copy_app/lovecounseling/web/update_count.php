<?php
  include('dblib.php');
  $read=$_POST['read'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="update dalgona_content set count=count+1 where no=$read";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
