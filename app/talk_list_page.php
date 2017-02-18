<!DOCTYPE html>
<html>
<?php
  if($_GET['id']==""){
    echo "<script>window.parent.postMessage('{\"title\":\"alert\",\"alert\":\"성공적으로 저장하였습니다.\"}',\"*\");
    window.parent.postMessage(\"exit_app\",\"*\");</script>";
  }
?>
<title>dalgona talk_list</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/talk_list.css">
<body>
  <input type=hidden id=id value="<?=$_GET['id']?>">
  <input type=hidden id=flag value="<?=$_GET['flag']?>">
  <input type=hidden id=sort value="<?=$_GET['sort']?>">
  <div id=header>
    <p id=header_title>달콤한 우리들의 고민 나누기</p>
    <img src="img/gear.png" width="25px" height="25px" id=side_menu onclick="show_config()">
  </div>
  <div id=notice>
    <!--<div style="margin-top:7px;">
      <p style="float:left">공지</p>
      <p id=notice_text>클럽에 남친을 보내면 안되는 이유</p>
    </div>-->
  </div>
  <table id=content_table style="margin-top:70px;">
    <!--
    <tr>
      <td id=theme><div id=circle style="background-color:#ff7473">
        <center><p id=circle_text class="charactor-size3">연애중</p></center>
      </div></td>
      <td><p style="font-size:14px">클럽에 남친을 보내면 안되는 이유</p><br><p style="font-size:9.5px;">뽀로뽕뽕 조회 5 추천 2</p></td>
      <td id=time><p>오후 10:01</p></td>
    </tr>
  -->
  </table>
  <div id=icon_box>
    <img id=icon src="<?php if($_GET['sort']==""){echo "img/star.png";}else{echo "img/sort.png";}?>" onclick="change_sort()">
    <span style="position: relative;bottom: 18px;left: 14px;color: #f9f9f9;font-size:7px"><?php if($_GET['sort']==""){echo "인기순";}else{echo "최신순";}?></span>
    <img id=icon style="margin-top:10px;" src="img/pen.png" onclick="make_content()">
    <span style="position: relative;bottom: 18px;left: 14px;color: #f9f9f9;font-size:7px">글쓰기</span>
  </div>
  <div id=ad_box>

  </div>
</body>
<script type="text/javascript" src="js/talk_list.js"></script>
</html>
