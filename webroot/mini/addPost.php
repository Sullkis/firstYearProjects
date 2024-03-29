<?php

session_start();

require 'functions.php'

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
                    <li><a href="viewBlog.php">Blog</a></li>

                    <?php
                    if ((isset($_SESSION['login']) && $_SESSION['login'] === true)) {
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
            <?php
            if ((isset($_SESSION['login']) && $_SESSION['login'] === true && checkIfAdmin($_SESSION['email'])===true )) {
                echo '<form class="add-post-form" action="processBlogPost.php" method="POST">
                <legend>Add Blog</legend>
                <input type="text" class="blog-title" placeholder="Title" name="title" onfocus="">
                <textarea class="blog-post" placeholder="Enter your text here" name="post-cont"></textarea>
                <input type="submit" value="Post" onclick="submitForm()">
               <input type="reset" class="beeep" value="Clear" onclick="return clearText()" ></input>

            </form>';
            }
            else {
                if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                    echo '<div class="addPostNLI"><p>You do not have authorisation to post on the blog</p><br>';
                    echo '<a href="viewBlog.php" class="login">Click Here to View the blog entries</a></div>';
                }
                else {
                    echo '<div class="addPostNLI"><p>To Post on the blog please log in</p><br>';
                    echo '<a href="login.php" class="login">Login</a></div>';
                }
                
            }
            ?>
            
        </div>
        <script src="main.js"></script>
    </body>
</html>