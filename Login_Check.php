<?php
// Author:  Trevor Davies and modified from "How to Create Login Form from Scratch | HTML & CSS" on YouTube, Wed Dev Made Easy, Dec 23, 2019
// Last Modified: 2 Oct 2025
// Description:  This program checks login credentials using data supplied by Login.php
// Other Required Code: Works with Connect.php, Login.php and Prot_Content if login successful.

session_start();  // iniaties a new sesssion or resumes a new one
include "Connect.php";


if (isset($_POST['Email']) && isset($_POST['Password'])) {

    $Password=filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_SPECIAL_CHARS);  // posts the user input to a php variable after sanitizing it
    $Email=filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);

    if (empty($Email)) {
        header("Location:Login.php?error=Email is required.");
        exit();
    }
    else if (empty($Password)) {
        header("Location:Login.php?error=Password is required.");
        exit();     
    }
    else {
        $sqlquery = "SELECT * FROM userdata WHERE Email='$Email' AND Password ='$Password'";  // creates a query
        $result = mysqli_query($connection, $sqlquery); //uses built infunction to send above query to mysql database using connection established thru Connect.php and stores response in $result

        if (mysqli_num_rows($result) === 1) { //if one match
            $arrayofresults = mysqli_fetch_assoc($result);  //gets results into an array
            if ($arrayofresults['Password'] === $Password &&  $arrayofresults['Email'] === $Email) {
                $_SESSION['FirstName']  = $arrayofresults['FirstName'];   //makes data available to session
                $_SESSION['UserID']  = $arrayofresults['UserID'];   
                $_SESSION['Email']  = $arrayofresults['Email'];   
                header("Location: Prot_Content.php");   // sends using to their protected home page
                exit();  
            }
        }
        else {
            header("Location:Login.php?error=Please try again or contact support for help.");
            exit();  
        }
    }
}

else {
    header("Location:Login.php");
    exit();
}

?>