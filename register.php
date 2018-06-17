<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스_회원가입</title>
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
    <?php
      echo "<div style=\"position:fixed; right:20px; top:20px;\"><a href=\"login.php\">
        로그인</a>
      </div>";
    ?>
    <div style="heigth:200px">&nbsp;</div>
    <div style="position:absolute; width:196px; left:50%; margin-left:-98px;">
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
        <div class="input-group" style="margin:20px 0 20px 0 ">
          <input type="text" class="form-control" placeholder="nickname" aria-describedby="basic-addon2" name="nickname">
        </div>
        <div class="form-group" style="margin:20px 0 20px 0; width:196px;">
          <select class="form-control" id="sel1" name="age">
            <option>연령대</option>
            <option value="10s">10대</option>
            <option value="20s">20대</option>
            <option value="30-40s">30-40대</option>
            <option value="50-s">50대 이상</option>
          </select>
        </div>
        <div class="panel panel-default" style="width:196px;">
          <div class="panel-heading">회원구분</div>
          <div class="panel-body">
            <label class="radio-inline"><input type="radio" name="authority" value="4">일반</label>
            <label class="radio-inline" style="margin:0 0 0 20px"><input type="radio" name="authority" value="3">기자</label>
          </div>
        </div>
        <button type="submit" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ok
        </button>
      </form>
    </div>
  </body>
</html>
