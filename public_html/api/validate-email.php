<?php 

include("../../config.inc.php");

// get the username
$email = $_POST['email'];

// Connect to DB
$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Filter the username
$email = $dbc->real_escape_string($email);

// Prepare the query
$sql = "SELECT username FROM users WHERE email = '$email'";

// Run the query
$result = $dbc->query($sql);

if(!$result){
	// Query failed
	echo "Something went wrong";

} elseif($result->num_rows == 1) {
	// Username is in use
	echo "fail";
} else{
	// No results
	// Username was not found
	echo "success";
}