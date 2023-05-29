<?php

session_start();

if (isset($_POST['save'])) {
    
    extract($_POST);
    
    include("connection.php");
    
    
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    
    
    $query = mysqli_prepare($conn, "SELECT * FROM users where user_email=? and user_password =? LIMIT 1;");
    $query->bind_param("ss", $email, $pass);
    
    if ($query->execute()) {
        $result = $query->get_result();
        $row = mysqli_fetch_array($result);
        if (is_array($row)) {
            $_SESSION["isLoggedIn"] = true;
            $_SESSION["user_email"] = $row['user_email'];
            $_SESSION["user_name"] = $row['user_name'];
            $_SESSION["ID"] = $row['user_id'];
            $_SESSION["status"] = $row['user_status'];

            if($row['user_status'] == 1 )
            {
                header("Location: ../dashboard.php");
            }
            else  if($row['user_status'] == -1 )
            {
                header("Location: ../login/login.php?status=banned");
            }
            else
            {
                header("Location: ../index.php");
            }
        } else {

            header("Location: ../login/login.php?status=invalid");
        }
    }
}
