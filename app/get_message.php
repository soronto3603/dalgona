<?php
  include('dblib.php');

  $message=$_POST['message'];
  $url=$_POST['url'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_message";
  $ret=mysqli_query($conn,$query);

  while($row=mysqli_fetch_row($ret)){
    echo "<div style=\"margin-top:7px;\" onclick='move_page(\"".$row[2]."\")'>
      <p style=\"float:left\">공지</p>
      <p id=\"notice_text\">".$row[1]."</p>
    </div>";
  }

?>
