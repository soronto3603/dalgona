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
/*
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
  $theme_list['짤']="background-color:#e2975d";*/
  $theme_list['이별후에']="img_category_afterbreakup_135x50-.png";
  $theme_list['연애중']="img_category_loving_118x50.png";
  $theme_list['남VS여']="img_category_menvswomen_118x50.png";
  $theme_list['직장생활']="img_category_companylife_135x50.png";
  $theme_list['유부공감']="img_category_marriage_135x50.png";
  $theme_list['사랑해']="img_category_loveyou_118x50.png";
  $theme_list['결혼/재혼']="img_category_marriagexdivorce_135x50.png";
  $theme_list['임신/육아']="img_category_pregnancy_135x50.png";
  $theme_list['억울해요']="img_category_unfair_135x50.png";
  $theme_list['기타0']="img_category_etc_118x50.png";
  $theme_list['유머']="img_category-_fun_118x50.png";
  $theme_list['맛집']="img_category-_food_118x50.png";
  $theme_list['스포츠']="img_category-_sports_118x50.png";
  $theme_list['연애']="img_category-_love_118x50.png";
  $theme_list['꿀팁']="img_category-_tips_118x50.png";
  $theme_list['짤']="img_category-_mim_118x50.png";
  $theme_list['기타1']="img_category-_etc_118x50.png";

  while($row=mysqli_fetch_row($ret)){
    $query="select count(*) from dalgona_comment where content_no=".$row[0];
    $ret1=mysqli_query($conn,$query);
    $comment;
    while($row1=mysqli_fetch_row($ret1)){
      $comment=$row1[0];
    }
    echo "<tr onclick='read_content(".$row[0].")'>
      <td id=theme>
        <img height='30px' style='margin-left: 10px;' src='img/".$theme_list[$row[2]]."'>
      </td>
      <td><p style='font-size:12px'>".$row[1]."</p><br><p style='font-size:10px;'>".$row[5]."　|　조회<font style='color:#ff986a'>".$row[6]."</font>　|　댓글<font style='color:#ff986a'>".$comment."</font></p></td>
    </tr>";
  }

?>
