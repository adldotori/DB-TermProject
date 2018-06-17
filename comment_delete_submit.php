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
  //$conn = mysqli_connect('localhost','root','taeho','database');
  //$query1 ="select contents from news where newsID=$newsID";
  //$row = mysqli_fetch_array(mysqli_query($conn,$query1));
  //$contentTitle = $row[0];
  //$root = $_SERVER['DOCUMENT_ROOT'];
  //$path = $root."/news/".$contentTitle;
  //unlink($path);
  //$query2 ="delete from news where newsID=$newsID";
  //mysqli_query($conn,$query2);
  echo"<script>location.href='news_view.php?newsID=".$newsID."'</script>";
?>
  </body>
</html>
