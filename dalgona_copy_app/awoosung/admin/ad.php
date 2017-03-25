<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/ad.js"></script>
</head>
<body>
  <h1>광고</h1>
  <h2>광고 사이즈 : 728*90</h2>
  <div id=app1 class=app>
    <img class=img id=img1 align=middle onclick='imgclick(this)'>
    <form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
      <input type="file" name="upload" id="upload"/>
      <input type="hidden" name="no" value="1"/>
      <input type=submit value='이미지업로드' class=btn>
    </form>
    <input type=text id=url1 class=url>
    <button onclick='update(1)'>수정</button>
  </div>
  <div id=app2 class=app>
    <img class=img id=img2 align=middle onclick='imgclick(this)'>
    <form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
      <input type="file" name="upload" id="upload"/>
      <input type="hidden" name="no" value="2"/>
      <input type=submit value='이미지업로드' class=btn>
    </form>
    <input type=text id=url2 class=url>
    <button onclick='update(2)'>수정</button>
  </div>
  <div id=app3 class=app>
    <img class=img id=img3 align=middle onclick='imgclick(this)'>
    <form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
      <input type="file" name="upload" id="upload"/>
      <input type="hidden" name="no" value="3"/>
      <input type=submit value='이미지업로드' class=btn>
    </form>
    <input type=text id=url3 class=url>
    <button onclick='update(3)'>수정</button>
  </div>
  <div id=app4 class=app>
    <img class=img id=img4 align=middle onclick='imgclick(this)'>
    <form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
      <input type="file" name="upload" id="upload"/>
      <input type="hidden" name="no" value="4"/>
      <input type=submit value='이미지업로드' class=btn>
    </form>
    <input type=text id=url4 class=url>
    <button onclick='update(4)'>수정</button>
  </div>
  <div id=app5 class=app>
    <img class=img id=img5 align=middle onclick='imgclick(this)'>
    <form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
      <input type="file" name="upload" id="upload"/>
      <input type="hidden" name="no" value="5"/>
      <input type=submit value='이미지업로드' class=btn>
    </form>
    <input type=text id=url5 class=url>
    <button onclick='update(5)'>수정</button>
  </div>
</body>
</html>
