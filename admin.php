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
    <a href="index1.php">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> home
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <h1 class="title2">미승인 기자목록</h1>
    <div style="heigth:200px">&nbsp;</div>
      <form method="post" action="./admin_submit.php">
      <div class="row">
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" name="id" class="form-control" disabled placeholder="id | nickname" style="background-color: white;">
            <span class="input-group-btn" type="submit">
              <button type="button" class="btn btn-default">승인</button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      </form>
  </body>
</html>
