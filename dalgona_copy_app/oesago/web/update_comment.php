<?php
  $read=$_POST['read'];
  $comment=urlencode($_POST['comment']);
  $writer=$_POST['writer'];
  $flag=$_POST['flag'];

  include('dblib.php');

  $writer=str_replace("?","",$writer);

  $hour=date("H");
  if((int)$hour>12)$hour="오후 ".((int)$hour-12);
  else $hour="오전".$hour;
  $time=$hour.date(":i");
  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
  $query="select nickname,sex from dalgona_user where phone_number=$writer";
  $ret=mysqli_query($conn,$query);
  $nickname;
  $sex;
  while($row=mysqli_fetch_row($ret)){
    $nickname=$row[0];
    $sex=$row[1];
  }
  if($writer=="운영자"){
    $nickname="운영자";
    $sex="남자";
  }
  $query="insert into dalgona_comment values($read,'$nickname','$sex','$comment',$flag,'$time',NULL)";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
