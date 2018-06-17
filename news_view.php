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
    <?php
      if($_COOKIE["user_info"]){
        $cookie = explode(':',$_COOKIE["user_info"]);
        $authority = $cookie[1];
        $nickname = $cookie[0];
        if($authority=='1') $authStr = '관리자';
        elseif($authority=='2') $authStr = '기자(승인됨)';
        elseif($authority=='3') $authStr = '기자(미승인)';
        else $authStr = '일반회원';
        $stateStr = $nickname." | ".$authStr;
      }
      else{
        $stateStr = '<a href=login.php>로그인</a>';
      }
      echo "<div style=\"position:fixed; right:20px; top:20px;\">".$stateStr."</div>";
    ?>
    <?php
      $newsID=$_GET['newsID'];
      $cookie = explode(':',$_COOKIE['user_info']);
      $authorID =$cookie[0];
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
      $query3 = "update member set ".$news['category']."=".$news['category']."+1 where nickname='$authorID'";
      mysqli_query($conn,$query3);
      echo"<a href=\"news.php\">
      <button type=\"button\" class=\"btn btn-default btn-lg\">
        <span class=\"glyphicon glyphicon-arrow-left\" aria-hidden=\"true\"></span> 전체뉴스
      </button></a>
      ";
      if($authorID == $news['authorID']){
        echo"
        <button type=\"button\" class=\"btn btn-default btn-lg\" onClick=\"location.href='news_edit.php?newsID=".$news['newsID']."';\" style=\"margin-left:20px\">
          <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>수정하기
        </button>
        <button type=\"button\" class=\"btn btn-default btn-lg\" onClick=\"delFunc();\" style=\"margin-left:20px\">
          <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>삭제하기
        </button>
        ";
        echo"<script>
          function delFunc(){
            var del = confirm(\"정말 삭제하시겠습니까?\");
            if (del){
              location.href = \"news_delete_submit.php?newsID=".$newsID."\";
            }
          }
        </script>";
      }
      echo"
      <div style=\"heigth:200px\">&nbsp;</div>
      <div style=\"max-width: 1232px;\">
      ";
      echo "
      <h1 class=\"title2\"><".$news['category']."> ".$news['title']."</h1>
      <div style=\"height:20px\">&nbsp;</div>";
      echo "<div style=\"text-align: right\">
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
        echo $comment['writer']." : ".$comment['contents'];
        if($comment['writer'] == $authorID){
          echo "<input type='button' value='수정' onclick=\"editComment".$comment[0]."();\" style=\"font-size:13px; margin-left:20px;\">
          <input type='button' value='삭제' onclick=\"delComment".$comment[0]."();\" style=\"font-size:13px;\">
          <script>
            function editComment".$comment[0]."(){
              var commentField = document.getElementById(\"cField\");
              var commentBtn = document.getElementById(\"cBtn\");
              var commentAction = document.getElementById(\"cAction\");
              var commentId = document.getElementById(\"cId\");
              commentField.setAttribute(\"value\", \"".$comment['contents']."\");
              cBtn.innerHTML = \"댓글수정\";
              commentAction.setAttribute(\"action\", \"./comment_edit.php\");
              commentId.setAttribute(\"value\", \"".$comment[0]."\");
            }
            function delComment".$comment[0]."(){
              var del = confirm(\"정말 삭제하시겠습니까?\");
              if(del){
                location.href = \"comment_delete_submit.php?newsTitle=".$news['title']."&commentN=".$comment[0]."\";
              }
            }
          </script>";
        }
        echo "<br><div style=\"height:10px\">&nbsp;</div>";
      }
      echo "</h1>
      <div style=\"height:20px\">&nbsp;</div>";
      echo "<form method=\"post\" action=\"./comment_submit.php\" id=\"cAction\">
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"input-group\">
          <input type=\"text\" id=\"cField\" name=\"contents\" class=\"form-control\" placeholder=\"";
          if($_COOKIE['user_info']) echo "\""; else echo "로그인 후 이용가능합니다.\" disabled";
          echo " value=\"\">
          <input type=\"hidden\" name=\"newsTitle\" value=\"".$news['title']."\" class=\"form-control\">
          <input type=\"hidden\" name=\"newsID\" value=\"".$news['newsID']."\" class=\"form-control\">
          <input type=\"hidden\" name=\"commentN\" value=\"\" class=\"form-control\" id=\"cId\">
          <span class=\"input-group-btn\" type=\"submit\">
            <button type=\"submit\" class=\"btn btn-default\" id=\"cBtn\">댓글달기</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    </form>
    </div>";
    ?>
  </body>
</html>
