<?php 

// Author:  Trevor Davies and modified from "How to Make a Contact Page Using HTML And CSS in 10 Minutes" on YouTube, GreatStack, Dec 23, 2019
// Revised Date: 2 Oct 2025
// Description:  This program presents the input boxes for the Contact Us page, takes input from the user through HTML forms, sanitizes the data,
//               and then sends it to MySQL database using Contactus_Send.php
// Other Required Code: Contactus_Send.php

include 'Header.html';
include 'Footer.html'; ?>

<!DOCTYPE html>

	<h1>Contact Us</h1>
    <body>
        <br>
        <p>Please reach out to us!  We will get back to you within 1-2 business days.</p>  
        <div class="container">
      
            <div class="contact-box">
                <div class="contact-left">
                    <h2>Send your Request</h2>  
                    <form method = "post" action="Contactus_Send.php">

                        <div class="input-row">
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" placeholder="Enter your Full Name" name="Name" id="Name" required>
                            </div>
                            <div class="input-group">
                                <label>Phone Number</label>
                                <input type="text" placeholder="Enter your Phone Number" name="Phone" id="Phone" required>
                            </div>
                        </div>
                        
                        <div class="input-row">
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your Email" name="Email" id="Email" required>
                            </div>
                            <div class="input-group">
                                <label>Subject</label>
                                <input type="text" placeholder="Enter the Subject" name="Subject" id="Subject" required>
                            </div>
                        </div>

                        <label>Message</label>
                        <textarea rows="5" placeholder="How can we help you?" name="Message" id="Message" required></textarea> 

                        <button type="submit" style ="display: block; margin: auto;">Submit</button> <br>
                       
                        <?php if (isset($_GET['msg'])) { ?>
                            <p> <?php echo $_GET['msg']; ?>, thank you for your message.  We will get back to you within two business days.</p>
                        <?php } ?> 

                    </form>
                </div>
                <div class="contact-right">
                    <h2>Reach Us</h2>    
                    
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>contactus@fitnessfreelancer.com</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>(613) 454-3344</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>    
    </body>

</html>