function get_ad2(){
  $.post("get_ad2.php",{
	},function(data,status){
    document.getElementById('content').innerHTML=data;
	});
}
function init(){
  get_ad2();
}
function delete_ad2(n){
  $.post("delete_ad2.php",{
    no:n
	},function(data,status){
    alert(data);
    location.replace('http://total0808.cafe24.com/dalgona/admin/ad2.php');
	});
}

function insert(){
  $.post("update_ad2.php",{
	},function(data,status){
    alert(data);
    location.replace('http://total0808.cafe24.com/dalgona/admin/ad2.php');
	});
}
function update(idx){
	var url="";
  url=document.getElementById('url'+idx).value;
  odd=document.getElementById('odd'+idx).value;
	$.post("update_ad2_old.php",{
		no:idx,
		url:url,
    odd:odd
	},function(data,status){
		alert(data);
		location.replace('http://total0808.cafe24.com/dalgona/admin/ad2.php');
	});
}
function imgclick(img){
	location.href=img.src;
}
window.onload=init();
