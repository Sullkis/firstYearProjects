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

           
            
        <section class="about" id="about"> 
            <div class="about-cont">
                <div class="abt-left">
                    <h1 class="sec-title">About Me</h1>
                    
                    <div class="sec-desc"><p>My name is Suleiman Abuu and I am a Student within the School of Electronic Engineering at Queen Mary University of London studying Computer Science.</p>
                    
                <section class="skill" id="skill">
                <div class="skill-cont">
                    <h1 class="sec-title">Skills</h1>
                    
                    <div class="skills-subcont">
                        <ul>
                            <li>
                                <div class="hexagon">
                                    <div class="Boxcont">
                                        <p class="box-title">Front End</p>
                                    <p>
                                        HTML<br>
                                        CSS<br>
                                        JavaScript
                                    </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hexagon">  
                                <div class="Boxcont">
                                        <p class="box-title">Back End</p>
                                        <p>
                                        JAVA<br>
                                            Data Analytics<br>
                                            Python<br>
                                            MySQL
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hexagon">
                                    <div class="Boxcont">
                                        <p class="box-title">Other</p>
                                        <p>
                                            Product Management<br>
                                            Data Analytics<br>
                                            Project Management<br>
                                            Photoshop<br>
                                            Illustrator
                                        </p>
                                    </div>
                                        
                                </div>
                            </li>
                        </ul>
                        </div>
                </div>

            </section>

            <section class="education" id="education">
                <div class="edu-cont">
                    <h1 class="sec-title">Education</h1>
                    <table class="edu-table">
                        <tr>
                            <th scope="row" class="row-title">2013 - 2018</th>
                            <td>GCSE - The City Academy Hackney</td>
                      </tr>
                      <tr>
                          <th scope="row">2018 - 2020</th>
                          <td>A-Levels - The City Academy Hackney</td>
                    </tr>
                    <tr>
                      <th scope="row">2020 - 2023</th>
                      <td>BSc Computer Science - Queen Mary University of London</td>
                </tr>
                    </table>
                </div>
                
            </section>
                </div>
                
            </div>
                <figure>
                    <img class="about-me-img" src="img/ImgOfMe.png" alt="">
                </figure>
                </div>  
            </section>

            </div>
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