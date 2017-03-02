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
<link rel="stylesheet" type="text/css" href="css/config.css">
<body>
  <input type=hidden id=flag value="<?=$_GET['flag']?>">
  <input type=hidden id=id value="<?=$_GET['id']?>">
  <input type=hidden id=read value="<?=$_GET['read']?>">

  <div id=exit_modal class=modal onclick="close_modal();" style="display:none">
		<div class="modal-content" style="padding:10px;height:160px;font-size:12px;">
      <center>
			  <p style="text-align:center;font-size:15px;color:#676767;margin-top:20px;">계정을 삭제하시겠습니까?</p>
      <!--<div class="btn" onclick="exit_app();" style="background-color:#f88978;border:0.1px solid #f88978"><center><p class="btn_text" style="color:#f9f9f9">네</p></center></div>
      <div class="btn" onclick="close_modal();" style="border:0.1px solid #9e9e9e"><center><p class="btn_text" style="color:#676767">아니오</p></center></div>-->
        <img class="btn" onclick="exit_user();" src="img/btn_yes_269x114.png">
        <img class="btn" onclick="close_modal();" src="img/btn_no_269x114.png">
      </center>
    </div>
	</div>
  <div id=header>
    <img id=header_background src="img/gradient.png">
    <img id=header_dalgona src="img/img_logo_90x120.png">
    <p id=header_title>개인정보</p>
  </div>
  <div id=content>
    <div id=line>
      <center>
        <h3 style="position: relative;top:2px;left: 5px;">성별</h3>
        <div id=sex class="sex" style="padding: 5px;position: relative;left: 4px;"><h3 style="font-size:12px;margin:0px;margin-top:4px;position: relative;right: 2px;top: 5px;color: #f9f9f9;">여자</h3></div>
      </center>
    </div>
    <div id=line>
      <center>
        <h3>나이</h3>
        <div id=sex class="sex" style="background-color:white"><input id=age class="uy_input" type="text" disabled></div>
      </center>
    </div>
    <div id=line>
      <center>
        <h3 style="position: relative;left: 4px;">닉네임</h3>
        <div id=sex class="sex" style="background-color:white;position: relative;right: 5px;"><input id=name class="uy_input" type="text"></div>
      </center>
    </div>
  </div>
  <center>
    <!--<button class="w3-btn confirm" type="submit" style="background-color:#f88978" onclick="update_nickname()">적용</button>
    <button class="w3-btn confirm" type="submit" style="margin-left:32.999%" onclick="document.getElementById('exit_modal').style.display='block'">회원탈퇴</button>
    <button class="w3-btn confirm" type="submit" style="margin-left:65.999%;background-color:#bdbdbd;width:34%;" onclick="cancle()">취소</button>-->
    <img src="img/button_deleteacc_696x114.png" style="position: fixed;bottom: 70px;width: 95%;left: 2.5%;" onclick="document.getElementById('exit_modal').style.display='block'">
    <img src="img/button_apply_343x114.png" style="position: fixed;bottom: 7.5px;left: 2.5%;width: 47.5%;height: 56px;" onclick="update_nickname()">
    <img src="img/button_cancel_343x114.png" style="position: fixed;bottom: 7.5px;left: 52.5%;width: 46%;height: 56px;" onclick="cancle()">
  </center>
</body>
<script type="text/javascript" src="js/config.js"></script>
</html>
