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
  $conn = mysqli_connect('localhost','root','taeho','newsDB');
  $ID =   mysqli_real_escape_string($conn,$id);
  $PW =   mysqli_real_escape_string($conn,$pw);
  $query =sprintf("SELECT * from member where ID='%s' and password='%s'",$ID,$PW);
  $row = mysqli_fetch_array(mysqli_query($conn,$query));
  setcookie("user_info",$row['nickname'].":".$row['authority'].":".$row['age'],time()+3600*24,"/");
  if($row['authority']==1) echo "<script>location.href=\"index1.php\";</script>";
  elseif ($row['authority']==2) echo "<script>location.href=\"index2.php\";</script>";
  elseif ($row['authority']==3 or $row['authority']==4) echo "<script>location.href=\"index3.php\";</script>";
  else {
    echo "<script>alert(\"입력한 정보가 올바르지 않습니다.\"); location.href=\"login.php\";</script>";
  }
?>
  </body>
</html>
