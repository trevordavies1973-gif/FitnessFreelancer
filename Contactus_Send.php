<?php
// Author:  Trevor Davies 
// Last Modified: 18 Sep 2025
// Description:  This program takes input from the user through HTML forms on the Contact Us page, sanitizes the data, and then sends it to MySQL database.
// Other Required Code: Connect.php 

include "Connect.php";

if (isset ($_POST['Name'])) {
    $email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);  //ensures email is in valid format
    $name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS); //Removes special characters from the user.
    $phone = filter_input(INPUT_POST, 'Phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $subject = filter_input(INPUT_POST, 'Subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'Message', FILTER_SANITIZE_SPECIAL_CHARS);

    $sqlquery = "INSERT INTO contactus (name, phone, email, subject, message) VALUES " . "('$name', '$phone', '$email', '$subject', '$message')";  // creates a query
    mysqli_query($connection, $sqlquery); //uses built infunction to send above query to mysql database using connection established thru Connect.php 
    header("Location:Contactus.php?msg=$name");
}
?>
