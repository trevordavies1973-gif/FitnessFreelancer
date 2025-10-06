<?php 
// Author:  Trevor Davies
// Last Modified: 18 Sep 2025
// Description:  This program is the landing page. 
// Uses Header.html and Footer.html which is common to all "logged-out" pages

include 'Header.html';
include 'Footer.html'; ?>
<!DOCTYPE html>
<html>
	<h1>Home</h1>

	<body>
		<div class="container">
			<h2 style = "text-align: center;">Fitness content for gym owners. </h2> <br>
			<div class="contact-box">
				<div class="contact-left">
					<p style = "text-align: center;">Free up some time...wear one less hat. </p>
					<img src="Images/Too-Many-Hats.png" alt="Too Many Hats!" title ="Too Many Hats!" style ="display: block; margin: auto; width: 70%; height: 70%;"> <br>
					<p style = "text-align: center;">Find out more...<br> <br>
				</div>

				<div class="contact-right">
					<p style ="display: block; text-align: center;">Running a gym takes 15+ hats <br>
					We help you take one off.</p>
					
					<p style ="display: block; text-align: center;"><br>How it works...3 easy steps:<br><br>
					Book a Call<br>
					Choose a Plan<br>
					Wear one less Hat <br><br>
					<a href="Book.php">Book a call today!</a> 
					<br> <br> </p>
					<img src="Images/Video-Placeholder.png" alt="Video" title ="Video" style ="display: block; margin: auto; width: 58%; height: 58%;">
				</div> 
			</div>	
		</div>
	</body>	
</html>