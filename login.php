<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login Result</title>
  <style type="text/css">
    body {
      font-family: sans-serif;
      background-color: lightyellow;
    }

    table {
      background-color: lightblue;
      border-collapse: collapse;
      border: 1px solid gray;
    }

    td {
      padding: 5px;
    }

    tr:nth-child(odd) {
      background-color: white;
    }
  </style>
</head>

<body>

  <?php

    $db_handle_name = mysqli_connect( "localhost", "webphp", "password", "finaldb");

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $query = "SELECT * FROM auth WHERE username='" . $_POST['username'] . "'";
      $resource_name = mysqli_query($db_handle_name, $query );

      if (mysqli_num_rows($resource_name) > 0) {
        $row = mysqli_fetch_assoc($resource_name);
        if ($row['password'] == $_POST['password']) {
          print("Welcome back " . $_POST['username'] . "! Login was successful<p>");
          print ("<table rules=\"all\">");
          print ("<tr>");
          print ("<th>First Name</th>");
          print ("<th>Last Name</th>");
          print ("<th>Email</th>");
          print ("<th>Phone Number</th>");
          print ("</tr>");

          $firstName = $row['firstName'];
          $lastName = $row['lastName'];
          $email = $row['email'];
          $phone = $row['phone'];

          print ("<tr>");
          print ("<td>$firstName</td>");
          print ("<td>$lastName</td>");
          print ("<td>$email</td>");
          print ("<td>$phone</td>");

          print ("</tr>");
          print ("</table>");



        } else {
          print("Incorrect username or password.");
        }
      } else {
        print("Incorrect username or password.");
      }
    }
    ?>
</body>

</html>
