<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스_로그인</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {padding: 30px 30px 30px 30px}
    </style>
  </head>
  <body>
<?php
  $comment = $_POST["comment"];
  $newsID = $_POST["newsID"];
  $conn = mysqli_connect('localhost','root','taeho','database');
  $query1 ="select count(*) from comment where articleTitle='".$newsID."'";
  $result = mysqli_fetch_array(mysqli_query($conn,$query));
  echo $result[0];
  echo "<script>location.href=\"news_view.php\"</script>";
?>
  </body>
</html>
