var sex=1;
var phone_number;

function male(){
  document.getElementById('male_').src="img/button_male_257x79.png";
  document.getElementById('female_').src="img/button_female_257x79_press.png";
  sex=0;
}
function female(){
  document.getElementById('male_').src="img/button_male_257x79_press.png";
  document.getElementById('female_').src="img/button_female_257x79.png";
  sex=1;
}
var conf=0;
function check(){
  if(conf==0){
    document.getElementById('checkbox').src="img/before_checkbox.png";
    conf=1;
  }else{
    document.getElementById('checkbox').src="img/checkbox.png";
    conf=0;
  }
}
var overlap=0;
function overlap_check(){
  var nickname=document.getElementById('nickname').value;
  $.post("nickname_overlap_check.php",{
    nickname:nickname
	},function(data,status){
    var json='{"title":"alert","alert":"'+data+'"}';
    window.parent.postMessage(json,"*");
    if(data=="닉네임이 이미 존재 합니다." || data=="사용 불가능한 닉네임 입니다."){
      overlap=0;
    }else{
      overlap=1;
    }
	});
}
function submit(){
  if(conf==0){
    //alert('약관을 확인해 주세요.');
    var json='{"title":"alert","alert":"약관을 확인해 주세요."}';
    window.parent.postMessage(json,"*");
    return;
  }
  if($.isNumeric(document.getElementById('age').value)!=true){
    if(document.getElementById('age').value==""){
      //alert('나이를 입력해주세요.');
      var json='{"title":"alert","alert":"나이를 입력해주세요."}';
      window.parent.postMessage(json,"*");
    }else{
      //alert('나이가 올바르지 않습니다.');
      var json='{"title":"alert","alert":"나이가 올바르지 않습니다."}';
      window.parent.postMessage(json,"*");
    }
    return;
  }
  var age=document.getElementById('age').value;
  //닉네임 중복확인
  if(overlap==0){
    //alert("닉네임 중복확인을 해주세요.");
    var json='{"title":"alert","alert":"닉네임 중복확인을 해주세요."}';
    window.parent.postMessage(json,"*");
    return;
  }
  var nickname=document.getElementById('nickname').value;
  //성별
  if(sex==0){
    var sex_value="남자";
  }else{
    var sex_value="여자";
  }
  //alert(age+nickname+sex_value+phone_number);
  $.post("create_new_user.php",{
    age:age,
    nickname:nickname,
    sex_value:sex_value,
    phone_number:phone_number
	},function(data,status){
    //alert(data);
    var json='{"title":"user","user":"'+phone_number+'"}';
    window.parent.postMessage(json,"*");
    var json='{"title":"url","url":"http://total0808.cafe24.com/talkcafe/app/main.php?id='+phone_number+'"}';
    window.parent.postMessage(json,"*");
	});
}
function init(){
  document.getElementById('male_').src="img/button_male_257x79_press.png";
  document.getElementById('female_').src="img/button_female_257x79.png";
  phone_number=document.getElementById('phone_number').value;
}
window.onload=init();

// 수신 메세지
window.onmessage=function(e){
  var j=JSON.parse(e.data);
  if(j.title=="backkey_down"){
    window.parent.postMessage("exit_app","*");
  }
}
