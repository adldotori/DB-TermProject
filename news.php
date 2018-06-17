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
    <?php
    if($_COOKIE["user_info"]){
      $cookie = explode(':',$_COOKIE["user_info"]);
      $authority = $cookie[1];
      $nickname = $cookie[0];
      if($authority=='1') $authStr = '관리자';
      elseif($authority=='2') $authStr = '기자(승인됨)';
      elseif($authority=='3') $authStr = '기자(미승인)';
      else $authStr = '일반회원';
      $stateStr = $nickname." | ".$authStr;
    }
    else{
      $stateStr = '<a href=login.php>로그인</a>';
    }
    echo "<div style=\"position:fixed; right:20px; top:20px;\">".$stateStr."</div>";
    ?>
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
            <th width="5%" style="text-align:left">#</th>
            <th width="62%" style="text-align:left">기사제목</th>
            <th width="10%" style="text-align:center">작성자</th>
            <th width="15%" style="text-align:center">작성일</th>
            <th width="8%" style="text-align:right">조회수</th>
          </tr>
          </thead>
          </table>
          <div style="overflow:auto; max-height:350px;">
          <table class="table" style="margin-bottom:0">
            <thead>
              <col width="5%">
              <col width="62%">
              <col width="10%">
              <col width="15%">
              <col width="8%">
            </thead>
          <tbody>
            <?php
              $nickname = 'admin';
              $cookie = explode(':',$_COOKIE['user_info']);
              if($cookie[0])
                $nickname = $cookie[0];
              $conn = mysqli_connect('localhost','root','taeho','database');
              $query ="select * from hits_info where nickname='$nickname' order by date desc";
              $result = mysqli_query($conn,$query);
              $i =0;
              while($row = mysqli_fetch_array($result)){
                $i++;
                echo "<tr onclick=\"location.href='news_view.php?newsID=".$row['newsID']."'\" onMouseOver=\"this.style.backgroundColor='#e6e6e6';\" onMouseOut=\"this.style.backgroundColor=''\"; style=\" cursor: pointer;\">
                  <th scope=\"row\" style=\"text-align:left\">".$i."</th>
                  <td style=\"text-align:left\">"."<".$row['category'].">".$row['title']."</td>
                  <td style=\"text-align:center\">".$row['authorID']."</td>
                  <td style=\"text-align:center\">".$row['date']."</td>
                  <td style=\"text-align:right\">".$row['all_hits']."</td>
                  </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
  </body>
</html>
