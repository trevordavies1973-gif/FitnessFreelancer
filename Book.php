<?php
// Author:  Trevor Davies and modified from assigment instructions of C4V's 1107.5 LAMP course.
// Date: 8 July 2025
// Description:  This program presents the input boxes, takes input from the user through HTML forms, sanitizes the data, and then sends it to MySQL database using Book_Check.php
// Other Required Code: Book_Check.php
 
include 'Header.html';
include 'Footer.html'; ?>

<!DOCTYPE html>
<html>
<h1>Book A Call</h1>

<div class="contact-box" style="width: 80%; margin: 90px 860px;">

  <form method="post" action="Book_Check.php">

    <div class="input-row">
        <div class="input-group">
            <label>First Name</label>
            <input type="text" placeholder="Enter your First Name" name="FirstName" id="FirstName">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" placeholder="Enter your Last Name" name="LastName" id="LastName">
        </div>
    </div>
    
    <div class="input-row">
        <div class="input-group">
            <label>Email</label>
            <input type="email" placeholder="Enter your Email" name="Email" id="Email">
        </div>
        <div class="input-group">
            <label>Organization</label>
            <input type="text" placeholder="Enter your Organization's Name" name="OrgName" id="OrgName">
        </div>
    </div>
    <button type="submit" style ="display: block; margin: auto;">Submit</button>
  </form>

</div>

<?php if (isset($_GET['error'])) { ?>
  <p> <?php echo $_GET['error']; ?></p>
<?php } ?> 

</body>
</html>