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
  <div id=select_theme class=modal style="display:none" onclick="document.getElementById('select_theme').style.display='none';">
		<div class="modal-content" style="margin-top:-130px;padding:10px;height:470px;font-size:12px;">
      <iframe src="select_content.php?flag=<?=$_GET['flag']?>" style="width:100%;height:100%;border:none"></iframe>
		</div>
	</div>
  <input type=hidden id=flag value="<?=$_GET['flag']?>">
  <input type=hidden id=id value="<?=$_GET['id']?>">
  <div id=exit_modal class=modal onclick="document.getElementById('exit_modal').style.display='none';">
		<div class="modal-content" style="padding:10px;height:100px;font-size:12px;">
      <center style="margin-top:20px;">
			<p style="text-align:center;font-size:15px;bottom:0px;color:black">이전화면으로 가시겠습니까?</p>
      <div class="btn" onclick="cancle();" style="background-color:#f88978;border:0.1px solid #f88978"><center><p class="btn_text">네</p></center></div>
      <div class="btn" onclick="document.getElementById('exit_modal').style.display='none';" style="border:0.1px solid #9e9e9e"><center><p class="btn_text">아니오</p></center></div>
      </center>
    </div>
	</div>
  <div id=header>
    <p id=header_title>글쓰기</p>
  </div>
  <div id=notice>
    <h3>제목</h3>
    <input id=title onclick="overlap=0;" class="uy_input" type="text" maxlength="30" placeholder="제목을 입력해주세요." style="width:280px;">
    <br><h3 style="margin-right:38px">테마</h3>
    <div id=select_box  onclick="document.getElementById('select_theme').style.display='block'"><p id=select_box_value style="display:inline;padding:0px;margin:0px;color:#f9f9f9">선택</p><img id=under_arrow src="img/under_arrow.png"></div>
  </div>
  <textarea id=text placeholder="무슨 생각을 하고 계신가요?"></textarea>
  <center>
    <button class="w3-btn confirm" type="submit" style="background-color:#f88978" onclick="update_content()">완료</button>
    <button class="w3-btn confirm" type="submit" style="margin-left:50%" onclick="document.getElementById('exit_modal').style.display='block'">취소</button>
  </center>
<script type="text/javascript" src="js/writing.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</html>
