var id;
var flag;
function get_update_content(){
  read=document.getElementById('read').value;
  if(read=="")return;
  $.post("get_update_content.php",{
    read:read
	},function(data,status){
    var j=JSON.parse(data);
    document.getElementById('title').value=j.title;
    document.getElementById('select_box_value').innerHTML=j.theme;
    document.getElementById('text').value=j.content;
  });
}
function init(){
  get_update_content();
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
function update_content_old(){
  id=document.getElementById('id').value;
  var title=document.getElementById('title').value;
  var theme=document.getElementById('select_box_value').innerHTML;
  var content=document.getElementById('text').value;
  var writer=document.getElementById('id').value;
  var flag=document.getElementById('flag').value;
  read=document.getElementById('read').value;
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
  $.post("update_old_content.php",{
    read:read,
    title:title,
    theme:theme,
    content:content,
    writer:writer,
    flag:flag
	},function(data,status){
    //alert(data);
    var json='{"title":"alert","alert":"성공적으로 등록되었습니다."}';
    window.parent.postMessage(json,"*");
    var json='{"title":"url","url":"http://total0808.cafe24.com/dalgona/app/talk_list_page.php?id='+id+'&flag='+flag+'"}';
    window.parent.postMessage(json,"*");
    if(id=='운영자'){
      alert("성공적으로 수정되었습니다.");
      window.open("about:blank","_self").close();
    }
	});
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
  if(theme.indexOf('선택') != -1){
    var json='{"title":"alert","alert":"테마를 선택해주세요."}';
    window.parent.postMessage(json,"*");
    return;
  }
  if(content==""){
    var json='{"title":"alert","alert":"내용을 입력해주세요."}';
    window.parent.postMessage(json,"*");
    return;
  }
  if(theme=="기타"){
    theme=theme+flag;
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
    if(id=='운영자'){
      alert("성공적으로 등록되었습니다.");
      window.open("about:blank","_self").close();
    }
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
