function get_user_list(){
  $.post("get_user_list.php",{
	},function(data,status){
    //alert(data);
    document.getElementById('content').innerHTML=data;
	});
}
function init(){
  get_user_list();
}
window.onload=init();
function update_user(n){
  var name=document.getElementById("name"+n).value;
  var age=document.getElementById("age"+n).value;
  var phone=document.getElementById("phone"+n).value;
  var sex=document.getElementById("sex"+n).value;
  $.post("update_user.php",{
    no:n,
    name:name,
    age:age,
    phone:phone,
    sex:sex
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
function delete_user(n){
  $.post("delete_user.php",{
    no:n,
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
function insert_user(){
  var name=document.getElementById("name").value;
  var age=document.getElementById("age").value;
  var phone=document.getElementById("phone").value;
  var sex=document.getElementById("sex").value;
  $.post("insert_user.php",{
    name:name,
    age:age,
    phone:phone,
    sex:sex
	},function(data,status){
    //alert(data);
    location.reload();
	});
}
