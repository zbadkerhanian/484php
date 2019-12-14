<?php
require 'db.php';

 echo "in comments man";
	if(isset($_POST['submitComment'])){

	    $post_id = $_POST['post_id'];
		$user_name = $_POST['user_name'];
		$date = $_POST['date'];
		$content = $_POST['content'];

		$sql = "INSERT INTO zarehsforum.comments (post_id, user_name, date, content) 
		VALUES ('$post_id', '$user_name', '$date', '$content');";

		$result = $mysqli->query($sql);

		header("location: profile.php");


	}
