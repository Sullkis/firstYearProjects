<?php

include 'connection.php';

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

    $firstName = mysqli_query($conn,"SELECT firstName FROM USERS WHERE email='$uname'");
    $lastName = mysqli_query($conn,"SELECT lastName FROM USERS WHERE email='$uname'");
    $id = mysqli_query($conn,"SELECT ID FROM USERS WHERE email='$uname'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
            session_start();
            session_id($id);
            if($row['email'] === $uname && $row['password'] === $password){
                $_SESSION['firstName'] = $row["firstName"];
                $_SESSION['lastName'] = $row["lastName"];
                $_SESSION['email'] = $uname;
                $_SESSION['login'] = true;
                header("Location: addPost.html");
            }
        }
        else {
            header("Location: login.php?error=Login credentials invalid");
            exit();
        }
    }
?>
