<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
  <div id=menu>
    <span onclick="move_page(1);">유저관리</span>
    <span onclick="move_page(2);">게시물관리</span>
    <span onclick="move_page(3);">댓글관리</span>
    <span onclick="move_page(4);">금칙어관리</span>
    <span onclick="move_page(5);">광고관리</span>
    <span onclick="move_page(6);">공지관리</span>
  </div>
  <div id=content style="margin-left:210px;">
    <iframe id=content_frame src="home.php" frameborder="0" allowfullscree>
  </div>
</body>
</html>
