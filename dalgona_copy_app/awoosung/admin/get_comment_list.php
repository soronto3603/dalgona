<?php
  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_comment order by no desc";
  $ret=mysqli_query($conn,$query);
  echo "<h1 style='font-size: 50px;margin-top: 30px;'>댓글관리</h1>";
  echo "<h2 style='margin-top:20px;'>게시판 : 0 = 달고나 게시판 1 = 자유토크 게시판 잘못 입력시 노출 안됨</h2>";
  echo "<table><tr>
    <th>게시글 번호</th><th>닉네임</th><th>성별</th><th>댓글</th><th>게시판</th><th>시간</th><th></th>
  </tr>
  <tr><td><input id=no  style='width:50px;'></td><td><input id=writer style='width:100px;'></td><td><input id=sex style='width:50px;'></td><td><input id=comment></td><td><input id=flag style='width:20px;'></td><td><input id=time style='width:100px;'></td><td><button onclick='insert_comment()'>생성</button></td>";

  while($row=mysqli_fetch_row($ret)){
    echo "<tr><td>".$row[0]."</td><td><input id=writer".$row[6]." value='".$row[1]."' style='width:100px;'></td><td><input id=sex".$row[6]." value='".$row[2]."' style='width:50px;'></td><td><input id=comment".$row[6]." value='".$row[3]."'></td><td><input id=flag".$row[6]." value='".$row[4]."' style='width:20px;'></td>
    <td><input id=time".$row[6]." value='".$row[5]."' style='width:100px;'></td><td>
    <button onclick='update_comment(".$row[6].")'>수정</button><button onclick='delete_comment(".$row[6].")'>삭제</button><button onclick='open_comment(".$row[0].",".$row[4].")'>게시물</button></td>";
  }

  echo "</table>";
?>
