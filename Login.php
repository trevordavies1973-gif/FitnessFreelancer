<!-- Author:  Trevor Davies and modified from assigment Robin's Nest text book example and 
"How to Create Login Form from Scratch | HTML & CSS" on YouTube, Wed Dev Made Easy, Dec 23, 2019
Last Modified: 2 Oct 2025
Description:  This program takes input from the user through HTML forms. This data is sent to Login_Check.php where it sanitizes the data, and then sends it to MySQL database 
using Connect.php to log the user in. 
Other Required Code: Login_Check.php
-->
 
<!DOCTYPE html>
<html>
<title>Login</title>
<?php include 'Header.html';
include 'Footer.html'; ?>

<h1>Login</h1>  
<body>
  <div class ="loginbox">
    <img src="Images/loginpic.png" alt="" class="loginpic"> 
    <form action="Login_Check.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?> 
      <h2>Email</h2>
      <input type="text" name="Email" placeholder="Enter your Email Address">
      <h2>Password</h2> 
      <input type="password" name="Password" placeholder="Enter your Password">
      <button type="submit" style="background-color: #FFFFFF; display: block; margin: auto;">Submit</button>
      <br> <br>
    </form>
    <p>Lost your Password? <br>
    <a href="Contactus.php">Contact Us</a> <br> <br> </p>
    <p>Need an account? <br>
    <a href="Book.php">Book a Call</a> </p>
  </div>
</body>
</html>