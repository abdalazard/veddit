CREATE DATABASE Veddit;
-- USE Veddit;

CREATE TABLE `Users` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    INDEX `id` (`id`),
    `name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    `profile` enum("1", "0") NOT NULL
);

insert into Users values(null,"ADM","abdalazard@gmail.com",md5("Abdalazard.10"),"1");

CREATE TABLE `Groups` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`theme` VARCHAR(50) NOT NULL,
	`creator_id` INT,
	INDEX `id` (`id`),
	INDEX `creator_id` (`creator_id`),
	CONSTRAINT `FK_creatorId` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE `Topics` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    INDEX `id` (`id`),
	`title` VARCHAR(50) NOT NULL,
    `content` VARCHAR(50) NOT NULL,
	`creator_id` INT,
    `group_id` INT,
	INDEX `creator_id` (`creator_id`),
	CONSTRAINT `FK_creatorTopicId` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
    CONSTRAINT `FK_groupId` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION

);

CREATE TABLE `Comments` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    INDEX `id` (`id`),
    `content` VARCHAR(50) NOT NULL,
	`creator_id` INT,
    `topic_id` INT,
	INDEX `creator_id` (`creator_id`),
	CONSTRAINT `FK_creatorCommentId` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
    CONSTRAINT `FK_topicId` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION

);
