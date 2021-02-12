<?php
$servername='patchyourdevice.com';
$username='samandjoy';  
$databasename='patch';
$password='Sjuf@31020201';
//building Connection

$conn = mysqli_connect($servername, $username, $password) or die("Error".mysqli_error($conn));
//Selecting Database
$db=mysqli_select_db($conn,$databasename) or die("Error".mysqli_error($conn));
//Build the query

//session_start();
?>