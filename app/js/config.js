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
      document.getElementById('sex').innerHTML="<h3 style='font-size:12px;margin:0px;margin-top:4px;position: relative;right: 2px;top: 3px;color: #f9f9f9;'>여자</h3>";
    }else{
      document.getElementById('sex').style="padding: 5px;position: relative;left: 4px;background-color:#99bbf4;";
      document.getElementById('sex').innerHTML="<h3 style='font-size:12px;margin:0px;margin-top:4px;position: relative;right: 2px;top: 3px;color: #f9f9f9;'>남자</h3>";
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
    var json='{"title":"url","url":"http://total0808.cafe24.com/dalgona/app/main.php?id='+id+'"}';
    window.parent.postMessage(json,"*");
  }else{
    var json='{"title":"url","url":"http://total0808.cafe24.com/dalgona/app/talk_list_page.php?id='+id+'&flag='+flag+'"}';
    window.parent.postMessage(json,"*");
  }
}
function update_nickname(){
  var name=document.getElementById('name').value;
  id=document.getElementById('id').value;
  if(name==old_name){
    var json='{"title":"alert","alert":"성공적으로 저장하였습니다."}';
    window.parent.postMessage(json,"*");
    cancle();
  }else{
    $.post("update_nickname.php",{
      nickname:name,
      id:id
  	},function(data,status){
      var json='{"title":"alert","alert":"'+data+'"}';
      window.parent.postMessage(json,"*");
      cancle();
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
