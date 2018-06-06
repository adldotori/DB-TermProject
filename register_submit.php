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
  echo $id.$pw.$pw_con.$nickname.$age.$authority;
  if($pw != $pw_con){
    echo "<script>alert(패스워드가 같지 않습니다.);location.href=\"register.php\"</script>";
  }
  $conn = mysqli_connect('localhost','root','taeho','database');
  $query ="insert into member(ID,password,nickname,authority,age) values('$id','$pw','$nickname',''$age',$authority);";
  $result = mysqli_fetch_array(mysqli_query($conn,$query));
  if($result) alert(회원가입 성공!);
  echo"location.href=\"index.php\"</script>";
?>
  </body>
</html>
