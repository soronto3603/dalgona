function init(){
}
window.onload=init();
function move_page(n){
  if(n==1){
    document.getElementById('content_frame').src="user.php";
  }else if(n==2){
    document.getElementById('content_frame').src="content.php";
  }else if(n==3){
    document.getElementById('content_frame').src="comment.php";
  }else if(n==4){
    document.getElementById('content_frame').src="banned_word.php";
  }else if(n==5){
    document.getElementById('content_frame').src="ad.php";
  }else if(n==6){
    document.getElementById('content_frame').src="message.php";
  }
}
