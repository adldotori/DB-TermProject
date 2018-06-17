<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스_기사수정</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {padding: 30px 30px 30px 30px}
    </style>
  </head>
  <body>
    <?php
    echo"<a href=\"";
    $cookie = explode(':',$_COOKIE["user_info"]);
    $authority = $cookie[1];
    if($authority=='1') echo "index1.php";
    elseif($authority=='2') echo "index2.php";
    elseif($authority=='3' || $authority=='4') echo "index3.php";
    else echo "index.php";
    echo"\">";
    $newsID = $_GET['newsID'];
    $conn = mysqli_connect('localhost','root','taeho','database');
    $query1 ="select * from news where newsID=$newsID";
    $row = mysqli_fetch_array(mysqli_query($conn,$query1));
    $root = $_SERVER['DOCUMENT_ROOT'];
    $filename = $root."/news/".$row['contents'];
    $fp = fopen($filename,'r');
    $contents = fread($fp,filesize($filename));
    fclose($fp);
    ?>
      <button type="button" class="btn btn-default btn-lg">
       <span class="glyphicon glyphicon-home" aria-hidden="true"></span> home
     </button></a>
     <div style="heigth:200px">&nbsp;</div>
     <h1 class="title2">기사수정</h1>
     <div style="heigth:200px">&nbsp;</div>
     <?php echo"<form method=\"post\" action=\"./news_edit_submit.php?newsID=".$newsID."\">";?>
       <div class="form-group">
         <label for="newsTitle">기사제목</label>
         <input type="text" class="form-control" name="title" placeholder="제목을 입력하세요" value="<?=$row['title']?>">
       </div>
<<<<<<< HEAD
       <div class="form-group">
         <label for="newsTitle">기사내용</label>
         <textarea type="text" class="form-control" name="content" rows="50" placeholder="내용을 입력하세요" style="height:500px"><?=$contents?></textarea>
=======
       <div class=\"form-group\">
         <label for=\"newsTitle\">기사내용</label>
         <textarea type=\"text\" class=\"form-control\" name=\"content\" rows=\"50\" placeholder=\"내용을 입력하세요\" style=\"height:500px\">".$ori_content."</textarea>
>>>>>>> origin/yonghee
       </div>
       <div class="panel panel-default" style="width:390px;">
         <div class="panel-heading">기사구분</div>
         <div class="panel-body">
           <?php
           echo"<label class=\"radio-inline\"><input type=\"radio\" name=\"category\" value=\"정치\"";
           if ($row['category'] == "정치")echo "checked = \"checked\"";
           echo ">정치</label>
           <label class=\"radio-inline\" style=\"margin:0 0 0 20px\"><input type=\"radio\" name=\"category\" value=\"경제\"";
           if ($row['category'] == "경제")echo "checked = \"checked\"";
           echo ">경제</label>
           <label class=\"radio-inline\" style=\"margin:0 0 0 20px\"><input type=\"radio\" name=\"category\" value=\"사회\"";
           if ($row['category'] == "사회")echo "checked = \"checked\"";
           echo ">사회</label>
           <label class=\"radio-inline\" style=\"margin:0 0 0 20px\"><input type=\"radio\" name=\"category\" value=\"문화\"";
           if ($row['category'] == "문화")echo "checked = \"checked\"";
           echo ">문화</label>
           <label class=\"radio-inline\" style=\"margin:0 0 0 20px\"><input type=\"radio\" name=\"category\" value=\"스포츠\"";
           if ($row['category'] == "스포츠")echo "checked = \"checked\"";
           echo ">스포츠</label>";
           ?>
         </div>
       </div>
       <button type="submit" class="btn btn-default btn-lg">
         <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ok
       </button>
     </form>
  </body>
</html>
