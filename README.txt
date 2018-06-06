news(title,contents,authorID,newsID,date,hits)
primary key - title
unique - title, contents,newsID
not null - title,contents,authorID

newsID auto increment로 자동으로 증가
date 미입력시 현재 시간 입력
hits 미입력시 0
