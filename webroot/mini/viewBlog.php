<?php

session_start();

require 'connection.php';
require 'functions.php';

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

        <div id="blo" class="main-container">
            <div class="viewBlog">
            <form class="filter" action="fiterByMonth.php" method="post">
          <select class="sltMonth" name="postMonth" required>
            <option selected disabled>- Month -</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
            <option value="All">Show All</option>
          </select>

            <input class="filterSb" type="submit" value="Filter">
            </form>
            <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] === true && checkIfAdmin($_SESSION['email']) === true) {
                    echo '<a href="addPost.php" class="addPostBtn">Add to Post</a>';
                }
            ?>
            <?php
                $sqi = "SELECT * FROM BLOGPOSTS";
                $result = mysqli_query($conn,$sqi);


                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)){
                        $rowMonth = strtotime($row['datePosted']);
                        $rowMonth = date("F",$rowMonth);
                        if ((isset($_GET['month']) &&  $_GET['month'] === $rowMonth) || !isset($_GET['month']) || $_GET['month'] === "All") {
                            $blogDatas[] = $row;
                        }
                    }
                }
                if (isset($blogDatas)) {
                    $sorted = sortarray($blogDatas,'datePosted');

                    foreach ($sorted as $key) {

                    $toPrintTime = $key['datePosted']; 
                    $toPrintTitle = $key['postTitle'];
                    $toPrintPost = $key['postCont'];
                    $postID = $key['ID'];
                    $CommentsCount = 0;

                    $comsqi = "SELECT * FROM COMMENTS WHERE POST_ID=$postID";
                    $comresult = mysqli_query($conn,$comsqi);
    
                    if (mysqli_num_rows($comresult) > 0) {
                        while($comrow = mysqli_fetch_assoc($comresult)){
                            $CommentsCount++;
                        }
                    }
                
                    echo '
                    <div class="userPosts">
                    <p class="timeforblog"><img class="clock" src="img/—Pngtree—vector clock icon_3785539.png" alt="logo">'
                    ."$toPrintTime</p>"
                    .'<br>'
                    .'<h3 class="userPosttitles">'
                    ."$toPrintTitle</h3>"
                    .'<br><p class="userPostCont">'
                    ."$toPrintPost"
                    ."</p><p>
                   
                    </p><hr> 
                    "."<a class=commCount href=viewComments.php?id=$postID>$CommentsCount Comments</a>";
                    if (isset($_SESSION['email']) && (checkIfAdmin($_SESSION['email']) === true )) {

                        echo "<a class=deleteBtn onclick='return ConfirmDelete()' href=deleteBlog.php?bid=$postID>Delete</a>";
                    }
                        echo "</div>";
                    }
                }
                else 
                {
                    echo "<br><br>";
                    if ( !isset($_GET['month']) || $_GET['month'] === "All") {
                        echo "There are no blog entries.";
                    }
                    else {
                        echo "There are no blogs in this Month.";
                    }
                    
                }
                
            ?>
            
            </div>
        </div>
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