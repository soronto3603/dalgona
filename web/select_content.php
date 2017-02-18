<style>
  p{
    margin:40px;font-size:18px;
    text-align:center;
  }
</style>
<script>
  function select(n){
    var json='{"title":"data","data":"'+n+'"}';
    window.parent.postMessage(json,"*");
  }
</script>
<?php
  if($_GET['flag']==0)$theme_list=array("이별후에","연애중","남VS여","직장생활","유부공감","사랑해","결혼/재혼","임신/육아","억울해요","기타");
  else if($_GET['flag']==1)$theme_list=array("유머","맛집","스포츠","연애","꿀팁","짤","기타");
  foreach($theme_list as $v){
    echo "<div id=select_box_content><p onclick='select(\"".$v."\")'>".$v."</p></div>";
  }
?>
