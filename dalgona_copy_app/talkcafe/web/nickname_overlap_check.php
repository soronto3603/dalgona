<?php
  $nickname=$_POST['nickname'];

  include('dblib.php');
  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_banned_word where value='$nickname'";
  $ret=mysqli_query($conn,$query);
  while($row=mysqli_fetch_row($ret)){
    echo "사용 불가능한 닉네임 입니다.";
    return;
  }

  $query="select * from dalgona_user where nickname='$nickname'";
  $ret=mysqli_query($conn,$query);
  while($row=mysqli_fetch_row($ret)){
    echo "닉네임이 이미 존재 합니다.";
    return;
  }
  echo "사용 가능한 닉네임 입니다.";
?>
