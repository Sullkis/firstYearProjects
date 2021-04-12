<?php

session_start();
require 'connection.php';
require 'functions.php';

$blogID = $_GET['bid'];
$commentID = $_GET['cid'];

if (isset($_SESSION['email']) && (checkIfAdmin($_SESSION['email']) === true )) {
    echo 'true';

    $sql = "DELETE FROM COMMENTS WHERE id='$commentID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

    header("Location: viewComments.php?id=$blogID");
}
else {
    echo 'you do not have permission to do this!!!'.'<br>'."<a href=viewComments.php?id=$blogID >go back</a>";
}

?>