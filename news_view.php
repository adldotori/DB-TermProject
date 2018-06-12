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
    <a href="news.php">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 전체뉴스
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <div style="max-width: 1232px;">
    <!--php로 구현필요-->
    <?php
      $newsID=$_GET['newsID'];
      $cookie = explode(':',$_COOKIE['user_info']);
      $age = $cookie[2];
      if($age == '10s') $hits = '`10hits`';
      elseif($age == '20s') $hits = '`20hits`';
      elseif($age == '30-40s') $hits = '`30-40hits`';
      elseif($age == '50-s') $hits = '`50-hits`';
      else $agehits = 'hits';
      $conn = mysqli_connect('localhost','root','taeho','database');
      $query1 ="update news set ".$hits."=".$hits."+1 where newsID = ".$newsID;
      mysqli_query($conn,$query1);
      $query2 = "select * from news where newsID=".$newsID;
      $news = mysqli_fetch_array(mysqli_query($conn,$query2));
      $root = $_SERVER['DOCUMENT_ROOT'];
      $filename = $root."/news/".$news['contents'];
      $fp = fopen($filename,'r');
      $contents = fread($fp,filesize($filename));
      $contents = str_replace("\n","<br />\n",$contents);
      fclose($fp);
      echo "
      <h1 class=\"title2\">".$news['title']."</h1>
      <div style=\"height:20px\">&nbsp;</div>
      <div style=\"text-align: right\">
      <p style=\"font-size:15px;\">작성자 ".$news['authorID']." | 기사입력 ".$news['date']."</p></div>
      <hr max-width=\"1232px\" style=\"border-top: 1px solid #000; margin-top: 10px\">
      <div style=\"font-size: 20px; min-height: 400px\">"
      .$contents.
      "</div>
      <hr max-width=\"1232px\" style=\"border-top: 1px solid #000; margin-top: 10px\">
      <h1 class=\"title2\" style=\"font-size:24px\">Comments</h1>
      <br>
      <h1 class=\"title2\" style=\"font-size:20px\">";
      $query2 = "select * from comment where newsTitle='".$news['title']."'";
      $result = mysqli_query($conn,$query2);
      while($comment = mysqli_fetch_array($result)){
        echo $comment['writer']." : ".$comment['contents']."<br>";
      }
      echo "</h1>
      <div style=\"height:20px\">&nbsp;</div>";
      echo "<form method=\"post\" action=\"./comment_submit.php\">
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"contents\" class=\"form-control\" placeholder=\"";if($_COOKIE['user_info']) echo " "; else echo "로그인 후 이용가능합니다.\" disabled"; echo "\">
          <input type=\"hidden\" name=\"newsTitle\" value=\"".$news['title']."\" class=\"form-control\">
          <input type=\"hidden\" name=\"newsID\" value=\"".$news['newsID']."\" class=\"form-control\">
          <span class=\"input-group-btn\" type=\"submit\">
            <button type=\"submit\" class=\"btn btn-default\">댓글달기</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    </form>";
    ?>
    </div>
  </body>
</html>
