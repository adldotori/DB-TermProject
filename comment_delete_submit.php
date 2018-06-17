<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>나딱뉴스_댓글삭제</title>
  </head>
  <body>
<?php
  $newsID=$_GET['newsID'];
  $commentN = $_GET['commentN'];
  $conn = mysqli_connect('localhost','root','taeho','database');
  $query ="delete from comment where newsID=$newsID and `comment#`=$commentN";
  $row = mysqli_fetch_array(mysqli_query($conn,$query));
  echo"<script>location.href='news_view.php?newsID=".$newsID."'</script>";
?>
  </body>
</html>
