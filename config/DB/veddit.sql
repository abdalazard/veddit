CREATE DATABASE Veddit;
USE Veddit;

CREATE TABLE Users (

    id int primary key auto_increment,
    name varchar(15) unique,
    email varchar(50) unique,
    password varchar(32),
    profile enum("1", "2"),
);

insert into Users values(null,"ADM","abdalazard@gmail.com",md5("123"),"1");

CREATE TABLE Groups (
    id int primary key auto_increment,
    theme_id int,
    creator_id int,
    FOREIGN KEY (creator_id) REFERENCES Users(id),
);

INSERT INTO Groups VALUES(null, 1, 1);

CREATE TABLE Topics (
    id int primary key auto_increment,
    user_id int,
    group_id int,
    title varchar(255) NOT NULL,
    content varchar(255) NOT NULL,
    likes INT(3),
    dislike INT(3),
    tagName varchar(20),
    FOREIGN KEY (group_id) REFERENCES Groups(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

INSERT INTO Topics VALUES ( null, 1, 1, "Titulo teste", "blablalbalba", 1, 2, "teste");

CREATE TABLE Comments (
    id int primary key auto_increment,
    content varchar(140),
    user_id int,
    topic_id int,
    FOREIGN KEY (topic_id) REFERENCES Topics(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)

);

INSERT INTO Comments VALUES ( null, "teste blabla", 1, 1);