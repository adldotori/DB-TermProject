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
  $id = $_POST["id"];
  $cnt = count($id)
  for ($i=0; $i<$cnt; $i++){
    echo"$id[$i]";  //확인 차 출력해보려 했지만 에러남.. php상의 오류인듯
          // id값만 배열로 받아옴.
  }
?>
  </body>
</html>
