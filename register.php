<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스_회원가입</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
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
    <h1 class="title2">REGISTER</h1>
    <form method="post" action="./register_submit.php">
      <div class="input-group" style="margin:20px 0 20px 0 ">
        <input type="text" class="form-control" placeholder="ID" aria-describedby="basic-addon2" name="id">
      </div>
      <div class="input-group" style="margin:20px 0 20px 0 ">
        <input type="password" class="form-control" placeholder="password" aria-describedby="basic-addon2" name="pw">
      </div>
      <div class="input-group" style="margin:20px 0 20px 0 ">
        <input type="password" class="form-control" placeholder="password confirm" aria-describedby="basic-addon2" name="pw_confirm">
      </div>
      <div class="form-group" style="margin:20px 0 20px 0; width:196px;">
        <select class="form-control" id="sel1" name="age">
          <option>연령대</option>
          <option>10대</option>
          <option>20대</option>
          <option>30~40대</option>
          <option>50대 이상</option>
        </select>
      </div>
      <div class="panel panel-default" style="width:196px;">
        <div class="panel-heading">회원구분</div>
        <div class="panel-body">
          <label class="radio-inline"><input type="radio" name="status" value="일반">일반</label>
          <label class="radio-inline" style="margin:0 0 0 20px"><input type="radio" name="status" value="기자">기자</label>
        </div>
      </div>
      <button type="submit" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ok
      </button>
    </form>
  </body>
</html>