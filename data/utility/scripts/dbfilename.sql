drop table authorNumber;
drop table authorRecord;
CREATE TABLE authorNumber ( date VARCHAR(10) NOT NULL , number INT(10), PRIMARY KEY (date) );
CREATE TABLE authorRecord ( Date VARCHAR(10), name VARCHAR(50),  numberOfQuotes int(10), author_id VARCHAR(50) NOT NULL, PRIMARY KEY (author_id) );
insert into authorNumber values('0403',1);
insert into authorRecord values('0403','George Herbert',2,'George_Herbert');
