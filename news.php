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
          <div style="overflow:auto; max-height:350px;">
          <table class="table" style="margin-bottom:0">
            <thead>
              <col width="5%">
              <col>
              <col width="15%">
              <col width="9%">
            </thead>
          <tbody>
            <?php
              $conn = mysqli_connect('localhost','root','taeho','database');
              $query ="select * from news order by date desc";
              $result = mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($result)){
                echo "<tr onclick=\"location.href='news_view.php?newsID=".$row['newsID']."'\" onMouseOver=\"this.style.backgroundColor='#e6e6e6';\" onMouseOut=\"this.style.backgroundColor=''\"; style=\" cursor: pointer;\">
                  <th scope=\"row\">".$row['newsID']."</th>
                  <td>".$row['title']."</td>
                  <td>".$row['authorID']."</td>
                  <td>".$row['hits']."</td>
                  </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
  </body>
</html>
