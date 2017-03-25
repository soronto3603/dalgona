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
    <img id=header_dalgona src="img/info_logo_big_154x158.png" style='width: 55px;margin-top: 5px;'>
    <p id=header_title style='margin-left: 20px;'>수다카페</p>
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
    <img id=icon src="<?php if($_GET['sort']==""){echo "img/btn_new_134x134.png";}else{echo "img/btn_hot_134x134.png";}?>" onclick="change_sort()">
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
