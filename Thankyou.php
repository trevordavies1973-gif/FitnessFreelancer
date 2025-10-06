<?php 
// Author:  Trevor Davies 
// Last Revised: 2 Oct 2025
// Description:  The user is directed here from Book_Check.php.  The use is thanked and the inline widget from Caldendly.com allows for the user to find a time/date to have their call.
// Other Required Code: "off the shelf" Calendly.com inline widget 

include 'Header.html';
include 'Footer.html'; ?>
<!DOCTYPE html>

<html>
	<h1>Thank-you</h1>
	<br>
	<?php if (isset($_GET['msg'])) { ?>
		<p> <?php echo $_GET['msg']; ?>, </p>
	<?php } ?> 
	<br>
	<p> Thanks for your interest in Fitness Freelancers. <br>
    You are one more step closer to getting quality copy for your gym!  <br> <br>
	</p>
	<!-- Calendly inline widget begin -->
		<div class="calendly-inline-widget" data-url="https://calendly.com/fitness-freelancer/discovery-call" style="min-width:320px;height:900px;"></div>
		<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
	<!-- Calendly inline widget end -->

</html>