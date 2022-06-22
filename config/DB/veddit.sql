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
