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
    <a href="index.php">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> home
    </button></a>
    <div style="heigth:200px">&nbsp;</div>
    <h1 class="title2">NEWS</h1>
    <div style="height:20px">&nbsp;</div>
      <div class="panel panel-default" style="margin-bottom: 0px; max-width: 1232px;">
        <!-- Default panel contents -->
        <div class="panel-heading"><b>전체기사</b></div>

        <!-- Table -->
        <table class="table">
          <thead>
          <tr>
            <th width="5%">#</th>
            <th>기사제목</th>
            <th width="15%">작성자</th>
            <th width="10%">조회수</th>
          </tr>
          </thead>
          </table>
          <div style="overflow:auto; height:70px; ">
          <table class="table">
            <thead>
              <th width="5%"></th>
              <th scope="col"></th>
              <th width="15%"></th>
              <th width="9%"></th>
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
  </body>
</html>
test
