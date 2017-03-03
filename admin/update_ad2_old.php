<?
	include("dblib.php");

	$no=$_POST['no'];
	$url=$_POST['url'];
  $odd=$_POST['odd'];

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	//제어
	/*$query="select odd from dalgona_ad2";
  $ret=mysqli_query($conn,$query);
  $number=0;
  while($row=mysqli_fetch_row($ret)){
    $number+=$row[0];
    if($number>100){
      echo "전체 확률 값이 100이 넘어 입력되지 않습니다.";
      return 0;
    }
  }*/
	$query="update dalgona_ad2 set url='$url',odd='$odd' where no=$no";

	$ret=mysqli_query($conn,$query);

	if($ret){
		echo "변경이 완료되었습니다.";
	}else
		echo "update error";
?>
