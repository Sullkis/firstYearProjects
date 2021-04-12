<?php
session_start();
include 'connection.php';

date_default_timezone_set('UTC');
$postedTime = date("Y-m-d H:i:s");

$blogPostID = $_GET['bid'];
$name =$_SESSION['firstName'].' '.$_SESSION['lastName'];
$ComMes =addslashes($_POST["com-cont"]);
$userId = session_id();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO COMMENTS(USER_ID, POST_ID, message,datePosted) 
    VALUES ('$userId','$blogPostID','$ComMes','$postedTime')";

    if ($conn->query($sql) === TRUE) {

        header("Location: viewComments.php?id=$blogPostID");

    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
};
?>
