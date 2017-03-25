<?php
  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_banned_word";
  $ret=mysqli_query($conn,$query);
  echo "<h1 style='font-size: 50px;margin-top: 30px;'>금칙어 관리</h1>";
  echo "<h2 style='margin-top:20px;'>금칙어 순서는 낮은 순부터 적용 됩니다.</h2>";
  echo "<table>
    <tr>
      <th>no</th><th>단어</th></th>
    </tr>";
  echo "<tr><td></td><td><input id=word></td><td><button onclick='insert_word()'>생성</button></td>";
  while($row=mysqli_fetch_row($ret)){
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>
    <button onclick='delete_word(".$row[0].")'>삭제</button></td>";
  }
  echo "</table>";
?>
