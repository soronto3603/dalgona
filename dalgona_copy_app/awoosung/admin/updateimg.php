<?
	include("dblib.php");

	$url=$_GET['url'];
	$no=$_GET['no'];

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if((int)$no>5){
		$query="update dalgona_ad2 set image='$url' where no=$no";
	}else{
		$query="update dalgona_ad set image='$url' where no=$no";
	}
	$ret=mysqli_query($conn,$query);

	if($ret){
		if((int)$no>5){
			echo "<script>location.href=\"ad2.php\"</script>";
		}else{
			echo "<script>location.href=\"ad.php\"</script>";
		}
	}else
		echo "upload error";
?>
