<?
	include("dblib.php");

	$url=$_GET['url'];
	$no=$_GET['no'];

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	$query="update dalgona_ad set image='$url' where no=$no";

	$ret=mysqli_query($conn,$query);

	if($ret){
		echo "<script>location.href=\"ad.php\"</script>";
	}else
		echo "upload error";
?>
