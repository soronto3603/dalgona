var id;
var flag;
function init(){

}
window.onload=init();
// 수신 메세지
window.onmessage=function(e){
  var j=JSON.parse(e.data);
  if(j.title=="data"){
    document.getElementById('select_box_value').innerHTML=j.data;
    document.getElementById('select_theme').style.display="none";
  }
  else if(j.title=="backkey_down"){
    document.getElementById('exit_modal').style.display="block";
  }
}
function update_content(){
  id=document.getElementById('id').value;
  var title=document.getElementById('title').value;
  var theme=document.getElementById('select_box_value').innerHTML;
  var content=document.getElementById('text').value;
  var writer=document.getElementById('id').value;
  var flag=document.getElementById('flag').value;
  if(title==""){
    var json='{"title":"alert","alert":"제목을 입력해주세요."}';
    window.parent.postMessage(json,"*");
    return;
  }
  if(theme=="선택"){
    var json='{"title":"alert","alert":"테마를 선택해주세요."}';
    window.parent.postMessage(json,"*");
    return;
  }
  if(content==""){
    var json='{"title":"alert","alert":"내용을 입력해주세요."}';
    window.parent.postMessage(json,"*");
    return;
  }
  $.post("update_content.php",{
    title:title,
    theme:theme,
    content:content,
    writer:writer,
    flag:flag
	},function(data,status){
    var json='{"title":"alert","alert":"성공적으로 등록되었습니다."}';
    window.parent.postMessage(json,"*");
    var json='{"title":"url","url":"http://total0808.cafe24.com/dalgona/app/talk_list_page.php?id='+id+'&flag='+flag+'"}';
    window.parent.postMessage(json,"*");
	});
}
function read_content(n){
  var json='{"title":"url","url":"http://total0808.cafe24.com/dalgona/app/read.php?id='+id+'&flag='+flag+'&read='+n+'"}';
  window.parent.postMessage(json,"*");
}
function cancle(){
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  var json='{"title":"url","url":"http://total0808.cafe24.com/dalgona/app/talk_list_page.php?id='+id+'&flag='+flag+'"}';
  window.parent.postMessage(json,"*");
}
function close_modal(){
  document.getElementById('exit_modal').style.display="none";
}
