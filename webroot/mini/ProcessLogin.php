<?php

include 'connection.php';
require 'functions.php';

$uname = $_POST["uname"];
$password = $_POST["password"];

if ($uname === '' && $password === '') {
    header("Location: login.php?error=Please fill in credentials");
    exit();
}
else if ($uname === '') {
    header("Location: login.php?error=Email is required");
    exit();
}
else if ($password === '') {
    header("Location: login.php?error=Password is required");
    exit();
}
else{
    $sql = "SELECT * FROM USERS WHERE email='$uname' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
            session_id($row['ID']);
            session_start();
            
            $_SESSION['firstName'] = $row["firstName"];
            $_SESSION['lastName'] = $row["lastName"];
            $_SESSION['email'] = $uname;
            $_SESSION['login'] = true;
            if (isset($_SESSION['login']) && $_SESSION['login'] === true && checkIfAdmin($_SESSION['email']) === true) {
                header("Location: addPost.php");
            }
            else {
                header("Location: viewBlog.php");
            }
            
            
        }
        else {
            header("Location: login.php?error=Login credentials invalid");
            exit();
        }
    }
?>