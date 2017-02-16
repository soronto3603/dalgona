function get_message(){
  $.post("get_message.php",{
	},function(data,status){
    //alert(data);
    var j=JSON.parse(data);
    document.getElementById('message').value=j.text;
    document.getElementById('url').value=j.url;
	});
}
function init(){
  get_message();
}
window.onload=init();
function update_message(){
  var message=document.getElementById("message").value;
  var url=document.getElementById('url').value;
  $.post("update_message.php",{
    message:message,
    url:url
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
