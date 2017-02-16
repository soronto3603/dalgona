<?php
  include('dblib.php');

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $query="select * from dalgona_content order by no desc";
  $ret=mysqli_query($conn,$query);
  echo "<h1 style='font-size: 50px;margin-top: 30px;'>게시물 관리</h1>";
  echo "<h2 style='margin-top:20px;'>게시물 생성.</h2>";
  echo "<h4>달고나 게시판 테마: 이별후에,연애중,남VS여,직장생활,유부공감,사랑해,결혼/재혼,임신/육아,억울해요,기타</h4>";
  echo "<h4>자유 게시판 테마:유머,맛집,스포츠,연애,꿀팁,짤,기타</h4>";
  echo "<h2>※달고나 = 0 자유 = 1</h2>";
  echo "<table style='position:relative'><tr><th>no</th><th>제목</th><th>테마</th><th>날짜</th><th>글쓴이</th><th>조회</th><th>댓글</th><th>성별</th><th>게시판</th><th></th></tr>";
  echo "<tr><td></td><td><input id=title></td>
  <td><input id=theme style='width:50px'></td><td><input id=date></td>
  <td><input id=writer></td><td><input id=count></td><td></td><th><input id=sex style='width:50px'></th><th><input id=flag></th>
  <td><button onclick='insert_content()'>생성</button></td>
  </tr></table>";
  echo "<div id=content_text><textarea id=content style='height:120px'></textarea></div>";
  echo "<h2 style='margin-top:20px;'>게시물 리스트.</h2>";
  while($row=mysqli_fetch_row($ret)){
    $query="select count(*) from dalgona_comment where content_no=".$row[0];
    $ret1=mysqli_query($conn,$query);
    $comment;
    while($row1=mysqli_fetch_row($ret1)){
      $comment=$row1[0];
    }
    echo "<table style='position:relative'><tr><th>no</th><th>제목</th><th>테마</th><th>날짜</th><th>글쓴이</th><th>조회</th><th>댓글</th><th></th></tr>";
    echo "<tr><td>".$row[0]."</td><td><input id=title".$row[0]." value='".$row[1]."'></td>
    <td><input id=theme".$row[0]." value='".$row[2]."'></td><td><input id=date".$row[0]." value='".$row[3]."'></td>
    <td><input id=writer".$row[0]." value='".$row[5]."'></td><td><input id=count".$row[0]." value='".$row[6]."'></td><td>$comment</td>
    <td><button onclick='update_content(".$row[0].")'>수정</button><button onclick='delete_content(".$row[0].")'>삭제</button><button onclick='open_content(".$row[0].",".$row[8].")'>게시물</button></td>
    </tr></table>";
    echo "<div id=content_text><textarea id=content".$row[0]." style='height:120px'>".$row[4]."</textarea></div>";
  }

?>
