var id;
function init(){

}
window.onload=init();

// 수신 메세지
window.onmessage=function(e){
  var j=JSON.parse(e.data);
  //alert(j.title);
  if(j.title=="backkey_down"){
    if(document.getElementById('exit_modal').style.display=="block"){
      document.getElementById('exit_modal').style.display="none";
    }else{
      document.getElementById('exit_modal').style.display="block";
    }
  }
}
function move_page(d){
  id=document.getElementById('id').value;
  id=id.replace("?", "");
  if(d==1){
    var json='{"title":"url","url":"http://total0808.cafe24.com/21/app/talk_list_page.php?id='+id+'?&flag=0"}';
    window.parent.postMessage(json,"*");
  }else if(d==2){
    var json='{"title":"url","url":"http://total0808.cafe24.com/21/app/talk_list_page.php?id='+id+'?&flag=1"}';
    window.parent.postMessage(json,"*");
  }else if(d==3){
    var json='{"title":"url","url":"http://total0808.cafe24.com/random_chat/app/wait.php?phone_number='+id+'"}';
    window.parent.postMessage(json,"*");
  }else if(d==4){
    var json='{"title":"url","url":"http://total0808.cafe24.com/21/app/popular_hot.php?id='+id+'"}';
    window.parent.postMessage(json,"*");
  }else if(d==5){
    window.parent.postMessage("sign_up","*");
  }else if(d==6){
    window.parent.postMessage("4gldksjfglsdk","*");
  }
}
function show_config(){
  id=document.getElementById('id').value;
  var json='{"title":"url","url":"http://total0808.cafe24.com/21/app/config.php?id='+id+'?&flag=2"}';
  window.parent.postMessage(json,"*");
}
function exit_app(){
  window.parent.postMessage("exit_app","*");
}
function close_modal(){
  document.getElementById('exit_modal').style.display="none";
}
