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
  <div id=exit_modal class=modal onclick="close_modal();">
		<div class="modal-content" style="padding:10px;height:100px;font-size:12px;">
      <center>
			<p style="text-align:center;font-size:15px;">앱을 종료하시겠습니까?</p>
      <div class="btn" onclick="exit_app();" style="background-color:#f88978;border:0.1px solid #f88978"><center><p class="btn_text">네</p></center></div>
      <div class="btn" onclick="close_modal();" style="border:0.1px solid #9e9e9e"><center><p class="btn_text">아니오</p></center></div>
      </center>
    </div>
	</div>
  <div style="width:100%;height:40px;background-color:white;border:0.01px solid #e9e9e9;border-right:none;border-left:none;border-top:none;">
    <p style="color:#676767;text-align:center;margin:0px;position:relative;top:-4px;display:block;font-size:12px;">달콤한 우리들의 고민 나누기</p>
    <img src="img/gear.png" width="25px" height="25px" id=side_menu onclick="show_config()">
  </div>
  <div id=menu>
    <center style="margin-top:5px;">
      <div class="box" style="background-color:#8c8c8c;" onclick="move_page(1)">
        <div style="position:fixed;left:5px;margin-top:45px"><h3 style="position:relative;text-align:left;color:#f9f9f9;font-weight:normal;">고민나누기</h3><h5>우리들의 달콤한 고민 나누기</h5></div>
        <div><img src="img/menu1_icon.png" width="100px" height="100px" style="margin-left:240;"></div>
      </div>
      <div class="box" style="background-color:#8acde8;" onclick="move_page(2)">
        <div style="position:fixed;left:5px;margin-top:45px"><h3 style="position:relative;text-align:left;color:#f9f9f9;font-weight:normal;">자유토크</h3><h5>자유로운 토크</h5></div>
        <div><img src="img/menu2_icon.png" width="100px" height="100px" style="margin-left:240;"></div>
      </div>
      <div class="box" style="background-color:#93dabc;" onclick="move_page(3)">
        <div style="position:fixed;left:5px;margin-top:45px"><h3 style="position:relative;text-align:left;color:#f9f9f9;font-weight:normal;">낯선사람과의 대화</h3><h5>우리들의 달콤한 고민 나누기</h5></div>
        <div><img src="img/menu3_icon.png" width="100px" height="100px" style="margin-left:240;"></div>
      </div>
      <div class="box" style="background-color:#f5ad97;" onclick="move_page(4)">
        <div style="position:fixed;left:5px;margin-top:45px"><h3 style="position:relative;text-align:left;color:#f9f9f9;font-weight:normal;">인기핫추천</h3><h5>우리들의 달콤한 고민 나누기</h5></div>
        <div><img src="img/menu4_icon.png" width="100px" height="100px" style="margin-left:240;"></div>
      </div>
      <div class="box" style="background-color:#f9f9f9;"></div>
      <div class="box" style="background-color:#dd8e18"></div>
    </center>
    <!--
    <div class="line" style="background-color:rgba(236, 192, 162, 0.5)" onclick="move_page(1)">
      <div style="padding-top:20px;width:150px;margin-left:10px;">고민나누기</div>
      <div style="padding-top:20px;width:100px;margin-left:10px;">2</div>
    </div>
    <div class="line" onclick="move_page(2)">
      <div style="padding-top:20px;width:150px;margin-left:10px;" >자유토크</div>
      <div style="padding-top:20px;width:100px;margin-left:10px;">4</div>
    </div>
    <div class="line" style="background-color:rgba(236, 192, 162, 0.5)" onclick="move_page(3)">
      <div style="padding-top:20px;width:150px;margin-left:10px;">낯선사람과의대화</div>
      <div style="padding-top:20px;width:100px;margin-left:10px;">6</div>
    </div>
    <div class="line" onclick="move_page(4)">
      <div style="padding-top:20px;width:150px;margin-left:10px;">인기핫추천</div>
      <div style="padding-top:20px;width:100px;margin-left:10px;">8</div>
    </div>
    <div class="line" style="background-color:rgba(236, 192, 162, 0.5)" onclick="move_page(5)">
    </div>
    <div class="line">
    </div>
    <div class="line" style="background-color:rgba(236, 192, 162, 0.5)">
    </div>

    <!--<center>
      <div class="w3-btn button" onclick="move_page(1)">
        <div id=menu1 class="menu">
          123
        </div>
        <p>고민나누기</p>
      </div>
      <div class="w3-btn button" onclick="move_page(3)">
        <div id=menu2 class="menu">
          123
        </div>
        <p>자유토크</p>
      </div>
      <div class="w3-btn button" onclick="move_page(2)">
        <div id=menu3 class="menu">
          123
        </div>
        <p>낯선사람과의대화</p>
      </div>
      <div class="w3-btn button" onclick="move_page(4)">
        <div id=menu4 class="menu">
          123
        </div>
        <p>인기핫추천</p>
      </div>
    </center>-->
  </div>
</body>
</html>
