<?php 

//connection variables
$host = 'localhost';
$user = 'root';
$password = '';

//create mysql connection
$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

//create the database
if ( !$mysqli->query('CREATE DATABASE zarehsforum') ) {
    printf("Errormessage: %s\n", $mysqli->error);
}

//create users table with all the fields
$mysqli->query('
CREATE TABLE zarehsForum.users 
(
    `user_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `user_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` TINYINT(1) NOT NULL DEFAULT 0
);') or die($mysqli->error);

//create posts table 
$mysqli->query('
CREATE TABLE zarehsforum.posts 
(
    `post_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_name` VARCHAR(32) NOT NULL,
    `date` datetime NOT NULL,
    `content` VARCHAR(255) NOT NULL
);') or die($mysqli->error);


$mysqli->query('
CREATE TABLE `zarehsforum`.`comments` 
(
    `comment_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `post_id` INT NOT NULL,
    `user_name` VARCHAR(32) NOT NULL,
    `date` datetime NOT NULL,
    `content` VARCHAR(255) NOT NULL
);') or die($mysqli->error);

?>