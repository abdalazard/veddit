CREATE DATABASE Veddit;
USE Veddit;

CREATE TABLE Users (

    id int primary key auto_increment,
    name varchar(15) unique,
    email varchar(50) unique,
    password varchar(32),
    profile enum("1", "2")
);

insert into Users values(null,"ADM","abdalazard@gmail.com",md5("Abdalazard.10"),"1");

CREATE TABLE Groups (
    id int primary key auto_increment,
    theme varchar(20),
    creator_id INT(3),
    FOREIGN KEY (creator_id) REFERENCES Users(id)
);

CREATE TABLE Topics (
    id int primary key auto_increment,
    user_id int,
    group_id int,
    title varchar(255) NOT NULL,
    content varchar(255) NOT NULL,
    FOREIGN KEY (group_id) REFERENCES Groups(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE Comments (
    id int primary key auto_increment,
    content varchar(140),
    user_id int,
    topic_id int,
    FOREIGN KEY (topic_id) REFERENCES Topics(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)
);