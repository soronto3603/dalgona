<?php
  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_user";
  $ret=mysqli_query($conn,$query);
  echo "<h1 style='font-size: 50px;margin-top: 30px;'>유저관리</h1>";
  echo "<h2 style='margin-top:20px;'>관리자 페이지에서는 닉네임 중복 가능합니다. 전화번호 성별을 잘못 수정하면 프로그램 오류로 이어질 수 있습니다.</h2>";
  echo "<table>
    <tr>
      <th>no</th><th>닉네임</th><th>나이</th><th>번호</th><th>성별</th><th></th>
    </tr>";
  while($row=mysqli_fetch_row($ret)){
    echo "<tr><td>".$row[0]."</td><td><input id=name".$row[0]." value='".$row[3]."'></td><td><input id=age".$row[0]." value='".$row[2]."'></td><td><input id=phone".$row[0]." value='".$row[4]."'></td><td><input id=sex".$row[0]." value='".$row[5]."'></td><td>
    <button onclick='update_user(".$row[0].")'>수정</button><button onclick='delete_user(".$row[0].")'>삭제</button></td>";
  }
  echo "<tr><td></td><td><input id=name></td><td><input id=age></td><td><input id=phone></td><td><input id=sex></td><td><button onclick='insert_user()'>생성</button></td>";
  echo "</table>";
?>
