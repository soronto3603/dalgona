<?php
  $read=$_POST['read'];
  $title=$_POST['title'];
  $theme=$_POST['theme'];
  $content=$_POST['content'];
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

  $content=str_replace("\n","<br>",$content);

  $query="update dalgona_content set title='$title' , theme='$theme' , content='$content' , date='$time' where no=$read";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
