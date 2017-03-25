<?php
  include('dblib.php');
  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from solo_back_app where theme='달고나'";
  $ret=mysqli_query($conn,$query);

  while($row=mysqli_fetch_row($ret)){
    echo "
    <div id=line>
      <center>
        <div id=app_image>
          <img src='".$row[3]."' width='70px'>
        </div>
        <div id=app_descript>
          <p id=app_descript_text>".$row[1]."</p>
          <p style='font-size:10px;text-align:left;position:relative;top:-14px;color:#4d4d4d'>".$row[2]."</p>
        </div>
        <div id=app_install_btn>
          <img src='img/btn_install_112x72.png' width='70px' onclick='move_page(\"".$row[4]."\");'>
        </div>
      </center>
    </div>";
  }
?>
