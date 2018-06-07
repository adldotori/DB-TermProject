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
    <a href="#" onclick="history.go(-1)">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 뒤로가기
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <div style="max-width: 1232px;">
    <!--php로 구현필요-->
      <h1 class="title2">TITLE</h1>
      <div style="height:20px">&nbsp;</div>
      <div style="text-align: right">
      <p style="font-size:15px;">기사입력 2018-07-17</p></div>
      <hr max-width="1232px" style="border-top: 1px solid #000; margin-top: 10px">
      <div style="font-size: 20px; min-height: 400px">
      content
      </div>
      <hr max-width="1232px" style="border-top: 1px solid #000; margin-top: 10px">
      <h1 class="title2" style="font-size:20px">COMMENTS</h1>
      <div style="height:20px">&nbsp;</div>
      
      <?php
        $newsID = $_GET["newsID"];
        echo"<script>alert($newsID);</script>"
      ?>
    </div>
  </body>
</html>
