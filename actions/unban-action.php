<?php

include 'connection.php';
$user = $_GET['id'];
$query = mysqli_prepare($conn, "UPDATE users SET user_status = 0 WHERE user_id=?;");


$query->bind_param('s',  $user);

// excute the query

$result= $query->execute();

if ($result)
{
    header("Location: ../dashboard.php");
}
else 
{
    echo "banned failed to excute. <br>";
}