<?php
  include('dblib.php');

  $message=$_POST['message'];
  $url=$_POST['url'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="update dalgona_message set message='$message',url='$url' where no=1";
  $ret=mysqli_query($conn,$query);
  //echo "<div style=\"margin-top:7px;\" onclick='move_page(\"".$row[2]."\")'>
  //  <p style=\"float:left\">공지</p>
  //  <p id=\"notice_text\">".$row[1]."</p>
  //</div>";
?>
