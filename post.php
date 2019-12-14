<?php
require 'db.php';


	if(isset($_POST['submitPost'])){

		$user_name = $_POST['user_name'];
		$date = $_POST['date'];
		$content = $_POST['content'];

		$sql = "INSERT INTO zarehsforum.posts (user_name, date, content) 
		VALUES ('$user_name', '$date', '$content');";

		$result = $mysqli->query($sql);

		header("location: profile.php");


	}
