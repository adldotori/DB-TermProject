<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>나딱뉴스_기사작성</title>
  </head>
  <body>
<?php
  $title = $_POST["title"];
  $content = $_POST["content"];
  $cookie = explode(':',$_COOKIE["user_info"]);
  $authority = $cookie[0];
  $conn = mysqli_connect('localhost','root','taeho','database');
  $query ="insert into news(title,contents,authorID) values(\"".$title."\",\"".$content."\",\"".$authorID."\")";
  mysqli_query($conn,$query);
  echo"<script>location.href=\"";
  $cookie = explode(':',$_COOKIE["user_info"]);
  $authority = $cookie[1];
  if($authority=='1') echo "index1.php";
  elseif($authority=='2') echo "index2.php";
  elseif($authority=='3' || $authority=='4') echo "index3.php";
  else echo "index.php";
   echo"\"</script>";
?>
  </body>
</html>
