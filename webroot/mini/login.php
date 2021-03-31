<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suleiman's Portfolio - Sign In</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>
<?php

include 'dbh.php';

$uname = $_POST["uname"];
$password = $_POST["password"];

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
            header('Location: addPost.html');
        }
}
else{
    $fail = "Login credentials invalid!";
    echo "<h3> $fail </h3><br>";
}
$conn->close();
?>
</html>
