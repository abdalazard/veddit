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

insert into Users values(null,"ADM","abdalazard@gmail.com",md5("123"),"1");

CREATE TABLE `Themes` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`theme` VARCHAR(50) NOT NULL,
	`creator_id` INT NOT NULL,
	INDEX `id` (`id`),
	INDEX `creator_id` (`creator_id`),
	CONSTRAINT `FK_creatorId` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE `Topics` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    INDEX `id` (`id`),
	`title` VARCHAR(50) NOT NULL,
    `content` VARCHAR(50) NOT NULL,
	`creator_id` INT NOT NULL,
    `theme_id` INT NULL,
	INDEX `creator_id` (`creator_id`),
	INDEX `theme_id` (`theme_id`),
	CONSTRAINT `FK_creatorTopicId` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
    CONSTRAINT `FK_themeId` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION


);

CREATE TABLE `Comments` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	INDEX `id` (`id`),
    `comment` VARCHAR(50) NOT NULL,
	`creator_id` INT NOT NULL,
    `topic_id` INT NOT NULL,
	INDEX `creator_id` (`creator_id`),
	INDEX `topic_id` (`topic_id`),
	CONSTRAINT `FK_creatorCommentId` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
    CONSTRAINT `FK_topicId` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION

);
