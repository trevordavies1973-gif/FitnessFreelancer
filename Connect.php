<?php 
// Author:  Trevor Davies and modified from Chapter 11 of O'Reilly's Learning PHP, MySQL & JavaScript, 6th Edition and 
// "How to Create Login Form from Scratch | HTML & CSS" on YouTube, Wed Dev Made Easy, Dec 23, 2019
// Date: 12 Jul 2025
// Description:  This program links .php and .html pages to MySQL database called fitness.
// Other Required Code: N/A

$host = 'localhost';
$data = 'fitness'; 
$user = 'andy'; 
$pass = '1234'; 

$connection = mysqli_connect($host, $user, $pass, $data);  //myslqi_connect is a build in function to connect php pages to mySql

if (!$connection) {
   echo "NOT connected to mySQL.";
}

?>