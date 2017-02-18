<!DOCTYPE html>
<html>
<title>dalgona sign_up</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/sign_up.css">
<!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
<body>

<!-- Page content -->

<div class="uy-container" style="height:100px" id="rooms">
  <h1 style="text-align:center;margin:0px;position:relative;top:10px;">정보 수정</h1>

</div>
<div class="uy-content" style="max-width:1532px;">
  <input type=hidden id=phone_number value="<?=$_GET['phone_number']?>">
  <div class="uy-row-padding">
    <div class="uy-third">
      <div class="left_value">
        <p>성별</p>
      </div>
      <div class="right_value">
        <div class="radio">
          <center>
            <button id='male' onclick="male()" class="w3-btn gender" type="submit">남자</button>
          </center>
        </div>
        <div class="radio">
          <center>
            <button id='female' onclick="female()" class="w3-btn gender" type="submit">여자</button>
          </center>
        </div>
      </div>
    </div>
    <div class="uy-third">
      <div class="left_value">
        <p>나이</p>
      </div>
      <div class="right_value">
        <input id=age class="uy_input" type="text" maxlength="2" placeholder="나이를 입력해 주세요.">
      </div>
    </div>
    <div class="uy-third">
      <div class="left_value">
        <p>닉네임</p>
      </div>
      <div class="right_value">
        <div class="radio">
          <center>
            <input id=nickname onclick="overlap=0;" class="uy_input" type="text" maxlength="7" placeholder="최대 7글자">
          </center>
        </div>
        <div class="radio">
          <center>
            <div class="button" onclick="overlap_check()"><p style="margin-left:0px;margin-top:10px">중복확인</p></div>
          </center>
        </div>


      </div>
    </div>

  </div>
  <center>
    <button class="w3-btn confirm" type="submit" onclick="submit()">회원가입</button>
  </center>
<script type="text/javascript" src="js/sign_up.js"></script>
<!-- End page content -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>
