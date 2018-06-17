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
    <?php
    $cookie = explode(':',$_COOKIE["user_info"]);
    if($authority=='1') $authStr = '관리자';
    elseif($authority=='2') $authStr = '기자(승인됨)';
    elseif($authority=='3') $authStr = '기자(미승인)';
    else $authStr = '일반회원';
    if($cookie[0])
      $nickname = $cookie[0];
    echo "<div style=\"position:fixed; right:20px; top:20px;\">
      $nickname | $authStr
    </div>";
    ?>
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
      <div class="panel panel-default" style="width:390px;">
        <div class="panel-heading">기사구분</div>
        <div class="panel-body">
          <label class="radio-inline"><input type="radio" name="category" value="정치">정치</label>
          <label class="radio-inline" style="margin:0 0 0 20px"><input type="radio" name="category" value="경제">경제</label>
          <label class="radio-inline" style="margin:0 0 0 20px"><input type="radio" name="category" value="사회">사회</label>
          <label class="radio-inline" style="margin:0 0 0 20px"><input type="radio" name="category" value="문화">문화</label>
          <label class="radio-inline" style="margin:0 0 0 20px"><input type="radio" name="category" value="스포츠">스포츠</label>
        </div>
      </div>
      <button type="submit" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ok
      </button>
    </form>
  </body>
</html>
