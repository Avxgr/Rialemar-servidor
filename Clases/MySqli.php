<?php

// Connect to MySQL Database
$con = new mysqli(DBHOST, DBUSER, DBPASSWD, DB);
//Check connection
if($con->connect_error)
{
	die("Connection failed:" . $con->connect_error);
}

$query = "SET NAMES 'utf8'";
	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}
?>
	