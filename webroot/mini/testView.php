<?php

session_start();

include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1">
        <title>Suleiman's Portfolio</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        
        <header class="top-bar">
            <div class="title">
                <a href="index.php"><img class="logo" src="img/portfolioLogo.png" alt="logo"></a>
                
            </div>
            <div class="nav-content">
                
            </div>
            <nav class="navigation">
                <ul class="nav-links">
                    <li><a href="index.php">Suleiman Abuu</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#experience">Experience</a></li>
                    <li><a href="index.php#skill">Skill</a></li>
                    <li><a href="index.php#education">Education</a></li>
                    <li><a href="index.php#work">Work</a></li>
                    <li><a href="addPost.php">Blog</a></li>

                    <?php
                    if (($_SESSION['login']) === true) {
                        echo '<li class="welcome-user">'. $_SESSION['firstName'] . ' ' .  $_SESSION['lastName'] . '<br>
                        <a href="logout.php" id="logout-sub">click here to logout</a></li>';
                    }
                    else {
                        echo '<a href="login.php" class="login">Login</a>';
                    }
                    ?>

                </ul>
                
            </nav>
            <button class="ham">
                <span></span>
                <span></span>
                <span></span>
            </button>
            

        </header>
        <div class="main-container">
            <div class="viewBlog">
                <?php
                    $sql = "SELECT * FROM BLOGPOSTS";
                    $result = $conn->query($sql);
                    $blogDatas = array();

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            $blogDatas[] = $row;
                        }
                    }

                    print_r($blogDatas);
                    /*
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<br> ID: ". $row["ID"]. " - TITLE: ". $row["postTitle"]. " POST: " . $row["postCont"] . " date: " . $row["datePosted"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    */
                ?>
            </div>
        </div>
        <script src="main.js"></script>
    </body>
</html>
