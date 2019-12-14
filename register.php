<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['user_name'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];



$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$user_name = $mysqli->escape_string($_POST['username']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string(md5(rand(0,1000)));


$result = $mysqli->query("SELECT * FROM users WHERE email = '$email';");

if($result->num_rows > 0){

	$_SESSION['message'] = 'User with this email already exists!';
	header("location: error.php");

}
else{

	$sql = "INSERT INTO users (first_name, last_name, user_name, email, password, hash) VALUES ('$first_name', '$last_name', '$user_name', '$email', '$password', '$hash');";


	if($mysqli->query($sql)){

	    header("location: profile.php"); 

	}

	else{

		$_SESSION['message'] = 'Registration failed!';
		header("location: error.php");
	}
}