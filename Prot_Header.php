<?php 
// Author:  Trevor Davies
// Last Modified: 10 Oct 2025
// Description:  Displays a header for logged in users.

session_start();  // iniaties a new sesssion or resumes a new one

if (isset($_SESSION['UserID']) && isset($_SESSION['Email'])) { ?>
    
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" href="Styles/styles.css">
	</head>

	<body>
		<a href="Logout.php">
			<button style="position: absolute; top: 10px; right: 10px; ">Logout</button
		</a>

		<div>
			<a href="Prot_Content.php">Content</a>
			<a href="Prot_Survey.php">Survey</a>
			<br>
			<br>
			<img src="Images/Logo.png" alt ="Business Logo" class="centered-image">
		</div>
	</body>
	</html>

<?php
}

else {
    header("Location:Login.php");
    exit();  
} ?>