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
          <button type="button" class="btn btn-default">뉴스보기</button></a>
        </div>
      </div>
      <div style="height:200px">&nbsp;</div>
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><b>Top5 기사목록</b></div>

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
            <!-- php로 다시 구현할 필요있음 -->
            <tr onclick="location.href='news_view.php?newsID=1'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr onclick="location.href='news_view.php?newsID=2'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr onclick="location.href='news_view.php?newsID=3'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            <tr onclick="location.href='news_view.php?newsID=4'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">4</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            <tr onclick="location.href='news_view.php?newsID=5'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">5</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>