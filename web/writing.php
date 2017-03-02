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
<link rel="stylesheet" type="text/css" href="css/writing.css">
<body>
  <div id=select_theme class=modal style="display:none<?if($_GET['id']=='운영자'){echo ';padding-top:20%';}?>" onclick="document.getElementById('select_theme').style.display='none';">
		<div class="modal-content" style="width:280px;margin-top:-130px;padding-bottom:10px;border-radius: 10px;height:470px;font-size:12px;">
      <iframe src="select_content.php?flag=<?=$_GET['flag']?>" style="width:100%;height:100%;border:none"></iframe>
		</div>
	</div>
  <input type=hidden id=flag value="<?=$_GET['flag']?>">
  <input type=hidden id=id value="<?=$_GET['id']?>">
  <input type=hidden id=read value="<?=$_GET['read']?>">
  <div id=exit_modal class=modal onclick="close_modal();" style="display:none">
		<div class="modal-content" style="padding:10px;height:160px;font-size:12px;">
      <center>
			  <p style="text-align:center;font-size:15px;color:#676767;margin-top:20px;">이전화면으로 돌아가시겠습니까?</p>
      <!--<div class="btn" onclick="exit_app();" style="background-color:#f88978;border:0.1px solid #f88978"><center><p class="btn_text" style="color:#f9f9f9">네</p></center></div>
      <div class="btn" onclick="close_modal();" style="border:0.1px solid #9e9e9e"><center><p class="btn_text" style="color:#676767">아니오</p></center></div>-->
        <img class="btn" onclick="cancle();" src="img/btn_yes_269x114.png">
        <img class="btn" onclick="document.getElementById('exit_modal').style.display='none';" src="img/btn_no_269x114.png">
      </center>
    </div>
	</div>
  <div id=header>
    <img id=header_background src="img/gradient.png">
    <img id=header_dalgona src="img/img_logo_90x120.png">
    <p id=header_title>글쓰기</p>
  </div>
  <div id=notice>
    <!--
    <h3>제목</h3>
    <input id=title onclick="overlap=0;" class="uy_input" type="text" maxlength="30" placeholder="제목을 입력해주세요." style="width:280px;">
    <br><h3 style="margin-right:30px;position: relative;bottom: 13px;left: 12px;">테마</h3>
    <!--<div id=select_box  onclick="document.getElementById('select_theme').style.display='block'">
      <img src="img/gradient.png" width="100%" height="100%">
      <p id=select_box_value style="display:inline;padding:0px;margin:0px;color:#f9f9f9">
        선택</p>
        <img id=under_arrow src="img/under_arrow.png">
    </div>-->
    <table>
      <tr>
        <th>제목</th>
        <th style="width:80%;">
          <input id=title onclick="overlap=0;" class="uy_input" type="text" maxlength="30" placeholder="제목을 입력해주세요." style="width:280px;">
        </th>
      </tr>
      <tr>
        <th><div style="position: relative;bottom: 15px;">테마</div></th>
        <th onclick="document.getElementById('select_theme').style.display='block'">
          <img id=select_box src="img/gradient.png" width="100%" height="25px">
          <img id=under_arrow src="img/under_arrow.png">
          <p id=select_box_value>선택</p>
        </th>
      </tr>
    </table>
    <!--
    <div style="display:inline-block" onclick="document.getElementById('select_theme').style.display='block'">
      <img id=select_box src="img/gradient.png" width="100%" height="25px">
      <p id=select_box_value style="width:80px;display:inline-block;padding:0px;margin:0px;color:#f9f9f9 ;position: relative;left: -130px;top: -13px;">
        　　선택</p>
      <img id=under_arrow src="img/under_arrow.png">
    </div>-->
  </div>
  <textarea id=text placeholder="무슨 생각을 하고 계신가요?"></textarea>
  <center>
    <!--<button class="w3-btn confirm" type="submit" style="background-color:#f88978" onclick="update_content()">완료</button>
    <button class="w3-btn confirm" type="submit" style="margin-left:50%" onclick="document.getElementById('exit_modal').style.display='block'">취소</button>
    -->
    <img id=btn src="img/btn_complete_344x114.png" onclick="<?if($_GET['read']==""){echo "update_content();";}else{echo "update_content_old();";}?>">
    <img id=btn src="img/button_cancel_343x114.png" onclick="document.getElementById('exit_modal').style.display='block'" style="left:50%;">
  </center>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/writing.js"></script>

</html>
