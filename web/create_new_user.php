<?php
  $age=$_POST['age'];
  $nickname=$_POST['nickname'];
  $sex_value=$_POST['sex_value'];
  $phone_number=$_POST['phone_number'];

  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="delete from dalgona_user where phone_number=$phone_number";
  $ret=mysqli_query($conn,$query);

  $query="insert into dalgona_user values( NULL,'none','$age','$nickname','$phone_number','$sex_value')";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
