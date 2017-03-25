<?php
  include('dblib.php');
  $no=$_POST['no'];
  $title=$_POST['title'];
  $theme=$_POST['theme'];
  $date=$_POST['date'];
  $writer=$_POST['writer'];
  $count=$_POST['count'];
  $content=$_POST['content'];
  $flag=$_POST['flag'];
  $sex=$_POST['sex'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="insert into dalgona_content values(NULL,'$title','$theme','$date','$content','$writer',$count,0,$flag,'$sex')";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
