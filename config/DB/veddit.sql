CREATE DATABASE Veddit;
USE Veddit;

CREATE TABLE Users (

id int primary key auto_increment,
name varchar(15) unique,
email varchar(50) unique,
password varchar(32),
profile enum("1", "2")
);

insert into Users values(null,"ADM","abdalazard@gmail.com",md5("123"),"1");

CREATE TABLE Posts (

id int primary key auto_increment,
user_id int,
content varchar(255),
likes INT(3),
dislike INT(3),
tagName varchar(20)
);


INSERT INTO Posts VALUES (NULL, 1, "Teste de post", 2, 1, 'Meme');