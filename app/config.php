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
  <div id=exit_modal class=modal onclick="close_modal();">
		<div class="modal-content" style="padding:10px;height:100px;font-size:12px;">
      <center style="margin-top:20px;">
			<p style="text-align:center;font-size:15px;bottom:0px;color:black">회원탈퇴를 하시겠습니까?</p>
      <div class="btn" onclick="exit_user();" style="background-color:#f88978;border:0.1px solid #f88978"><center><p class="btn_text">회원탈퇴</p></center></div>
      <div class="btn" onclick="close_modal();" style="border:0.1px solid #9e9e9e"><center><p class="btn_text">아니오</p></center></div>
      </center>
    </div>
	</div>
  <div id=header>
    <p id=header_title>우리들의 달콤한 고민 나누기</p>
  </div>
  <div id=content>
    <div id=line>
      <center>
        <img src="img/lock.png">
        <p style="margin-right: 20px;">개인정보</p>
      </center>
    </div>
    <div id=line>
      <center>
        <h3 style="position: relative;top:2px;left: 5px;">성별</h3>
        <div id=sex class="sex" style="padding: 5px;position: relative;left: 4px;"><h3 style="font-size:12px;margin:0px;margin-top:4px;position: relative;right: 2px;top: 3px;color: #f9f9f9;">여자</h3></div>
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
    <div id=line>
      <center>
        <div id=exit style="margin-left:17px" onclick="document.getElementById('exit_modal').style.display='block'">
          <h3 style="color: #f9f9f9;font-size: 12px;position: relative;top: 10px;left: 12px;">회원탈퇴</h3>
        </div>
      </center>
    </div>
  </div>
  <center>
    <button class="w3-btn confirm" type="submit" style="background-color:#f88978" onclick="update_nickname()">완료</button>
    <button class="w3-btn confirm" type="submit" style="margin-left:50%" onclick="cancle()">취소</button>
  </center>
</body>
<script type="text/javascript" src="js/config.js"></script>
</html>
