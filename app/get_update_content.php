<?php
  $read=$_POST['read'];

  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_content where no=$read";
  $ret=mysqli_query($conn,$query);

  while($row=mysqli_fetch_row($ret)){
    echo '{"title":"'.$row[1].'","theme":"'.$row[2].'","content":"'.$row[4].'"}';
  }


?>
