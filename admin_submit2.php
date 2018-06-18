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
      $cnt = count($id);
      for ($i=0; $i<$cnt; $i++){
        $conn = mysqli_connect('localhost','root','taeho','newsDB');
        $query ="delete from member where id='$id[$i]'";
        mysqli_query($conn,$query);
      }
    ?>
    <script>location.href ="admin.php";</script>
  </body>
</html>
