<?php
  include('dblib.php');
  $name=$_POST['name'];
  $age=$_POST['age'];
  $phone=$_POST['phone'];
  $sex=$_POST['sex'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="insert into dalgona_user values(NULL,'NULL','$age','$name','$phone','$sex')";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
