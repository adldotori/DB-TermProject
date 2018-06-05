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
  $conn = mysqli_connect('localhost','root','taeho');
  mysqli_select_db($conn,'DATABASE');
  $result = mysqli_query($conn,'insert into account(id,pw) values(ID,password);');
  echo"1<script>location.href=\"login.php\"</script>";
?>
  </body>
</html>
