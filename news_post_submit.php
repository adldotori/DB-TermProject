<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>나딱뉴스_기사작성</title>
  </head>
  <body>
<?php
  $title = $_POST["title"];
  $content = $_POST["content"];
  $cookie = explode(':',$_COOKIE["user_info"]);
  $authorID = $cookie[0];
  $root = $_SERVER['DOCUMENT_ROOT'];
  do {
    $i=1;
    $contentTitle = "news".($result[0]+$i).".txt";
    $path = $root."/news/".$contentTitle;
    $i++;
  }while(is_file($path));
  $fp = fopen($root."/news/".$contentTitle,"w");
  fwrite($fp,$content);
  fclose($fp);
  $conn = mysqli_connect('localhost','root','taeho','database');
  $query2 ="insert into news(title,contents,authorID) values('$title','$contentTitle','$authorID')";
  mysqli_query($conn,$query2);
  echo"<script>location.href='";
  $cookie = explode(':',$_COOKIE["user_info"]);
  $authority = $cookie[1];
  if($authority=='1') echo "index1.php";
  elseif($authority=='2') echo "index2.php";
  elseif($authority=='3' || $authority=='4') echo "index3.php";
  else echo "index.php";
   echo"'</script>";
?>
  </body>
</html>
