<?php
extract($_POST);
include("connection.php");

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$pass = $_POST['user_pass'];
$Cpass = $_POST['user_pass_conf'];
$address = $_POST['user_address'];
$phone = $_POST['user_phone'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Email is not Valid";
    header("Location: ../login/signup.php?error=" . urlencode($error));
    exit;
}

if ($pass != $Cpass) {
    $error = "Passwords don't Match";
    header("Location: ../login/signup.php?error=" . urlencode($error));
    exit;
}


$query = mysqli_prepare($conn, "SELECT * FROM users where user_email=?");
$query->bind_param("s", $email);
$query->execute();
$result = $query->get_result();



if (mysqli_num_rows($result) != 0) {
    $error = "Email Already Exists";
    header("Location: ../login/signup.php?error=" . urlencode($error));
    exit;

} elseif (isset($_POST['save'])) {
    try {
        $query = mysqli_prepare($conn, "INSERT INTO users( user_name ,user_email, user_password, user_address, user_phone) VALUES ( ? , ? , ? , ? , ?);");
        $query->bind_param("sssss", $name, $email, md5($pass), $address, $phone);
        $query->execute();
        header("Location: ../login/login.php");
    } catch (\Throwable $th) {
        $error = "Your user Name Already exists";
        header("Location: ../login/signup.php?error=" . urlencode($error));
        exit;
    }
    exit;
}
