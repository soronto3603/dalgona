<?php
  if($_GET['id']==""){
    echo "<script>window.parent.postMessage('{\"title\":\"alert\",\"alert\":\"성공적으로 저장하였습니다.\"}',\"*\");
    window.parent.postMessage(\"exit_app\",\"*\");</script>";
  }
?>
<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
  <input type=hidden id=login_status value="<?=$_GET['login_status']?>">
  <input type=hidden id=id value="<?=$_GET['id']?>">
  <div id=exit_modal class=modal onclick="close_modal();" style="display:none">
		<div class="modal-content" style="padding:10px;height:160px;font-size:12px;">
      <center>
			  <p style="text-align:center;font-size:15px;color:#676767;margin-top:20px;">앱을 종료하시겠습니까?</p>
      <!--<div class="btn" onclick="exit_app();" style="background-color:#f88978;border:0.1px solid #f88978"><center><p class="btn_text" style="color:#f9f9f9">네</p></center></div>
      <div class="btn" onclick="close_modal();" style="border:0.1px solid #9e9e9e"><center><p class="btn_text" style="color:#676767">아니오</p></center></div>-->
        <img class="btn" onclick="exit_app();" src="img/btn_yes_269x114.png">
        <img class="btn" onclick="close_modal();" src="img/btn_no_269x114.png">
      </center>
    </div>
	</div>
  <div id=header>
    <img id=header_background src="img/gradient.png">
    <img id=header_dalgona src="img/img_logo_90x120.png">
    <p id=header_title>달고나</p>
    <img src="img/gear.png" width="20px" height="20px" id=side_menu onclick="show_config()">
  </div>
  <div id=menu>
    <center>
      <div class="line" style="height:80px">
        <img style="width:240px;" src="img/img_balckbar_446x65.png">
        <h3 id=s_text>달고나에서 나만의 고민을 나누고 낯선사람과 대화 하세요!</h3>
      </div>
      <div class="line" onclick="move_page(1)">
        <img id=menu_image src="img/img_secret_688x214.png">
        <h1 id=line_text>
          <img width="16px" src="img/icon_secret_37x32.png">
          고민 나누기
        </h1>
      </div>
      <div class="line" onclick="move_page(2)">
        <img id=menu_image src="img/img_freetalk_688x214.png">
        <h1 id=line_text>
          <img width="16px" src="img/icon_freetalk_52x36.png">
          자유토크
        </h1>
      </div>
      <div class="line" onclick="move_page(3)">
        <img id=menu_image src="img/img_strangertalk_688x214.png">
        <h1 id=line_text>
          <img width="16px" src="img/icon_strangertalk_35x35.png">
            낯선사람과의 대화
        </h1>
      </div>
      <div class="line" onclick="move_page(4)">
        <img id=menu_image src="img/img_popularayhot_688x214.png">
        <h1 id=line_text>
          <img width="16px" src="img/icon_popular_38x36.png">
          인기핫 추천
        </h1>
      </div>
    </center>
  </div>
</body>
</html>
