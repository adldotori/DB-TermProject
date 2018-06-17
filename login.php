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
    <a href="index.php">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> home
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <div style="position:absolute; width:196px; left:50%; margin-left:-98px;">
      <h1 class="title2">LOGIN</h1>
      <form method="post" action="./login_submit.php">
        <div class="input-group" style="margin:20px 0 20px 0 ">
          <input type="text" class="form-control" placeholder="ID" aria-describedby="basic-addon2" name="id">
        </div>
        <div class="input-group" style="margin:20px 0 20px 0 ">
          <input type="password" class="form-control" placeholder="password" aria-describedby="basic-addon2" name="pw">
        </div>
        <button type="submit" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ok
        </button>
      </form>
  </div>
  </body>
</html>
