function get_banned_word(){
  $.post("get_banned_word.php",{
	},function(data,status){
    //alert(data);
    document.getElementById('banned_word').innerHTML=data;
	});
}
function init(){
  get_banned_word();
}
window.onload=init();
function delete_word(n){
  $.post("delete_word.php",{
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
function insert_word(){
  var n=document.getElementById('word').value;
  $.post("insert_word.php",{
    word:n
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
