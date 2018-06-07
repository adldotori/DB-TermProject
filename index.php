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
      <!-- 일반회원 또는 미승인기자 로그인 시
      <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
          <a href="logout.php">
          <button type="button" class="btn btn-default">로그아웃</button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="member_comments.php">
          <button type="button" class="btn btn-default">내가 쓴 댓글</button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="news.php">
          <button type="button" class="btn btn-default">전체뉴스보기</button></a>
        </div>
      </div>
      -->

      <!-- 승인기자 로그인 시
      <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
          <a href="logout.php">
          <button type="button" class="btn btn-default">로그아웃</button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="reporter_news.php">
          <button type="button" class="btn btn-default">내가 쓴 기사</button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="news_post.php">
          <button type="button" class="btn btn-default">기사작성</button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="news.php">
          <button type="button" class="btn btn-default">전체뉴스보기</button></a>
        </div>
      </div>
      -->
      <div style="height:200px">&nbsp;</div>
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
            <th width="50">조회수</th>
          </tr>
          </thead>
          <tbody>
            <?php
              $conn = mysqli_connect('localhost','root','taeho','database');
              $query ="select * from news order by hits desc";
              $result = mysqli_query($conn,$query);
              // result의 tuple 개수가 5보다 작을때 for문 조건 변경필요
              // (news.php와 동일하게 하면 될 듯, 대신 5개 출력하면 break 하도록!)
              for($i=0;$i<5;$i++){
                $row = mysqli_fetch_array($result);
                echo "<tr onclick=\"location.href='news_view.php?newsID=".$row['newsID']."'\" onMouseOver=\"this.style.backgroundColor='#e6e6e6';\" onMouseOut=\"this.style.backgroundColor=''\"; style=\" cursor: pointer;\">
                  <th scope=\"row\">".$row['newsID']."</th>
                  <td>".$row['title']."</td>
                  <td>".$row['authorID']."</td>
                  <td>".($row['10hits']+$row['20hits']+$row['30-40hits']+$row['50-hits'])."</td>
                  </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
