DROP DATABASE IF EXISTS finaldb;

CREATE DATABASE finaldb;

USE finaldb;

CREATE TABLE auth
(
    userid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(60) NOT NULL,
    password VARCHAR(60) NOT NULL,
    firstName VARCHAR(60) NOT NULL,
    lastName VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    phone VARCHAR(60) NOT NULL
);

INSERT INTO auth (username,password,firstName,lastName,email,phone) VALUES ('thadhouse','1234','thad','house', 'test@csun.edu', '5550123');
INSERT INTO auth (username,password,firstName,lastName,email,phone) VALUES ('zbadkerhanian','abcd','zareh','badkerhanian', 'test2@csun.edu', '5550124');
INSERT INTO auth (username,password,firstName,lastName,email,phone) VALUES ('tbabak','=-09','tania ','babakhanlou', 'test3@csun.edu', '5550125');
