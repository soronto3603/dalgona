function get_comment_list(){
  $.post("get_comment_list.php",{
	},function(data,status){
    //alert(data);
    document.getElementById('comment_box').innerHTML=data;
	});
}
function init(){
  get_comment_list();
}
window.onload=init();
function update_comment(n){
  var writer=document.getElementById("writer"+n).value;
  var sex=document.getElementById("sex"+n).value;
  var comment=document.getElementById("comment"+n).value;
  var flag=document.getElementById("flag"+n).value;
  var time=document.getElementById("time"+n).value;
  $.post("update_comment.php",{
    no:n,
    writer:writer,
    sex:sex,
    comment:comment,
    flag:flag,
    time:time
	},function(data,status){
    alert(data);
    location.reload();
	});
}
function delete_comment(n){
  $.post("delete_comment.php",{
    no:n,
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
function open_comment(n,j){
  var url="http://total0808.cafe24.com/dalgona/app/read.php?read="+n+"&flag="+j;
  window.open(url);
}
function insert_comment(){
  var n=document.getElementById('no').value;
  var writer=document.getElementById("writer").value;
  var sex=document.getElementById("sex").value;
  var comment=document.getElementById("comment").value;
  var flag=document.getElementById("flag").value;
  var time=document.getElementById("time").value;
  $.post("insert_comment.php",{
    no:n,
    writer:writer,
    sex:sex,
    comment:comment,
    flag:flag,
    time:time
	},function(data,status){
    alert(data);
    location.reload();
	});
}
