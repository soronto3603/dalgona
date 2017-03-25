var id;
function get_app_list(){
  $.post("get_app_list.php",{
	},function(data,status){
    //alert(data);
    document.getElementById('content').innerHTML=data;
	});
}
function init(){
  get_app_list();
}
window.onload=init();
window.onmessage=function(e){
  var j=JSON.parse(e.data);
  //alert(j.title);
  if(j.title=="backkey_down"){
    cancle();
  }
}
function cancle(){
  id=document.getElementById('id').value;
  var json='{"title":"url","url":"http://total0808.cafe24.com/ikdamso/app/main.php?id='+id+'"}';
  window.parent.postMessage(json,"*");
}
function move_page(n){
  var json='{"title":"ad","ad":"'+n+'"}';
  window.parent.postMessage(json,"*");
}
