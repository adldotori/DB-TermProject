<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스_내 댓글</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body {padding: 30px 30px 30px 30px}
    </style>
  </head>
  <body>
    <a href="
    <?php
    $cookie = explode(':',$_COOKIE["user_info"]);
    $authority = $cookie[1];
    if($authority=='1') echo "index1.php";
    elseif($authority=='2') echo "index2.php";
    elseif($authority=='3' || $authority=='4') echo "index3.php";
    else echo "index.php";
     ?>
    ">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> home
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <h1 class="title2">내가 쓴 댓글</h1>
    <div style="height:20px">&nbsp;</div>
      <div class="panel panel-default" style="margin-bottom: 0px; max-width: 1232px;">
        <!-- Default panel contents -->
        <div class="panel-heading"><b>댓글 목록</b></div>

        <!-- Table -->
        <table class="table">
          <thead>
          <tr>
            <th width="6%">#</th>
            <th>기사제목</th>
            <th width="47%">댓글내용</th>
          </tr>
          </thead>
          </table>
          <div style="overflow:auto; max-height:350px;">
          <table class="table" style="margin-bottom:0">
            <thead>
              <col width="6%">
              <col>
              <col width="47%">
            </thead>
          <tbody>
            <?php
              $cookie = explode(':',$_COOKIE["user_info"]);
              $nickname = $cookie[0];
              $authority = $cookie[1];
              if($authority=='1') $authStr = '관리자';
              elseif($authority=='2') $authStr = '기자(승인됨)';
              elseif($authority=='3') $authStr = '기자(미승인)';
              else $authStr = '일반회원';
              if($cookie[0])
                $nickname = $cookie[0];
              echo "<div style=\"position:fixed; right:20px; top:20px;\">
                $nickname | $authStr
              </div>";
              $conn = mysqli_connect('localhost','root','taeho','newsDB');
              $query ="select * from comment where writer='$nickname'";
              $result = mysqli_query($conn,$query);
              $i =0;
              while($row = mysqli_fetch_array($result)){
               	$query2 ="select * from news where newsID=".$row['newsID'];
                $result2 = mysqli_fetch_array(mysqli_query($conn,$query2));
                $newsTitle = $result2['title'];
                $i++;
		if($result2['category']=='정치')
                  $color = "#b000b2";
                elseif($result2['category']=='경제')
                  $color = "#ff2a60";
                elseif($result2['category']=='문화')
                  $color = "#009c49";
                elseif($result2['category']=='사회')
                  $color = "#2c00cc";
                elseif($result2['category']=='스포츠')
                  $color = "#2f79b2";
                else
                  $color = "#0000ff";

                echo "<tr onclick=\"location.href='news_view.php?newsID=".$result2['newsID']."'\" onMouseOver=\"this.style.backgroundColor='#e6e6e6';\" onMouseOut=\"this.style.backgroundColor=''\"; style=\" cursor: pointer;\">
                  <th scope=\"row\">".$i."</th>
                  <td><span style=\"font-size:11pt;font-weight:bold;color:".$color."\">&lt;".$result2['category']."&gt;</span>".$newsTitle."</td>
                  <td>".$row['contents']."</td>
                  </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
  </body>
</html>
