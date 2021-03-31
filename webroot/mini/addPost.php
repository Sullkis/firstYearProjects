<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suleiman's Portfolio - Add to Blog</title>
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
                    <li><a href="addPost.html">Blog</a></li>

                    <?php
                    if (($_SESSION['login']) === true) {
                        echo '<a href="logout.php" class="login">logout</a>';
                    }
                    else {
                        echo '<a href="login.html" class="login">Login</a>';
                    }
                    ?>
                </ul>
            </nav>
        </header>
        <div class="main-container">
            <form class="add-post-form" action="index.php" action="POST">
                <legend>Add Blog</legend>
                <input type="text" class="blog-title" placeholder="Title" onfocus="">
                <textarea class="blog-post" placeholder="Enter your text here" ></textarea>
                <input type="submit" value="Post" onclick="submitForm()">
                <input type="reset" class="beeep" value="Clear" onclick="return clearText()" ></input>

            </form>
        </div>
        <script src="main.js"></script>
    </body>
</html>
