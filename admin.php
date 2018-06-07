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
          </table>
          <div style="overflow:auto; max-height:350px;">
          <table class="table" style="margin-bottom:0">
            <thead>
              <col width="5%">
              <col>
              <col width="15%">
              <col width="9%">
            </thead>
          <tbody>
            <!-- php로 다시 구현할 필요있음 -->
            <form method="post">
            <tr onclick="location.href='admin_submit.php'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr></form>
            <tr onclick="location.href='admin_submit.php'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr onclick="location.href='admin_submit.php'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            <tr onclick="location.href='admin_submit.php'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
              <th scope="row">4</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            <tr onclick="location.href='admin_submit.php'" onMouseOver="this.style.backgroundColor='#e6e6e6';" onMouseOut="this.style.backgroundColor=''"; style=" cursor: pointer;">
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
