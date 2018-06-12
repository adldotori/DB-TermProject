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

      <div style="height:150px">&nbsp;</div>
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><b>Top5 추천기사목록</b></div>

        <!-- Table -->
        <table class="table">
          <thead>
          <tr>
            <th width="10">#</th>
            <th width="300">기사제목</th>
            <th width="100">작성자</th>
            <th width="100">작성일</th>
            <th width="50">조회수</th>
          </tr>
          </thead>
          <tbody>
            <?php
              $conn = mysqli_connect('localhost','root','taeho','database');
              $query ="select * from hits_info order by all_hits desc";
              $result = mysqli_query($conn,$query);
              $i=5;
              while(($row = mysqli_fetch_array($result))&&$i!=0){
                $i--;
                echo "<tr onclick=\"location.href='news_view.php?newsID=".$row['newsID']."'\" onMouseOver=\"this.style.backgroundColor='#e6e6e6';\" onMouseOut=\"this.style.backgroundColor=''\"; style=\" cursor: pointer;\">
                  <th scope=\"row\">".(5-$i)."</th>
                  <td>".$row['title']."</td>
                  <td>".$row['authorID']."</td>
                  <td>".$row['date']."</td>
                  <td>".$row['all_hits']."</td>
                  </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
