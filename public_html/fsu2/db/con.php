<?php

// Create connection 
$con=mysqli_connect("oakemagazine.com", "root", "thewho16", "nextgen");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}

mysqli_close($con);

?>
