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

    function showTable($db) {
      $showQuery = "SELECT firstName, lastName FROM auth";
      $resource_name = mysqli_query($db, $showQuery );
      print ("<table rules=\"all\">");
      print ("<tr>");
      print ("<th>First Name</th>");
      print ("<th>Last Name</th>");
      print ("</tr>");
      while ($row = mysqli_fetch_assoc($resource_name)){


        $firstName = $row['firstName'];
        $lastName = $row['lastName'];

        print ("<tr>");
        print ("<td>$firstName</td>");
        print ("<td>$lastName</td>");
        print ("</tr>");
      }

      print ("</table>");
    }

    $db_handle_name = mysqli_connect( "localhost", "webphp", "password", "finaldb");

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $query = "INSERT INTO auth (username,password,firstName,lastName,email,phone) VALUES ('"
          . $_POST['username'] . "', '"
          . $_POST['password'] . "', '"
          . $_POST['firstname'] . "', '"
          . $_POST['lastname'] . "', '"
          . $_POST['email'] . "', '"
          . $_POST['phone'] . "')";

      $result = mysqli_query($db_handle_name, $query );

      if ($result == FALSE) {
        print("Error creating user");
        return;
      }
      print("you are registered now<p>");
      showTable($db_handle_name);
    }
    ?>
</body>

</html>
