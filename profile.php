<?php
/* Displays user information and some useful messages */
session_start();
date_default_timezone_set('America/Los_Angeles');
require 'db.php';
require 'post.php';


// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {

    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $user_name = $_SESSION['user_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];

}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>Welcome! Make a Post!</h1>
          
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?php echo $user_name; ?></p>


          <?php

          echo "<form method = 'POST' action='post.php'>
            <input type = 'hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'>
             <input type = 'hidden' name = 'user_name' value = '$user_name'>
            <textarea name = 'content' required></textarea><br>
            <button type = 'submit' name = 'submitPost' />Submit Post</button><br><br>
            
           
          </form>";


           // date('m-d-Y g:i:s') date('Y-m-d H:i:s')

          $sql = "SELECT post_id, user_name, date, content FROM zarehsforum.posts ORDER BY post_id DESC;";
          $result = $mysqli->query($sql);

          if($result->num_rows > 0){
              while($row = mysqli_fetch_assoc($result)){

                $post_id = $row['post_id'];
                 echo "<div id= 'postHeading' style = 'color: white; padding: 0px'>" .$row['user_name'] . " - " . $row['date'] . "</div> <div id = 'post' style='color: white; border: 2px grey solid;'>". $row['content'] . "</div>";

                $sql = "SELECT user_name, date, content FROM zarehsforum.comments WHERE comments.post_id = '$post_id';";
                $comm = $mysqli->query($sql);

                if($comm->num_rows > 0){
                  while($row = mysqli_fetch_assoc($comm)){
                      echo "<div id = 'commentHeading' style ='text-align: right; color: lightblue;'>" .$row['user_name'] . " - " . $row['date']."<br>". $row['content'] . "</div>";

                  }
                }

                  
                echo "<br>
              <form method = 'POST' action='comment.php'>
                <input type = 'hidden' name = 'post_id' value = '$post_id'>
                <input type = 'hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'>
                <input type = 'hidden' name = 'user_name' value = '$user_name'>

                <textarea name = 'content' required></textarea>
               
                <button type = 'submit' name = 'submitComment' style = 'float: right;'/>Reply</button>
                

                <br><br>
              </form>";
             }
          }
          else echo "No Posts.";

          ?>
          <br><a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>

  </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
