<?php
// Establish a database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "malabis";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check for connection errors
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Retrieve form data
$user_id = $_POST["user_id"];
$item_id = $_POST["item_id"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];

// Prepare the SQL query
$sql = "INSERT INTO reviews (user_id, item_id, rating, comment) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

// Bind the parameters
mysqli_stmt_bind_param($stmt, "iiis", $user_id, $item_id, $rating, $comment);

// Execute the query
if (mysqli_stmt_execute($stmt)) {
  header("Location: ../add-review.php?added=success");
} else {
  echo "Error creating review: " . mysqli_stmt_error($stmt);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
