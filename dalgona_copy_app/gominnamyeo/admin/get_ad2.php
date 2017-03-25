<?php
  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_ad2 order by no desc";
  $ret=mysqli_query($conn,$query);

  while($row=mysqli_fetch_row($ret)){
    echo "<div id=app".$row[0]." class=app>
      <img class=img id=img".$row[0]." align=middle onclick='imgclick(this)' src='".$row[1]."'>
      <form name='upload-form' action='upload.php' method='post' enctype='multipart/form-data'>
        <input type='hidden' name='MAX_FILE_SIZE' value='25242880'/>
        <input type='file' name='upload' id='upload''/>
        <input type='hidden' name='no' value='".$row[0]."'/>
        <input type=submit value='이미지업로드' class=btn>
      </form>
      url　<input type=text id=url".$row[0]." class=url value='".$row[2]."'>
      확률 ( 0~100 )<input type=text id=odd".$row[0]." class=url value='".$row[3]."'>
      <button onclick='update(".$row[0].")'>수정</button>
      <button onclick='delete_ad2(".$row[0].")'>삭제</button>
    </div>";
  }

?>
