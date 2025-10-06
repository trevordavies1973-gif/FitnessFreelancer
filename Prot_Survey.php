<?php 
// Author:  Trevor Davies
// Last Modified: 10 Oct 2025
// Description:  Allows the logged in user to provide feedback.  Santized using Prot_Survey_Check.php
// Uses Prot_Survey_Check.php, Prot_Header.php and Footer.html 

include 'Prot_Header.php';
include 'Footer.html';

if (isset($_SESSION['UserID']) && isset($_SESSION['Email'])) { ?>
    
    <!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="Styles/styles.css">
    <h1>How are we Doing?</h1>
    <form method="post" action="Prot_Survey_Check.php">
        <br>
        <label for="Rating">How would you rate our service and content?</label>
        <select id="Rating" name="Rating">
            <option value="Excellent">Excellent</option>
            <option value="Good">Good</option>
            <option value="Acceptable">Acceptable</option>
            <option value="Poor">Poor</option>
        </select> <br> <br> <br>
        <label>Comments</label>
        <textarea rows="5" placeholder="How can we make things better for you?" name="Comments" id="Comments" required></textarea> <br><br>
        <button type="submit" style ="display: block; margin: auto;">Submit</button>
    </form>
    
    <?php if (isset($_GET['msg'])) { ?>
        <p>Thank you for your feedback.  It will help us make better content for you! </p>
        <?php } ?>       
    
    </html>

<?php
}
else {
    header("Location:Login.php");
    exit();  
} ?>