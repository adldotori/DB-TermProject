<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>나딱뉴스_기사수정</title>
  </head>
  <body>
<?php
  $title = $_POST["title"];
  $content = $_POST["content"];
  $category = $_POST["category"];
  $newsID = $_GET["newsID"];
  $cookie = explode(':',$_COOKIE["user_info"]);
  $authorID = $cookie[0];
  $root = $_SERVER['DOCUMENT_ROOT'];
  $i=1;
  $conn = mysqli_connect('localhost','root','taeho','newsDB');
  $query1 ="select contents from news where newsID=$newsID";
  $result = mysqli_fetch_array(mysqli_query($conn,$query1));
  $fp = fopen($root."/news/".$result[0],"w");
  fwrite($fp,$content);
  fclose($fp);
  $query2 ="update news set title='$title',category='$category' where newsID=$newsID";
  mysqli_query($conn,$query2);
  echo"<script>location.href='";
  $cookie = explode(':',$_COOKIE["user_info"]);
  $authority = $cookie[1];
  if($authority=='1') echo "index1.php";
  elseif($authority=='2') echo "index2.php";
  elseif($authority=='3' || $authority=='4') echo "index3.php";
  else echo "index.php";
   echo"'</script>";
?>
  </body>
</html>
