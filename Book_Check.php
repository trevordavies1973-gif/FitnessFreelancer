<?php
// Author:  Trevor Davies and modified from assigment instructions of C4V's 1107.5 LAMP course.
// Date: 8 July 2025
// Description:  This program takes input from the user through HTML forms on the Book a Call page, sanitizes the data, and then sends it to MySQL database.
// Other Required Code: Connect.php

include "Connect.php";

 if (isset ($_POST['LastName'])) {

  $FirstName = filter_input(INPUT_POST, 'FirstName', FILTER_SANITIZE_SPECIAL_CHARS); //Removes special characters from the user.
  $LastName = filter_input(INPUT_POST, 'LastName', FILTER_SANITIZE_SPECIAL_CHARS);
  $OrgName = filter_input(INPUT_POST, 'OrgName', FILTER_SANITIZE_SPECIAL_CHARS);

  $Email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);  //ensures email is in valid format
  if (empty($Email)) {
     header("Location:Book.php?error=Not valid email.  Please try again.");
  }
  else {
    $sqlquery = "INSERT INTO userdata (FirstName, LastName, Email, OrgName) VALUES " . "('$FirstName', '$LastName', '$Email', '$OrgName')";  // creates a query
    mysqli_query($connection, $sqlquery); //uses built infunction to send above query to mysql database using connection established thru Connect.php and stores response in $result
    header("Location:Thankyou.php?msg=$FirstName");
  }
}
?>