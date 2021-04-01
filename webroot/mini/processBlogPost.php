<?php

include 'connection.php';

date_default_timezone_set('UTC');
$postedTime = date("jS F Y, H:i")." UTC";

$title =addslashes($_POST["title"]);
$postCont =addslashes($_POST["post-cont"]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO BLOGPOSTS(datePosted, postTitle,postCont) 
    VALUES ('$postedTime', '$title', '$postCont')";

    if ($conn->query($sql) === TRUE) {

        header("Location: viewBlog.php");

    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
};
?>
