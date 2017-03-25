<?php
  include('dblib.php');
  $url=$_POST['url'];
  $image=$_POST['image'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  if($url=="")$url="비어있음";
  $query="insert into dalgona_ad2 values(NULL,'$image','$url',0)";
  $ret=mysqli_query($conn,$query);
  echo "광고가 추가 되었습니다.";
  //while($row=mysqli_fetch_row($ret)){}
?>
