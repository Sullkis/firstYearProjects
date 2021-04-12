<?php

session_start();

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
                    <li><a href="about.php#about">About</a></li>
                    <li><a href="portfolio.php#experience">Experience</a></li>
                    <li><a href="about.php#skill">Skill</a></li>
                    <li><a href="about.php#education">Education</a></li>
                    <li><a href="portfolio.php#work">Work</a></li>
                    <li><a href="viewBlog.php">Blog</a></li>

                    <?php
                    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
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
        <article class="main-container">

            <section class="contact">
                <form action="mailto:Suleiman.abuu28@gmail.com" method="POST" class="contact-form" enctype="text/plain">
                        <legend>Contact Me</legend>
                        <input type="text" name="contactName" class="cont-name" placeholder="Enter Your Name">
                        <input type="email" name="contactEmail" class="cont-Email" placeholder="Enter Your Email">
                        <textarea name="contactMessage" class="cont-message" cols="18" rows="6" placeholder="Enter Your Message"></textarea>
                        <input type="submit" value="Sumbit">
                    </form>
                </div>
            </section>

        </article>
        <footer>            
            <div class="page-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="viewBlog.php">Blog</a></li>
                    <li><a href="https://www.qmul.ac.uk/">University</a></li>
                </ul>
            </div>
            <div class="social-nav">
                <ul>
                    <li><a href="https://github.com/Sullkis"><img src="img/iconfinder_github_291716.png" alt=""></a></li>
                    <li><a href="https://www.instagram.com/suleimannn_/"><img src="img/iconfinder_1_Instagram_colored_svg_1_5296765.png" alt=""></a></li>
                    <li><a href="https://www.linkedin.com/in/suleiman-abuu-5a128317b/"><img src="img/iconfinder_1_Linkedin_unofficial_colored_svg_5296501.png" alt=""></a></li>
                </ul>
            </div>

            <sub>suleiman abuu &#169 2021</sub>
        </footer>
        <script src="main.js"></script>
    </body>
</html>