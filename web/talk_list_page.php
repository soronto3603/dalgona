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
    <img id=header_background src="img/gradient.png">
    <img id=header_dalgona src="img/img_logo_90x120.png">
    <p id=header_title>달고나</p>
    <img src="img/gear.png" width="20px" height="20px" id=side_menu onclick="show_config()">
  </div>
  <div id=notice>
    <!--
    <div style="background-color: #373433;width: 90%;height: 35px;margin: auto;margin-top: 7.5px;border-radius: 20px;">
      <div style="position: relative;top: 7px;left: 10px;">
        <p style="float:left;color:#ff4e4e;font-size:12px">공지</p>
        <p id=notice_text>클럽에 남친을 보내면 안되는 이유</p>
      </div>
    </div>-->
  </div>
  <table id=content_table style="margin-top:115px;">
<!--
    <tr>
      <td id=theme>
        <img height="30px" style="margin-left: 10px;" src="img/img_category_loving_118x50.png">
      </td>
      <td><p style="font-size:12px">클럽에 남친을 보내면 안되는 이유</p>
        <br><p style="font-size:10px;">뽀로뽕뽕 조회 5 추천 2</p></td>
    </tr>
    <tr>
      <td id=theme>
        <img height="30px" style="margin-left: 10px;" src="img/img_category_marriagexdivorce_135x50.png">
      </td>
      <td><p style="font-size:12px">클럽에 남친을 보내면 안되는 이유</p>
        <br><p style="font-size:10px;">뽀로뽕뽕 조회 5 추천 2</p></td>
    </tr>-->

  </table>
  <div id=icon_box>
    <img id=icon src="img/btn_new_134x134.png" style="<?php if($_GET['sort']==""){}else{echo "opacity:0.5;";}?>" onclick="change_sort()">
    <img id=icon style="margin-top:10px;" src="img/btn_write_134x134.png" onclick="make_content()">
  </div>
  <div id=ad_box>

  </div>
  <?php
    include('ad_module.php');
  ?>
</body>
<script type="text/javascript" src="js/talk_list.js"></script>
</html>
