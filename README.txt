news(title,contents,authorID,newsID,date,hits)
primary key - title
unique - title, contents,newsID
not null - title,contents,authorID

newsID auto increment로 자동으로 증가
date 미입력시 현재 시간 입력
hits 미입력시 0

index 페이지에서, (두번째 버튼)
index3 / 일반회원 로그인 : '내가 쓴 댓글' (member_comments.php)
index3 / 미승인기자 로그인 : '내가 쓴 댓글' (일반회원과 동일)
index2 / 승인기자 로그인 : '내가 쓴 기사'(reporter_news.php) 기사 작성 (news_post.php)
+) 첫번째 댓글은 항상 '로그아웃' (logout.php)

+) news_view.php에서 댓글 작성할 경우, comment_submit.php로 넘어감.
index1 / admin페이지
