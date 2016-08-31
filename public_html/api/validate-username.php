<?php 

include("../../config.inc.php");

// get the username
$username = $_POST['username'];

// Connect to DB
$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Filter the username
$username = $dbc->real_escape_string($username);

// Prepare the query
$sql = "SELECT username FROM users WHERE username = '$username'";

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




















