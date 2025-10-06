<?php

// Author:  Trevor Davies 
// Last Modified: 6 Oct 2025
// Description:  This program is used when the logged in user clicks log out on the header bar.

session_start();
session_unset();  // these two lines remove all global session variables and destroy the session
session_destroy();
header("Location: Login.php");  //directs user back to Login page
?>