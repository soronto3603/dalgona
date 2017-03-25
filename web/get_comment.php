<?php
  include('dblib.php');
  $flag=$_POST['flag'];
  $read=$_POST['read'];
  $id=$_POST['id'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $id=str_replace("?","",$id);
  $query="select nickname,sex from dalgona_user where phone_number=$id";
  $ret=mysqli_query($conn,$query);
  $nickname;
  $sex;
  while($row=mysqli_fetch_row($ret)){
    $nickname=$row[0];
    $sex=$row[1];
  }

  $query="select * from dalgona_comment where flag=$flag and content_no=$read order by no desc";
  $ret=mysqli_query($conn,$query);

  while($row=mysqli_fetch_row($ret)){

    echo "<tr>
      <td><img id=profile src='img/";
    if($row[2]=="남자"){
      echo "user_man.png";
    }else if($row[2]=="여자"){
      echo "user_women.png";
    }
    echo "' width='20px' height='20px'></td>
      <td><div style='height:40px;width:270px;'>
        <p style='margin: 0px;padding: 0px;font-size:10px;'>".urldecode($row[1])."</p><br>
        <p style='margin: 0px;padding: 0px;margin-top:-12px;font-size:13px;'>".urldecode($row[3])."</p>
        <p id=time style='margin:0px;padding:0px;position:relative;top:-25px;float:right;font-size:10px;'>".$row[5]."</p>";
    if($row[1]==$nickname || $id=="운영자"){
      echo "<div id=delete onclick='delete_comment(".$row[6].")' style='float:right;font-size:9px;color:#fa3e3e;position: relative;left: 38px;'>삭제</div>";
    }

    echo "</div></td>
    </tr>";
  }

?>
