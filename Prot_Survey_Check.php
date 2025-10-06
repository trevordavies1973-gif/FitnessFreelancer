<?php 

// Author:  Trevor Davies
// Last Modified: 10 Oct 2025
// Description:  Sanitizes data drom Prot_Survey.php and then uses Connect.php to querry the mysql database.
// Uses Connect.php

session_start();  // iniaties a new sesssion or resumes a new one

if (isset($_SESSION['UserID']) && isset($_SESSION['Email'])) {            //protects this page

  include "Connect.php";

  if (isset ($_POST['Rating'])) {

    $UserID=$_SESSION['UserID'];
    $Rating = filter_input(INPUT_POST, 'Rating', FILTER_SANITIZE_SPECIAL_CHARS); //Removes special characters from the user.
    $Comments = filter_input(INPUT_POST, 'Comments', FILTER_SANITIZE_SPECIAL_CHARS);
    $Date1 = date("Y.m.d");  // stores current date

    $sqlquery = "INSERT INTO feedback (UserID, Date1, Rating, Comments) VALUES " . "('$UserID', '$Date1', '$Rating', '$Comments')";  // creates a query
    mysqli_query($connection, $sqlquery); //uses built infunction to send above query to mysql database using connection established thru Connect.php 
    header("Location:Prot_Survey.php?msg=yes"); //sends user back to page and thanks them.
  }
}  
else {
    header("Location:Login.php");          // sends you to login page if you are not logged in
    exit();  
} ?>