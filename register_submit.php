<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>나딱뉴스_로그인</title>
  </head>
  <body>
<?php
  $id = $_POST["id"];
  $pw = $_POST["pw"];
  $pw_con = $_POST["pw_confirm"];
  $nickname = $_POST["nickname"];
  $age = $_POST["age"];
  $authority = $_POST["authority"];
  if($pw != $pw_con){
    echo "<script>alert(패스워드가 같지 않습니다.);location.href=\"register.php\"</script>";
  }
  $conn = mysqli_connect('localhost','root','taeho');
  mysqli_select_db($conn,'DATABASE');
  $result = mysqli_query($conn,'insert into member(ID,password,nickname,authority,age) values('4','4','4.nick',4,10);');
  echo"<script>alert(\"id: $id pw: $pw  age: $age  status: $status\");location.href=\"register.php\"</script>";
?>
  </body>
</html>
