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
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#experience">Experience</a></li>
                    <li><a href="index.php#skill">Skill</a></li>
                    <li><a href="index.php#education">Education</a></li>
                    <li><a href="index.php#work">Work</a></li>
                    <li><a href="viewBlog.php">Blog</a></li>

                    <?php
                    if (($_SESSION['login']) === true) {
                        echo '<li class="welcome-user">Welcome'. $_SESSION['firstName'] . ' ' .  $_SESSION['lastName'] . '<br>
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

           

            <section class="home">
                <div class="home-content">  
                    <h1 class="home-title">
                        HELLO,
                        <br><span>I'M SULEIMAN</span>
                    </h1>
                    <p>Computer Science Student</p>
                    <div class="home-buttons">
                        <a href="index.php#contact"><button class="blop">Get In Touch</button></a>
                        <a href="index.php#work"><button class="blop">My Work</button></a>
                    </div>
                </div>
            </section>
            
            <section class="about" id="about">
                <div class="about-cont">
                <div class="abt-left">
                    <p class="sec-title">About Me</p>
                    <p class="sec-desc">My name is Suleiman Abuu and I am a Student within the School of Electronic Engineering at Queen Mary University of London studying Computer Science.</p>
                </div>
                <figure>
                    <img class="about-me-img" src="img/ImgOfMe.png" alt="">
                </figure>
                </div>
                
            </section>

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

            <section class="skill" id="skill">
                <div class="skill-cont">
                    <p class="sec-title">Skills</p>
                    
                    <div class="skills-subcont">
                        <ul>
                            <li>
                                <div class="box">
                                    <p class="box-title">Front End</p>
                                    <p>
                                        HTML<br>
                                        CSS<br>
                                        JavaScript
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="box">  
                                    <p class="box-title">Back End</p>
                                    <p>
                                        JAVA<br>
                                        Python<br>
                                        MySQL
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                        <p class="box-title">Other</p>
                                        <p>
                                            Product Management<br>
                                            Data Analytics<br>
                                            Project Management<br>
                                            Photoshop<br>
                                            Illustrator
                                        </p>
                                </div>
                            </li>
                        </ul>
                        </div>
                </div>
            </section>

            <section class="education" id="education">
                <div class="edu-cont">
                    <p class="sec-title">Education</p>
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

            <section class="work" id="work">
                <div class="work-cont">
                    <p class="sec-title">Work</p>
                    <ul>
                        <li class="proj1">
                            <a href="http://cakephp-mysql-persistent-ftwproject.apps.okd.eecs.qmul.ac.uk/topic2/my_homepage_week3.html">
                                <img src="img/Screenshot_2021-03-21 Welcome to My Homepage - Suleiman Abuu.png" alt="">
                            </a>
                            
                        </li>
                        <li class="proj2">
                            <a href="http://cakephp-mysql-persistent-ftwproject.apps.okd.eecs.qmul.ac.uk/topic4/favouriteMovies.html">
                                <img src="img/Screenshot_2021-03-21 favourite movies.png" alt="">
                            </a>
                            
                        </li>
                        <li class="proj3">
                            <a href="http://cakephp-mysql-persistent-ftwproject.apps.okd.eecs.qmul.ac.uk/topic4/shirt-ordering-form.html">
                                <img src="img/Screenshot_2021-03-21 T-shirt Ordering Form.png" alt="">
                            </a>
                            
                        </li>
                        <li class="proj4">
                            <a href="http://cakephp-mysql-persistent-ftwproject.apps.okd.eecs.qmul.ac.uk/Topic5/exercise2.html">
                                <img src="img/Screenshot_2021-03-21 Week 5 - homepage.png" alt="">
                            </a>
                            
                        </li>
                        <li class="proj5">
                            <a href="http://cakephp-mysql-persistent-ftwproject.apps.okd.eecs.qmul.ac.uk/Topic5/exercise3.html">
                                <img src="img/Screenshot_2021-03-21 Week 5 - homepage(1).png" alt="">
                            </a>
                            
                        </li>
                    </ul>
                </div>

            </section>

            <section class="contact" id="contact">
                <div class="contact-cont">
                    <form action="mailto:Suleiman.abuu28@gmail.com" method="POST" class="contact-form" enctype="text/plain">
                        <legend>Contact Me</legend>
                        <input type="text" name="contactName" class="cont-name" placeholder="Enter Your Name">
                        <input type="email" name="contactEmail" class="cont-Email" placeholder="Enter Your Email">
                        <textarea name="contactMessage" class="cont-message" cols="18" rows="6" placeholder="Enter Your Message"></textarea>
                        <input type="submit" value="Sumbit">
                    </form>
                </div>
            </section>
            </div>
        </article>
        <footer>            
            <div class="page-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addpost.php">Blog</a></li>
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
