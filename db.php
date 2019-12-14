<?php
/* Database connection settings */

$host = 'localhost';
$user = 'root';
$password = '176235';
$dbName = "zarehsforum";

$mysqli = mysqli_connect($host, $user, $password, $dbName);

if(!$mysqli){
	die("Connection failed: " . mysqli_connect_error());
}