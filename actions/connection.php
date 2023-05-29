
<?php

// Database configuration
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "malabis";

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die('Could not Connect to MySQL');
}
?> 

