<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {padding: 30px 30px 30px 30px}
    </style>
  </head>
  <body>
    <a href="#" onclick="history.go(-1)">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 뒤로가기
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <div style="max-width: 1232px;">
    <!--php로 구현필요-->
    <?php
      $newsID=$_GET['newsID'];
      $conn = mysqli_connect('localhost','root','taeho','database');
      $query1 ="select * from news where newsID=$newsID";
      $news = mysqli_fetch_array(mysqli_query($conn,$query1));
      $root = $_SERVER['DOCUMENT_ROOT'];
      $filename = $root."/news/".$news['contents'];
      $fp = fopen($filename,'r');
      $contents = fread($fp,filesize($filename));
      fclose($fp);
      echo "
      <h1 class=\"title2\">".$news['title']."</h1>
      <div style=\"height:20px\">&nbsp;</div>
      <div style=\"text-align: right\">
      <p style=\"font-size:15px;\">기사입력 ".$news['date']."</p></div>
      <hr max-width=\"1232px\" style=\"border-top: 1px solid #000; margin-top: 10px\">
      <div style=\"font-size: 20px; min-height: 400px\">"
      .$contents.
      "</div>
      <hr max-width=\"1232px\" style=\"border-top: 1px solid #000; margin-top: 10px\">
      <h1 class=\"title2\" style=\"font-size:24px\">Comments</h1>
      <br>
      <h1 class=\"title2\" style=\"font-size:20px\">";
      $query2 = "select * from comment where articleTitle='".$news['title']."'";
      $result = mysqli_query($conn,$query2);
      while($comment = mysqli_fetch_array($result)){
        echo $comment['writer']." : ".$comment['contents']."<br>";
      }
      echo "</h1>
      <div style=\"height:20px\">&nbsp;</div>";
      ?>
    <form method="post" action="./comment_submit.php">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" name="comment" class="form-control" placeholder="로그인 후 이용가능합니다.">
          <span class="input-group-btn" type="submit">
            <button type="button" class="btn btn-default">댓글달기</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    </form>
    </div>
  </body>
</html>
