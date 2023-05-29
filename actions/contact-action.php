<?php

if (isset($_POST['save']))
{
    extract($_POST);

    include("connection.php");


$email = $_POST['contact-email'];
$message = $_POST['msg'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Email is not Valid";
    header("Location: ../contact.php?error=" . urlencode($error));
    exit;
}


    try {
        $query = mysqli_prepare($conn, "INSERT INTO messages (sender_email, message_content) VALUES (?,?);");
        $query->bind_param("ss", $email, $message);
        $query->execute();
        $success = "Message was sent!";
        header("Location: ../contact.php?success=" . urlencode($success));
    } catch (\Throwable $th) {
        header("Location: ../admin.php");
        exit;
    }
    exit;
}
