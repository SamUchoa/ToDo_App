CREATE DATABASE IF NOT EXISTS ToDo_App 
CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE ToDo_App;

CREATE TABLE users(
	userId int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userName varchar(75) NOT NULL ,
    userEmail varchar(75) NOT NULL,
    userPassword varchar(255) NOT NULL,
    CONSTRAINT person UNIQUE (userName, userEmail)
)CHARSET utf8mb4 ENGINE INNODB;

CREATE TABLE tasks(
	taskId int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userId int(11) NOT NULL,
    taskTitle varchar(75) NOT NULL,
    taskContent varchar(500),
    taskCreation timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    taskLastEdit timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES users(userId) ON DELETE CASCADE
)CHARSET utf8mb4 ENGINE INNODB;