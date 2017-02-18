<?php
  $phone_number=$_POST['phone_number'];

  include('dblib.php');
  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
  $query="select * from dalgona_user where phone_number='$phone_number'";
  $ret=mysqli_query($conn,$query);
  while($row=mysqli_fetch_row($ret)){
    echo "기존 사용자";
    return;
  }
  echo "신규 사용자";
?>
