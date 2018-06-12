news(title,contents,authorID,newsID,date,hits)
primary key - title
unique - title, contents,newsID
not null - title,contents,authorID

newsID auto increment로 자동으로 증가
date 미입력시 현재 시간 입력
hits 미입력시 0


comment(comment#,contents,writer,articleTitle)
primary key - articleTitle,comment#
unique - contents, articleTitle
not null - all


index 페이지에서, (두번째 버튼)
index3 / 일반회원 로그인 : '내가 쓴 댓글' (member_comments.php)
index3 / 미승인기자 로그인 : '내가 쓴 댓글' (일반회원과 동일)
index2 / 승인기자 로그인 : '내가 쓴 기사'(reporter_news.php) 기사 작성 (news_post.php)
+) 첫번째 댓글은 항상 '로그아웃' (logout.php)

+) news_view.php에서 댓글 작성할 경우, comment_submit.php로 넘어감.
index1 / admin페이지

member_comments.php 쿼리문 수정 필요 (51번 라인)
reporter_news.php 쿼리문 수정 필요 (57번 라인)

create view hits_info as select title,authorID,newsID,date,(hits+10hits+20hits+`30-40hits`+`50-hits`) as all_hits,(0.2*hits+0.5*10hits+0.3*20hits+0.3*`30-40hits`+0.3*`50-hits`) as weight_hits10,(0.2*hits+0.3*10hits+0.5*20hits+0.3*`30-40hits`+0.3*`50-hits`) as weight_hits20,(0.2*hits+0.3*10hits+0.3*20hits+0.5*`30-40hits`+0.3*`50-hits`) as weight_hits30_40,(0.2*hits+0.3*10hits+0.3*20hits+0.3*`30-40hits`+0.5*`50-hits`) as weight_hits50_ from news;
view : hits_info(title,authorID,newsID,date,all_hits,weight_hits10,weight_hits20,weight_hits30_40,weight_hits50_)
