function get_content_list(){
  $.post("get_content_list.php",{
	},function(data,status){
    //alert(data);
    document.getElementById('content_box').innerHTML=data;
	});
}
function init(){
  get_content_list();
}
window.onload=init();
function update_content(n){
  var title=document.getElementById("title"+n).value;
  var theme=document.getElementById("theme"+n).value;
  var date=document.getElementById("date"+n).value;
  var writer=document.getElementById("writer"+n).value;
  var count=document.getElementById("count"+n).value;
  var content=document.getElementById("content"+n).value;
  $.post("update_content.php",{
    no:n,
    title:title,
    theme:theme,
    date:date,
    writer:writer,
    count:count,
    content:content
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
function delete_content(n){
  $.post("delete_content.php",{
    no:n,
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
function open_content(n,j){
  var url="http://total0808.cafe24.com/dalgona/app/read.php?read="+n+"&flag="+j;
  window.open(url);
}
function insert_content(){
  var title=document.getElementById("title").value;
  var theme=document.getElementById("theme").value;
  var date=document.getElementById("date").value;
  var writer=document.getElementById("writer").value;
  var count=document.getElementById("count").value;
  var content=document.getElementById("content").value;
  var flag=document.getElementById("flag").value;
  var sex=document.getElementById("sex").value;
  $.post("insert_content.php",{
    title:title,
    theme:theme,
    date:date,
    writer:writer,
    count:count,
    content:content,
    flag:flag,
    sex:sex,
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
