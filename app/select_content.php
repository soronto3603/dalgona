<html>
<style>
  *{
    margin:0px;
    padding:0px;
  }
  p{
    font-size:18px;
    text-align:center;
    padding:14px;
  }
  #header{
    text-align:center;
    color:#ecbca7;
    border:3.5px solid #d49177;
    border-top:none;
    border-left:none;
    border-right:none;
    font-size:16px;
  }
  #header_title{
    font-size: 15px;
    padding: 20px;
  }
  #select_box_content{
    border:0.1px solid #f4f4f4;

  }
</style>
<script>
  function select(n){
    var json='{"title":"data","data":"'+n+'"}';
    window.parent.postMessage(json,"*");
  }
</script>
<div id=header>
  <h1 id=header_title>고민나누기</h1>
</div>
<?php
  if($_GET['flag']==0)$theme_list=array("이별후에","연애중","남VS여","직장생활","유부공감","사랑해","결혼/재혼","임신/육아","억울해요","기타");
  else if($_GET['flag']==1)$theme_list=array("유머","맛집","스포츠","연애","꿀팁","짤","기타");
  foreach($theme_list as $v){
    echo "<div id=select_box_content><p onclick='select(\"".$v."\")'>".$v."</p></div>";
  }
?>
</html>
