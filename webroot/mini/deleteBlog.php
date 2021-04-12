<?php

session_start();
require 'connection.php';
require 'functions.php';

$blogID = $_GET['bid'];

if (isset($_SESSION['email']) && (checkIfAdmin($_SESSION['email']) === true )) {

    $sql = "DELETE FROM BLOGPOSTS WHERE ID='$blogID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $sql = "DELETE FROM COMMENTS WHERE POST_ID='$blogID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

    header("Location: viewBlog.php");

}
else {

    echo 'you do not have permission to do this!!!'.'<br>'."<a href=viewBlog.php>go back</a>";
    
}
?>