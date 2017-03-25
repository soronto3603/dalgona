var id;
var flag;
function get_content(){
  flag=document.getElementById('flag').value;
  var sort=document.getElementById('sort').value;
  $.post("get_content.php",{
    flag:flag,
    sort:sort
	},function(data,status){
    //alert(data);
    document.getElementById('content_table').innerHTML=data;
	});
}
function get_ad(){
  $.post("get_ad.php",{
	},function(data,status){
    //alert(data);
    document.getElementById('ad_box').innerHTML=data;
	});
}
function get_message(){
  $.post("get_message.php",{
	},function(data,status){
    //alert(data);
    document.getElementById('notice').innerHTML=data;
	});
}
function init(){
  get_content();
  get_ad();
  get_message();
}
window.onload=init();
function make_content(){
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/writing.php?id='+id+'&flag='+flag+'"}';
  window.parent.postMessage(json,"*");
  if(id=='운영자'){
    window.open('http://total0808.cafe24.com/lovecounseling/app/writing.php?id='+id+'&flag='+flag);
  }
}
// 수신 메세지
window.onmessage=function(e){
  if(isclose==0){
    isclose=1;
    document.getElementById('ad2').style.display='none';
    return ;
  }
  id=document.getElementById('id').value;
  var j=JSON.parse(e.data);
  if(j.title=="backkey_down"){
    var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/main.php?id='+id+'"}';
    window.parent.postMessage(json,"*");
  }
}
function read_content(n){
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/read.php?id='+id+'&flag='+flag+'&read='+n+'"}';
  window.parent.postMessage(json,"*");
  if(id=='운영자'){
    window.open('http://total0808.cafe24.com/lovecounseling/app/read.php?id='+id+'&flag='+flag+'&read='+n);
  }
  //var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/read.php?id='+id+'&flag=0&read='+n+'"}';
  //window.parent.postMessage(json,"*");
}
function show_config(){
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/config.php?id='+id+'?&flag='+flag+'"}';
  window.parent.postMessage(json,"*");
}
function change_sort(){
  var sort=document.getElementById('sort').value;
  id=document.getElementById('id').value;
  flag=document.getElementById('flag').value;
  if(sort==""){
    var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/talk_list_page.php?id='+id+'?&flag='+flag+'&sort=1"}';
    window.parent.postMessage(json,"*");
    if(id=='운영자'){
      window.open('http://total0808.cafe24.com/lovecounseling/app/talk_list_page.php?id='+id+'?&flag='+flag+'&sort=1');
    }
  }else{
    var json='{"title":"url","url":"http://total0808.cafe24.com/lovecounseling/app/talk_list_page.php?id='+id+'?&flag='+flag+'"}';
    window.parent.postMessage(json,"*");
    if(id=='운영자'){
      window.open('http://total0808.cafe24.com/lovecounseling/app/talk_list_page.php?id='+id+'?&flag='+flag);
    }
  }
}
function move_page(u){
  var json='{"title":"ad","ad":"'+u+'"}';
  window.parent.postMessage(json,"*");
}
