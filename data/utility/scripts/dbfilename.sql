drop table IF EXISTS authorNumber;
drop table IF EXISTS authorRecord;
CREATE TABLE authorNumber ( date_val VARCHAR(10) NOT NULL , number INT(10), PRIMARY KEY (date_val) );
CREATE TABLE authorRecord ( uniqueId int(10) NOT NULL AUTO_INCREMENT, date_val VARCHAR(10), name VARCHAR(50),  numberOfQuotes int(10), author_id VARCHAR(50) NOT NULL, PRIMARY KEY (uniqueId,author_id) );
insert into authorNumber values('0403',1);
insert into authorRecord (date_val,name,numberOfQuotes,author_id) values('0403','George Herbert',2,'George_Herbert');
