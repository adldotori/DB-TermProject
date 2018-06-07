<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {padding: 30px 30px 30px 30px}
    .mybox {margin-bottom:10px}
    </style>
    <script>
    function func1(){
      document.getElementsById("myBtn");
    }
    </script>
  </head>
  <body>
    <a href="index1.php">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> home
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <h1 class="title2">미승인 기자목록</h1>
    <div style="heigth:200px">&nbsp;</div>
    <div class="mybox">
    <label>   id | nickname</label></div>
    <form method="post" action="admin_submit.php">
      <div class="radio mybox">
        <label><input type="radio" name="id" value="id1 | nickname1">id1 | nickname1</label>
      </div>
      <div class="radio mybox">
        <label><input type="radio" name="id" value="id2 | nickname2">id2 | nickname2</label>
      </div>
      <div class="radio mybox">
        <label><input type="radio" name="id" value="id3 | nickname3">id3 | nickname3</label>
      </div>
      <button type="submit" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 승인
      </button>
    </form>
  </body>
</html>
