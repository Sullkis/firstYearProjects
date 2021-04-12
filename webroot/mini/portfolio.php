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

           

            
            
            

            <section class="experience" id="experience">
                <div class="exp-content">
                    <p class="sec-title">Experience</p>
                        <ul>

                            <li>
                                <div class="box1">
                                    <p class="box-title">KPMG</p>
                                    <p class="date">Jun 2O16 - Jul 2017</p><br>
                                    <p>
                                        Shadowing KPMG workers as well as having to complete a group presentation with new people and present to KPMG workers at the end of it.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="box2">
                                    <p class="box-title">experience 2</p>
                                    <p>
                                        
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="box3">
                                    <p class="box-title">experience 3</p>
                                    <p>
                                        
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="box4">
                                    <p class="box-title">experience 4</p>
                                    <p>
                                        
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            

            

            <section class="work" id="work">
                <div class="work-cont">
                    <p class="sec-title">Work</p>
                    <ul>
                    <li class="proj1">
                        <h3 class="titleForProj">Java Adventure Game</h3>
                <a href="">
                    <img src="img/blueJOOP.png" alt="">
                </a>
                <p>This is a texted based adventure game made using Java it uses inheritence to make classes and sub classes. It also utilises polymorphism for multiple methods.</p>
            </li>
            <li class="proj2">
                        <h3 class="titleForProj">Homepage using bootstrap</h3>
                <a href="">
                <img src="img/Screenshot_2021-03-21 Week 5 - homepage(1).png" alt="">
                </a>
                <p>Using html and bootstrap I created a mock homepage that displays basic info. This has no css as styling is all added through bootstrap</p>
            </li>
            <li class="proj3">
                        <h3 class="titleForProj">PRP presentation</h3>
                <a href="">
                    <img src="img/presentation.png" alt="">
                </a>
                <p>This was a group presentation that discussed matters concerning the environment. This presentation was presented to a small audience.</p>
            </li>
            <li class="proj1">
            <h3 class="titleForProj">Assembly Language</h3>
                <a href="">
                    <img src="img/mips.png" alt="">
                </a>
                <p>Using QtSpim I created a calculator that does division. The programming language used is Mips writing the code in a text editor.</p>
            </li>



                    </ul>
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