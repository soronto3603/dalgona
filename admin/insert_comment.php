<?php
  include('dblib.php');
  $no=$_POST['no'];
  $writer=$_POST["writer"];
  $sex=$_POST["sex"];
  $comment=$_POST["comment"];
  $flag=$_POST["flag"];
  $time=$_POST["time"];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="insert into dalgona_comment values($no,'$writer','$sex','$comment','$flag','$time',NULL)";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
