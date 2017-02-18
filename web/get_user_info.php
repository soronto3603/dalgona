<?php
  include('dblib.php');
  $id=$_POST['id'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $id=str_replace("?","",$id);
  $query="select * from dalgona_user where phone_number='$id'";
  $ret=mysqli_query($conn,$query);
  while($row=mysqli_fetch_row($ret)){
    echo '{"age":"'.$row[2].'","nickname":"'.$row[3].'","sex":"'.$row[5].'"}';
  }
?>
