<!DOCTYPE html>
<html>
<title>dalgona talk_list</title>
<?php
  if($_GET['id']=="")
  {
    echo "<script>window.parent.postMessage('{\"title\":\"alert\",\"alert\":\"성공적으로 저장하였습니다.\"}',\"*\");
    window.parent.postMessage(\"exit_app\",\"*\");</script>";
  }
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/read.css">
<body style='background-image:url("img/background_pattern_720x1134.png")'>
  <input type=hidden id=flag value="<?=$_GET['flag']?>">
  <input type=hidden id=id value="<?=$_GET['id']?>">
  <input type=hidden id=read value="<?=$_GET['read']?>">
  <div id=header>
    <img id=header_dalgona src="img/logo_67x81.png" style='width: 50px;'>
    <p id=header_title><font style='color:#464646;font-size:24px;'>고민</font><font style='color:#67b4e6;font-size:24px;'>남</font><font style='color:#fa4667;font-size:24px;'>녀</font></p>
  </div>
  <div id=content_box>
  <!--<div id=notice>
    <h3 id=title>제목 내가 살으리 살으리랏다 작성자 현운용</h3>
  </div>
  <div id=content>
      I have a dev *nix box. For most cases I can just ssh into the box and use emacs to develop. However, as I've started doing more Java work with very large codebases, I've realized IntelliJ IDEA is pretty invaluable.

  Problem: I would like to use IntelliJ IDEA on OS X, but work with a project located on some other machine. Is there a way to configure IntelliJ IDEA to do this? (over ssh/mosh/or whatever)

  Thanks.
</div>-->
  </div>
  <table id=comment_table>
    <tr>
      <td><img src="img/user.png" width="20px" height="20px"></td>
      <td><div style="height:40px;width:270px;">
        <p style="margin: 0px;padding: 0px;">nickname</p><br>
        <p style="margin: 0px;padding: 0px;margin-top:-15px;font-size:9px;">내욘ㅇㄴ욘앤요</p>
        <p id=time style="margin:0px;padding:0px;position:relative;top:-25px;float:right;font-size:10px;">오후 08:11</p>
      </div></td>
    </tr>

  </table>
  <table>
    <tr>
      <td><img id=profile src="img/user.png" width="20px" height="20px"></td>
      <td><div style="height:40px;width:270px;display:inline-block">
        <input id=comment_input class="uy_input" type="text" placeholder="댓글을 입력해주세요." style="width:220px;display:inline-block;text-align:left;position:relative;top:-3px;">
      <div style="display:inline-block"><img id=comment_img src="img/next.png" onclick="update_comment()" style="width:20px;background-color:#f9f9f;margin:0px;padding:3px;position:relative;top:5px;margin-left:10px;"></div></div></td>
    </tr>
  </table>


<script type="text/javascript" src="js/read.js"></script>
</html>
