<?php
  include('dblib.php');
  $nickname=$_POST['nickname'];
  $id=$_POST['id'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $id=str_replace("?","",$id);
  $query="select * from dalgona_user where nickname='$nickname'";
  $ret=mysqli_query($conn,$query);
  while($row=mysqli_fetch_row($ret)){
    echo "닉네임이 이미 존재 합니다.";
    return;
  }
  $query="update dalgona_user set nickname='$nickname' where phone_number=$id";
  $ret=mysqli_query($conn,$query);
  echo "성공적으로 적용 하였습니다.";


?>
