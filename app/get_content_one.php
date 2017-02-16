<?php
  include('dblib.php');
  $id=$_POST['id'];
  $no=$_POST['read'];
  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $id=str_replace("?","",$id);
  $query="select nickname from dalgona_user where phone_number=$id";
  $ret=mysqli_query($conn,$query);

  $nickname;
  while($row=mysqli_fetch_row($ret)){
    //echo $name;
    //echo ":".$row[0];
    $nickname=$row[0];
  }

  $query="select * from dalgona_content where no=$no";
  $ret=mysqli_query($conn,$query);

  while($row=mysqli_fetch_row($ret)){
    echo "
    <div id=notice>
      <h3 id=title>".$row[1]."</h3>
    </div>
    <div> 작성자 : ".$row[5];
    if($nickname==$row[5]){
      echo "<div style='font-size:9px;display:inline-block;float:right;color: #fa3e3e;' onclick='delete_content(".$row[0].")'>삭제하기</div><div style='display:inline-block;float:right;color:#3e5b99;margin-right:5px;font-size:9px;' onclick='update_content(".$row[0].")'>수정하기</div>";
    }
    echo "</div>
    <div id=content>
        ".$row[4]."
    </div>";
  }

?>
