<?
	include("dblib.php");
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	$query="select image,url from dalgona_ad";
	$ret=mysqli_query($conn,$query);
	echo "{";
	$cnt=0;
	while($row=mysqli_fetch_array($ret)){
		$cnt++;
		echo "\"image$cnt\":\"$row[0]\",\"url$cnt\":\"$row[1]\"";
		if($cnt!=5){
			echo ",";
		}
	}
	echo "}";


?>
