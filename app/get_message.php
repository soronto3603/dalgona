<?php
  include('dblib.php');

  $message=$_POST['message'];
  $url=$_POST['url'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_message";
  $ret=mysqli_query($conn,$query);
  //onclick='move_page(\"".$row[2]."\")'
  while($row=mysqli_fetch_row($ret)){
    echo "<div style='background-color: #373433;width: 90%;height: 35px;margin: auto;margin-top: 7.5px;border-radius: 20px;'>
      <div style='position: relative;top: 7px;left: 10px;'>
        <p style='float:left;color:#ff4e4e;font-size:12px'>공지</p>
        <p id=notice_text>".$row[1]."</p>
      </div>
    </div>";
  }

?>
