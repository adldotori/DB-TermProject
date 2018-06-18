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
  $conn = mysqli_connect('localhost','root','taeho','newsDB');
  $query1 ="select * from member where ID='$id';";
  $row1 = mysqli_fetch_array(mysqli_query($conn,$query1));
  $query2 ="select * from member where nickname='$nickname';";
  $row2 = mysqli_fetch_array(mysqli_query($conn,$query2));
  if(!$id){
    echo "<script>alert(\"id를 입력해주세요!\");location.href=\"register.php\"</script>";
  }
  if(!$pw){
    echo "<script>alert(\"password를 입력해주세요!\");location.href=\"register.php\"</script>";
  }
  if(!$pw_con){
    echo "<script>alert(\"password_confirm을 입력해주세요!\");location.href=\"register.php\"</script>";
  }
  if(!$nickname){
    echo "<script>alert(\"nickname을 입력해주세요!\");location.href=\"register.php\"</script>";
  }
  if($age == '연령대'){
    echo "<script>alert(\"age를 입력해주세요!\");location.href=\"register.php\"</script>";
  }
  if(!$authority){
    echo "<script>alert(\"회원구분을 입력해주세요!\");location.href=\"register.php\"</script>";
  }
  if($row1){
    echo "<script>alert(\"중복된 아이디가 있습니다.\"); location.href=\"register.php\"</script>";
  }
  if($row2){
    echo "<script>alert(\"중복된 닉네임이 있습니다.\"); location.href=\"register.php\"</script>";
  }
  if($pw!=$pw_con){
    echo "<script>alert(\"패스워드가 같지 않습니다.\");location.href=\"register.php\"</script>";
  }
  $query3 ="insert into member(ID,password,nickname,authority,age) values('".$id."','".$pw."','".$nickname."',$authority,'".$age."');";
  mysqli_query($conn,$query3);
  echo "<script>alert(\"회원가입 성공!\");location.href=\"index.php\"</script>";
?>
  </body>
</html>
