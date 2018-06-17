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
  $contents = $_POST["contents"];
  $newsTitle = $_POST["newsTitle"];
  $newsID = $_POST["newsID"];
  $conn = mysqli_connect('localhost','root','taeho','database');
  $query1 ="select count(*) from comment where newsID='".$newsID."'";
  $result = mysqli_fetch_array(mysqli_query($conn,$query1));
  $commentN =$result[0]+1;
  $query2 = "insert into comment(`comment#`,contents,writer,newsID) values($commentN,'$contents','$writer','$newsID');";
  $result = mysqli_fetch_array(mysqli_query($conn,$query2));
  echo "<script>location.href='news_view.php?newsID=".$newsID."'</script>";
?>
  </body>
</html>
