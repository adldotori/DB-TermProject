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
          <!--로그인 되어있을 때, 기자일때, admin일때, btn들 내용 다르게-->
          <a href="login.php">
          <button type="button" class="btn btn-default">로그인</button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="register.php">
          <button type="button" class="btn btn-default">회원가입</button></a>
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
              setcookie("user_info","",time()+3600*24,"/");
              $conn = mysqli_connect('localhost','root','taeho','database');
              $query ="select * from hits_info order by all_hits desc";
              $result = mysqli_query($conn,$query);
              $i=5;
              while(($row = mysqli_fetch_array($result))&&$i!=0){
                $i--;
                if($i==4) {$big =  "style=\"font-size:18px;font-weight:bold;color:violet;"; $leftsort="text-align:left;"; $centersort="text-align:center;"; $rightsort="text-align:right;";}
                else {$big=""; $leftsort="style=\"text-align:left;"; $centersort="style=\"text-align:center;"; $rightsort="style=\"text-align:right;";}
                echo "<tr onclick=\"location.href='news_view.php?newsID=".$row['newsID']."'\" onMouseOver=\"this.style.backgroundColor='#e6e6e6';\" onMouseOut=\"this.style.backgroundColor=''\"; style=\" cursor: pointer;\">
                  <th scope=\"row\" $big $leftsort\">".(5-$i)."</th>
                  <td $big $leftsort\">".$row['title']."</td>
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
