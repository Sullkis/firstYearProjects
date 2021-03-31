<?php

include 'connection.php';

if (isset($_POST['uname']) && isset($_POST['password'])){

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
        $result = mysqli_querry($_conn,$sql);

        $firstName = mysqli_querry($_conn,"SELECT firstName FROM USERS WHERE email='$uname'");
        $lastName = mysqli_querry($_conn,"SELECT lastName FROM USERS WHERE email='$uname'");
        $id = mysqli_querry($_conn,"SELECT ID FROM USERS WHERE email='$uname'");

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
        else {
            header('Location: login.php?error=Login credentials invalid');
            exit();
        }

    }
}
else {
    header("Location: login.php");
    exit();
}
?>
