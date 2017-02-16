<?php
  include('dblib.php');
  $no=$_POST['no'];
  $title=$_POST['title'];
  $theme=$_POST['theme'];
  $date=$_POST['date'];
  $writer=$_POST['writer'];
  $count=$_POST['count'];
  $content=$_POST['content'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="update dalgona_content set title='$title',theme='$theme',date='$date',content='$content',writer='$writer',count='$count' where no=$no";
  $ret=mysqli_query($conn,$query);

  //while($row=mysqli_fetch_row($ret)){}
?>
