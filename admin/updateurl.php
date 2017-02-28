<?
	include("dblib.php");

	$no=$_POST['no'];
	$url=$_POST['url'];

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	$query="update dalgona_ad set url='$url' where no=$no";

	$ret=mysqli_query($conn,$query);

	if($ret){
		echo "변경이 완료되었습니다.";
	}else
		echo "update error";
?>
