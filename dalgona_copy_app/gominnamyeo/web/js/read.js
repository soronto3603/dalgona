var id;
var flag;
var read;
function get_content(){
  id=document.getElementById('id').value;
  read=document.getElementById('read').value;
  $.post("get_content_one.php",{
    id:id,
    read:read
	},function(data,status){
    document.getElementById('content_box').innerHTML=data;
	});
}
function get_comment(){
  read=document.getElementById('read').value;
  flag=document.getElementById('flag').value;
  id=document.getElementById('id').value;
  $.post("get_comment.php",{
    read:read,
    flag:flag,
    id:id
	},function(data,status){
    //alert(data);
    document.getElementById('comment_table').innerHTML=data;
	});
}
function update_count(){
  read=document.getElementById('read').value;
  $.post("update_count.php",{
    read:read
	},function(data,status){
	});
}
function init(){
  get_content();
  get_comment();
  update_count();
}
window.onload=init();
// 수신 메세지
window.onmessage=function(e){
  var j=JSON.parse(e.data);
  if(j.title=="backkey_down"){
    cancle();
  }
}
function cancle(){
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  var json='{"title":"url","url":"http://total0808.cafe24.com/gominnamyeo/app/talk_list_page.php?id='+id+'&flag='+flag+'"}';
  window.parent.postMessage(json,"*");
  if(id=='운영자'){
    window.open("about:blank","_self").close();
  }
}
function delete_content(n){
  $.post("delete_content.php",{
    no:n
	},function(data,status){
    var json='{"title":"alert","alert":"성공적으로 삭제 되었습니다."}';
    window.parent.postMessage(json,"*");
    var json='{"title":"url","url":"http://total0808.cafe24.com/gominnamyeo/app/talk_list_page.php?id='+id+'&flag='+flag+'"}';
    window.parent.postMessage(json,"*");
    if(id=='운영자'){
      location.reload();
    }
	});
}
function update_content(n){
  var json='{"title":"url","url":"http://total0808.cafe24.com/gominnamyeo/app/writing.php?id='+id+'&flag='+flag+'&read='+n+'"}';
  window.parent.postMessage(json,"*");
  if(id=='운영자'){
    window.open('http://total0808.cafe24.com/gominnamyeo/app/writing.php?id='+id+'&flag='+flag+'&read='+n);
  }
}
function delete_comment(n){
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  read=document.getElementById('read').value;
  $.post("delete_comment.php",{
    no:n
	},function(data,status){
    var json='{"title":"url","url":"http://total0808.cafe24.com/gominnamyeo/app/read.php?id='+id+'&flag='+flag+'&read='+read+'"}';
    window.parent.postMessage(json,"*");
    if(id=='운영자'){
      location.reload();
    }
	});
}
function update_comment(){
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  read=document.getElementById('read').value;
  var comment=document.getElementById('comment_input').value;
  if(comment==""){
    var json='{"title":"alert","alert":"내용을 입력해주세요."}';
    window.parent.postMessage(json,"*");
    return;
  }
  $.post("update_comment.php",{
    read:read,
    comment:comment,
    writer:id,
    flag:flag
	},function(data,status){
    //alert(data);
    var json='{"title":"url","url":"http://total0808.cafe24.com/gominnamyeo/app/read.php?id='+id+'&flag='+flag+'&read='+read+'"}';
    window.parent.postMessage(json,"*");
    if(id=='운영자'){
      location.reload();
    }
	});
}
