<?php
  $id=$_POST['id'];
  $no=$_POST['no'];

  include('dblib.php');

  $id=str_replace("?","",$id);
  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select writer from dalgona_content where no=$no";
  $ret=mysqli_query($conn,$query);

  $name;
  while($row=mysqli_fetch_row($ret)){
    $name=$row[0];
  }
  $query="select nickname from dalgona_user where phone_number=$id";
  $ret=mysqli_query($conn,$query);

  while($row=mysqli_fetch_row($ret)){
    //echo $name;
    //echo ":".$row[0];
    if($name==$row[0])echo "true";
    else echo "false";
  }

?>
