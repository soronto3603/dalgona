<script>
var isclose=0;
function ad(u){
  if(isclose==0){
    var json='{"title":"ad","ad":"'+u+'"}';
    window.parent.postMessage(json,"*");
  }
  document.getElementById('ad2').style.display='none';
}
</script>
<?php
  include('dblib.php');
  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
  $query="select no,odd from dalgona_ad2";
  $ret=mysqli_query($conn,$query);
  $url=$_GET['url'];
  $number=0;
  $odd_list=array();
  while($row=mysqli_fetch_row($ret)){
    $number+=$row[1];
    $odd_list[$row[0]]=$row[1];
  }
  $odd=rand(1,$number);
  foreach($odd_list as $k=>$v){
    $odd-=$v;
    if($odd<=0){
      $query="select * from dalgona_ad2 where no=$k";
      break;
    }
  }
  $ret=mysqli_query($conn,$query);
  while($row=mysqli_fetch_row($ret)){
    echo "<div id=ad2 style='z-index:100;position:fixed;top:0px;width:100%;height:100%;background-color:black;' onclick='ad(\"".$row[2]."\")'>
    <img src='img/close.png' style='position: fixed;right: 10px;top: 10px;width: 50px;' onclick='isclose=1;document.getElementById(\"ad2\").style.display=\"none\";'>
    <center style='width:100%;height:100%;margin:0px;padding:0px'>
    <img src='".$row[1]."'style='width: auto; height: auto;max-width: 100%;max-height: 100%;'></center></div>";
  }
?>
