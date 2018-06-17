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
  $cookie = explode(':',$_COOKIE["user_info"]);
  $writer = $cookie[0];
  $commentN = $_POST["commentN"];
  $contents = $_POST["contents"];
  $newsTitle = $_POST["newsTitle"];
  $newsID = $_POST["newsID"];
  $conn = mysqli_connect('localhost','root','taeho','database');
  $query ="update comment set contents='$contents' where newsTitle='$newsTitle' and `comment#`=$commentN;";
  $result = mysqli_fetch_array(mysqli_query($conn,$query));
  echo "<script>location.href='news_view.php?newsID=".$newsID."'</script>";
?>
  </body>
</html>
