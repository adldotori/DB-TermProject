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
  </head>
  <body>
    <a href="index1.php">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> home
    </button></a>
    <?php
      $cookie = explode(':',$_COOKIE['user_info']);
      $nickname = $cookie[0];
      echo "<div style=\"position:fixed; right:20px; top:20px;\">
        $nickname | 관리자
      </div>";
    ?>
    <div style="heigth:200px">&nbsp;</div>
    <div>
      <div style="float: left; margin-right: 300px">
        <h1 class="title2">미승인 기자목록</h1>
        <div style="heigth:200px">&nbsp;</div>
        <div class="mybox">
        <label>   id | nickname</label></div>
        <?php
          echo "<form method=\"post\" action=\"admin_submit.php\">
          ";
          $conn = mysqli_connect('localhost','root','taeho','newsDB');
          $query ="select * from member where authority=3";
          $result = mysqli_query($conn,$query);
          while($row = mysqli_fetch_array($result)){
            echo "<div class=\"checkbox mybox\"><label><input type=\"checkbox\" name=\"id[]\"
            value=\"".$row['ID']."\">".$row['ID']." | ".$row['nickname']."</label></div>";
        };
          echo "<button type=\"submit\" class=\"btn btn-default btn-lg\">
            <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span> 승인
          </button>
        </form>";
        ?>
      </div>
      <div style="float:left">
        <h1 class="title2">모든 회원목록</h1>
        <div style="heigth:200px">&nbsp;</div>
        <div class="mybox">
        <label>   id | nickname</label></div>
        <?php
          echo "<form method=\"post\" action=\"admin_submit2.php\">
          ";
          $conn = mysqli_connect('localhost','root','taeho','newsDB');
          $query ="select * from member where authority!=1";
          $result = mysqli_query($conn,$query);
          while($row = mysqli_fetch_array($result)){
            echo "<div class=\"checkbox mybox\"><label><input type=\"checkbox\" name=\"id[]\"
            value=\"".$row['ID']."\">".$row['ID']." | ".$row['nickname']."</label></div>";
        };
          echo "<button type=\"submit\" class=\"btn btn-default btn-lg\">
            <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span> 회원삭제
          </button>
        </form>";
        ?>
      </div>
    </div>
  </body>
</html>
