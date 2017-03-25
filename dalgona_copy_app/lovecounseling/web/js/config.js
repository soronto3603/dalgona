var id;
var flag;
var old_name;
function get_user_info(){
  id=document.getElementById('id').value;
  $.post("get_user_info.php",{
    id:id
	},function(data,status){
    var j=JSON.parse(data);
    document.getElementById('age').value=j.age;
    if(j.sex=="여자"){
      document.getElementById('male_').src='img/button_male_257x79_press.png';
    }else{
      document.getElementById('female_').src='img/button_female_257x79_press.png';
    }
    old_name=j.nickname;
    document.getElementById('name').value=j.nickname;
	});
}
window.onload=init();
function init(){
  get_user_info();
}
// 수신 메세지
window.onmessage=function(e){
  var j=JSON.parse(e.data);
  //alert(j.title);
  if(j.title=="backkey_down"){
    if(document.getElementById('exit_modal').style.display=="block"){
      document.getElementById('exit_modal').style.display="none";
    }else{
      cancle();
    }
  }
}
function cancle(){
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  if(flag==2){
    var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/main.php?id='+id+'"}';
    window.parent.postMessage(json,"*");
  }else{
    var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/talk_list_page.php?id='+id+'&flag='+flag+'"}';
    window.parent.postMessage(json,"*");
  }
}
function update_nickname(){
  var name=document.getElementById('name').value;
  id=document.getElementById('id').value;
  if(name==old_name){
    var json='{"title":"alert","alert":"변경사항이 없습니다."}';
    window.parent.postMessage(json,"*");
    cancle();
  }else{
    $.post("update_nickname.php",{
      nickname:name,
      id:id
  	},function(data,status){
      var json='{"title":"alert","alert":"'+data+'"}';
      window.parent.postMessage(json,"*");
      if(data=="성공적으로 적용 하였습니다."){
        cancle();
      }
  	});
  }
}
function exit_user(){
  $.post("exit_user.php",{
    id:id
	},function(data,status){
    window.parent.postMessage("dropTable","*");
    window.parent.postMessage("exit_app","*");
	});
}
function close_modal(){
  document.getElementById('exit_modal').style.display="none";
}
