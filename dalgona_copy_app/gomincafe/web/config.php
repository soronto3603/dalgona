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
<body style='margin:0px;'>
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
  <center>
    <img src="img/info_top.png" style='width:100%;position:fixed;top:0px;left:0px'>
    <div style='background-color:white;position:fixed;bottom:0px;left:0px;width:100%;height:40%'></div>
  </center>
  <div id=content style='border:1px solid #cccccc;border-left:none;border-right:none;'>
    <div class="uy-third" style='border-top-style: none;'>
      <center>
        <p style='color:#00c9d0;position: relative;top: 13px;font-size: 15px;'>개인정보를 입력해주세요.</p>
      </center>
    </div>
    <div class="uy-third">
      <center style='position: relative;top: 7px;'>
        <p style="position: relative;top: -15px;right:7px;    font-size: 15px;">성별</p>
        <!--<button id='male' onclick="male()" class="w3-btn gender" type="submit">남자</button>
        <button id='female' onclick="female()" class="w3-btn gender" type="submit">여자</button>-->
        <img id=male_ class=gender src="img/button_male_257x79.png">
        <img id=female_ class=gender src="img/button_female_257x79.png">
      </center>
    </div>
    <div class="uy-third">
      <center style='    position: relative;top: 10px;'>
        <p style="position: relative;top: 2px;right:5px ;   font-size: 15px;">나이</p>
        <input id=age class="uy_input" style='width:265px;' type="text" disabled>
      </center>
    </div>
    <div class="uy-third" style="border-bottom:0.5px solid #cccccc;">
      <center style="position: relative;top: 10px;">
        <p style="margin-right:12px;    position: relative;top: 2px;right: 5px;    font-size: 15px;">닉네임</p>
        <input id=name onclick="overlap=0;"  style='width:265px;position:relative;right:11px'class="uy_input" type="text" maxlength="7" placeholder="최대 7글자">

        <!--<div class="w3-btn" style="margin-left:7px;width:40px;background-color:white;border-radius:3px;border:1px solid #FECB9B;color:black;font-size:8px;height:20px;" onclick="overlap_check()"><p style="display:block;margin-top:4px;">중복확인</p></div>
        -->
      </center>
    </div>
    <!--
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
  -->
  </div>
  <center>
    <!--<button class="w3-btn confirm" type="submit" style="background-color:#f88978" onclick="update_nickname()">적용</button>
    <button class="w3-btn confirm" type="submit" style="margin-left:32.999%" onclick="document.getElementById('exit_modal').style.display='block'">회원탈퇴</button>
    <button class="w3-btn confirm" type="submit" style="margin-left:65.999%;background-color:#bdbdbd;width:34%;" onclick="cancle()">취소</button>-->
    <img src="img/button_deleteacc_696x114.png" style="position: fixed;bottom: 7.5px;width: 95%;left: 2.5%;" onclick="document.getElementById('exit_modal').style.display='block'">
    <img src="img/btn_apply_343x114.png" style="position: fixed;bottom: 70px;left: 2.5%;width: 47.5%;height: 56px;" onclick="update_nickname()">
    <img src="img/button_cancel_343x114.png" style="position: fixed;bottom: 70px;left: 52.5%;width: 46%;height: 56px;" onclick="cancle()">
  </center>
</body>
<script type="text/javascript" src="js/config.js"></script>
</html>
