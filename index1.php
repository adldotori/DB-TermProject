  <!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="blank">&nbsp;</div>
    <div id="indexmenu">
      <h1 class="title"><b>나딱뉴스에 오신 것을 환영합니다.</b></h1>      &nbsp;

      <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
          <a href="logout.php">
          <button type="button" class="btn btn-default">로그아웃</button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="admin.php">
          <button type="button" class="btn btn-default">관리</button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="news.php">
          <button type="button" class="btn btn-default">전체뉴스보기</button></a>
        </div>
      </div>

      <div style="height:70px">&nbsp;</div>
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><b>Top5 추천기사</b></div>

        <!-- Table -->
        <table class="table">
          <thead>
          <tr>
            <th width=5% style="text-align:left;">#</th>
            <th width=48% style="text-align:left;">기사제목</th>
            <th width=15% style="text-align:center;">작성자</th>
            <th width=25% style="text-align:center;">작성일</th>
            <th width=7% style="text-align:right;">조회수</th>
          </tr>
          </thead>
          <tbody>
            <?php
              $cookie = explode(':',$_COOKIE['user_info']);
              $age = $cookie[2];
              $nickname = $cookie[0];
              echo "<div style=\"position:fixed; right:20px; top:20px;\">
                $nickname | 관리자
              </div>";
              $cookie = explode(':',$_COOKIE['user_info']);
              $me = $cookie[0];
              $conn = mysqli_connect('localhost','root','taeho','newsDB');
              $query ="select * from hits_info where nickname='admin' order by all_hits desc";
              $result = mysqli_query($conn,$query);
              $i=5;
              while(($row = mysqli_fetch_array($result))&&$i!=0){
                if($row['category']=='정치')
                  $color = "#b000b2";
                elseif($row['category']=='경제')
                  $color = "#ff2a60";
                elseif($row['category']=='문화')
                  $color = "#009c49";
                elseif($row['category']=='사회')
                  $color = "#2c00cc";
                elseif($row['category']=='스포츠')
                  $color = "#2f79b2";
                else
                  $color = "#0000ff";
		$i--;
                if($i==4) {$big =  "style=\"font-size:18px;font-weight:bold;color:#c65ff9;"; $leftsort="text-align:left;"; $centersort="text-align:center;"; $rightsort="text-align:right;";}
                else {$big=""; $leftsort="style=\"text-align:left;"; $centersort="style=\"text-align:center;"; $rightsort="style=\"text-align:right;";}
                echo "<tr onclick=\"location.href='news_view.php?newsID=".$row['newsID']."'\" onMouseOver=\"this.style.backgroundColor='#e6e6e6';\" onMouseOut=\"this.style.backgroundColor=''\"; style=\" cursor: pointer;\">
                  <th scope=\"row\" $big $leftsort\">".(5-$i)."</th>
                  <td $big $leftsort\"><span style=\"font-size:11pt;font-weight:bold;color:".$color."\">&lt;".$row['category']."&gt;</span>".$row['title']."</td>
                  <td $big $centersort\">".$row['authorID']."</td>
                  <td $big $centersort\">".$row['date']."</td>
                  <td $big $rightsort\">".$row['all_hits']."</td>
                  </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
