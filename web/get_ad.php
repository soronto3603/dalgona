<?php
  include('dblib.php');
  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_ad where no=".rand(1,5);
  $ret=mysqli_query($conn,$query);

  while($row=mysqli_fetch_row($ret)){
    echo "<img width='100%' height='60' src='".$row[1]."' onclick='move_page(\"".$row[2]."\")'>";
  }

?>
