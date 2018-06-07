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
  $id = $_POST["id"];
  $pw = $_POST["pw"];

  $conn = mysqli_connect('localhost','root','taeho','database');
  $query ="select * from member where ID=$id and password=$pw";
  $row = mysqli_fetch_array(mysqli_query($conn,$query));
  if($row) echo "<script>location.href=\"index.php\";</script>";
  else {
    echo "<script>alert(\"정보입력을 다시하세요!\");location.href=\"login.php\";</script>";
  }
?>
  </body>
</html>
