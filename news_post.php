<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스_기사작성</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {padding: 30px 30px 30px 30px}
    </style>
  </head>
  <body>
    <a href="
    <?php
    $cookie = explode(':',$_COOKIE["user_info"]);
    $authority = $cookie[1];
    if($authority=='1') echo "index1.php";
    elseif($authority=='2') echo "index2.php";
    elseif($authority=='3' || $authority=='4') echo "index3.php";
    else echo "index.php";
     ?>">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> home
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <h1 class="title2">기사작성</h1>
    <div style="heigth:200px">&nbsp;</div>
    <form method="post" action="./news_post_submit.php">
      <div class="form-group">
        <label for="newsTitle">기사제목</label>
        <input type="text" class="form-control" name="title" placeholder="제목을 입력하세요">
      </div>
      <div class="form-group">
        <label for="newsTitle">기사내용</label>
        <textarea type="text" class="form-control" name="content" rows="50" placeholder="내용을 입력하세요" style="height:500px"></textarea>
      </div>
      <button type="submit" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ok
      </button>
    </form>
  </body>
</html>
