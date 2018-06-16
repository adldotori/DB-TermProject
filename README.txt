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

workbench 데이터 백업 및 복원하는 방법
http://emflant.tistory.com/22

20180615
뉴스 작성에서는 category (정치, 경제, 사회, 문화)를 설정할 수 있도록 해놓았음
이걸 news 테이블에 새로운 column을 추가하기 보다는 아래와 같은 방식이 어떨지.. 생각해보았음
방식 : 제목앞에 '<category>'를 붙인다.
예를 들자면, "<정치>김태서군의 발언, 도마위에 올라"
이런식으로 하면 디비 수정은 필요없으면서 다른 연산도 다 가능할 듯

+) member_comments.php의 쿼리문 수정필요 ㅠ

20180615 18:20
news_delete_submit은 get으로 쉽게 (하지만 보안은 엉터리) 해결
edit에서는 원래 내용 뜰 수 있음. 이때 db에서 원래 제목이랑 내용 받아오는 부분은 news_view.php와 동일하게 구성될듯
원래 카테고리를 알아내기 위해서는 title에서 파싱 필요할 것으로 보임 (<정치>성조의뉴스1 <- 이런 식으로 title을 저장하는 방식을 가정했을 때의 얘기)

+) 뉴스 작성시 전달된 category 정보를 title에 붙여서 db에 저장해야 되는데 아직 구현 안된듯 (news_post_submit.php)
