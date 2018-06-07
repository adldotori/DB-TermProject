<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>나딱뉴스_로그인</title>
  </head>
  <body>
<?php
  $title = $_POST["title"];
  $content = $_POST["content"];
  $authorID =
  $conn = mysqli_connect('localhost','root','taeho','database');
  $query ="insert into news(title,contents,authorID,newsID,date,hits) values($title,,$content,$authorID)";
  $result = mysqli_fetch_array(mysqli_query($conn,$query));
  echo"<script>alert(\"title: $title content: $content\");location.href=\"news_post.php\"</script>";
?>
  </body>
</html>
