<?php
  include('dblib.php');
  $no=$_POST['no'];
  $name=$_POST['name'];
  $age=$_POST['age'];
  $phone=$_POST['phone'];
  $sex=$_POST['sex'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="update dalgona_user set nickname='$name',age='$age',phone_number='$phone',sex='$sex' where no=$no";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
