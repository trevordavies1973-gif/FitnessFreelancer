<?php 

// Author:  Trevor Davies
// Last Modified: 10 Oct 2025
// Description:  Allows the logged in user to get access to their paid content.
// Uses Prot_Header.pho and Footer.html 

include 'Prot_Header.php';
include 'Footer.html';

if (isset($_SESSION['UserID']) && isset($_SESSION['Email'])) { ?>
    
    <!DOCTYPE html>
    <html>
    <h1><?php echo $_SESSION['FirstName']; ?>'s Fitness Content</h1>
    <ul>
        <li>
            <a href="https://drive.google.com/file/d/1VBdSE7lA6nH1TNOJzLRMRYW5s8Tv7OjI/view?usp=sharing" target="_blank">
                <img src="Images\HotOutside.jpg" width="100px"> Best Activities to do in the Heat!
            </a>
        </li>
        <li>
            <a href="https://drive.google.com/file/d/1ZDdgGvKl1BbO5iSxhJ0DxnzPC4dUx8_b/view?usp=sharing" target="_blank">
                <img src="Images\FitnessCareerBalance.jpg" width="100px"> Balancing a Career and Fitness
            </a>
        </li>
        <li>
            <a href="https://drive.google.com/file/d/1xoFJkVCODb_-rdnpTQz4Nlx7p83LWcEV/view?usp=sharing" target="_blank">
                <img src="Images\Rushed.jpg" width="100px"> Eating Healthy Meals with Limited Time
            </a>
        </li>
    </ul>
    </html>

<?php
}
else {
    header("Location:Login.php");
    exit();  
} ?>