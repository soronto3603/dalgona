<?php
  include('dblib.php');
  $flag=$_POST['flag'];

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
  if($_POST['sort']==""){
    $query="select * from dalgona_content where flag=$flag order by no desc";
  }
  else{
    $query="select * from dalgona_content where flag=$flag order by count desc";
  }
  $ret=mysqli_query($conn,$query);

  $theme_list['이별후에']="background-color:#9163b6";
  $theme_list['연애중']="background-color:#f19670";
  $theme_list['남VS여']="background-color:#5698c4";
  $theme_list['직장생활']="background-color:#8aac7a";
  $theme_list['유부공감']="background-color:#e16552";
  $theme_list['사랑해']="background-color:#e279a3";
  $theme_list['결혼/재혼']="background-color:#7c9fb0";
  $theme_list['임신/육아']="background-color:#e3be7f";
  $theme_list['억울해요']="background-color:#65387d";
  $theme_list['기타']="background-color:#51574a";
  $theme_list['유머']="background-color:#e3be7f";
  $theme_list['맛집']="background-color:#8e8c6d";
  $theme_list['스포츠']="background-color:#407563";
  $theme_list['연애']="background-color:#f19670";
  $theme_list['꿀팁']="background-color:#e9d78e";
  $theme_list['짤']="background-color:#e2975d";

  while($row=mysqli_fetch_row($ret)){
    $query="select count(*) from dalgona_comment where content_no=".$row[0];
    $ret1=mysqli_query($conn,$query);
    $comment;
    while($row1=mysqli_fetch_row($ret1)){
      $comment=$row1[0];
    }
    echo "<tr onclick='read_content(".$row[0].")'>
      <td id=theme><div id=circle style='".$theme_list[$row[2]]."'>
        <center><p id=circle_text class='charactor-size".strlen($row[2])."'>".$row[2]."</p></center>
      </div></td>
      <td><p style='font-size:14px'>".$row[1]."</p><br><p style='font-size:9.5px;'>".$row[5]." 조회 ".$row[6]." 댓글 ".$comment."</p></td>
      <td id=time><p>".$row[3]."</p></td>
    </tr>";
  }

?>
