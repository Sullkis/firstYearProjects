<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suleiman's Portfolio - Sign In</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>
	<body>
<?php

include 'dbh.php';

$uname = $_POST["uname"];
$password = $_POST["password"];

$sql = "SELECT * FROM USERS WHERE email='$uname' AND password='$password'";
$result = mysqli_query($conn,$sql);

$firstName = mysqli_query($conn,"SELECT firstName FROM USERS WHERE email='$uname'");
$lastName = mysqli_query($conn,"SELECT lastName FROM USERS WHERE email='$uname'");
$id = mysqli_query($conn,"SELECT ID FROM USERS WHERE email='$uname'");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        session_start();
        session_id($id);
        $_SESSION['firstName'] = $row["firstName"];
        $_SESSION['lastName'] = $row["lastName"];
        $_SESSION['email'] = $uname;
        $_SESSION['login'] = true;
      }
      header('Location: addPost.html');
}
else{
    $fail = "Login credentials invalid!";
    echo "<h3> $fail </h3><br>";
}
$conn->close();
?>
	</body>
</html>
