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
        
        <div class="main-container">
            <div class="viewBlog">
            <?php
                
                $blogPostID = $_GET['id'];

                $comsqi = "SELECT * FROM COMMENTS WHERE POST_ID=$blogPostID";
                    $comresult = mysqli_query($conn,$comsqi);
    
                    if (mysqli_num_rows($comresult) > 0) {
                        while($comrow = mysqli_fetch_assoc($comresult)){
                            $CommentsPost[] = $comrow;
                        }
                    }
                    else {
                        $CommentsPost = array();
                    }

                $sqi = "SELECT * FROM BLOGPOSTS WHERE ID='$blogPostID'";
                $result = mysqli_query($conn,$sqi);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)){
                        $blogTitle = $row['postTitle'];
                        $blogPost = $row['postCont'];
                        $blogDate = strtotime($row['datePosted']);
                        $blogDate = date("jS F Y, H:i",$blogDate);
                    }
                }
                $CommentsCount = 0;
                $comsqi = "SELECT * FROM COMMENTS WHERE POST_ID=$blogPostID";
                    $comresult = mysqli_query($conn,$comsqi);
    
                    if (mysqli_num_rows($comresult) > 0) {
                        while($comrow = mysqli_fetch_assoc($comresult)){
                            $CommentsCount++;
                        }
                    }
                echo '<div class="userPosts">
                <p class="timeforblog"><img class="clock" src="img/—Pngtree—vector clock icon_3785539.png" alt="logo">'
                ."$blogDate</p>"
                .'<br>'
                .'<h3 class="userPosttitles">'
                ."$blogTitle</h3>"
                .'<br><p class="userPostCont">'
                ."$blogPost"
                ."</p><hr><a class=commCount>$CommentsCount  Comments<a/>";
                if (isset($_SESSION['email']) && (checkIfAdmin($_SESSION['email']) === true )) {

                    echo "<a class=deleteBtn onclick='return ConfirmDelete()' href=deleteBlog.php?bid=$blogPostID>Delete</a>";
                }
                echo "</div>";
            ?>
            
            <div class="commenting">
                <?php
                echo "<form class=add-comment-form action=processComments.php?bid=$blogPostID method=POST>";?>
                <div class="textstuff">
                    <?php

                        if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                            echo '<textarea rows='."'1'".' class="comment-post" placeholder="Enter your comment here" name="com-cont"></textarea>';
                        }
                        else {
                            echo '<a href="login.php"><textarea rows='."'1'".'class="comment-post" placeholder="Login to comment" name="com-cont"></textarea></a>';
                        }
                    ?>
                
                </div>
                
                <div class="submitstuff">
                    <input type="reset" class="cancel" value="CANCEL"></input>
                
                    <input type="submit" value="REPLY">
                </div>

            </form>
            
            <?php
            if (count($CommentsPost)>0) {

                $sortedComm = commsortarray($CommentsPost,'datePosted');
            
                for ($i=0; $i < count($sortedComm) ; $i++) { 
                
                    $CommentPost = $sortedComm[$i]['message'];
                    $commentUser = $sortedComm[$i]['USER_ID'];
                    $commentID = $sortedComm[$i]['ID'];
                    $timeAgo = time_since($sortedComm[$i]['datePosted']);
                
                    $sql = "SELECT * FROM USERS WHERE ID='$commentUser'";
                    $result = mysqli_query($conn,$sql);
                
                    if(mysqli_num_rows($result) === 1){
                        $row = mysqli_fetch_assoc($result);
                        $userName = $row["firstName"];
                    }

                    echo '<div class="CommentPosts">'
                    .'<p class="timeforblog"><img class="clock" src="img/—Pngtree—vector clock icon_3785539.png" alt="logo">'
                    ."$timeAgo</p>"
                    .'<h3 class="userPosttitles">'
                    .$userName
                    ."</h3><br>"
                    .'<p class="userPostCont">'
                    ."$CommentPost"
                    ."</p>";

                    if (isset($_SESSION['email']) && (checkIfAdmin($_SESSION['email']) === true )) {

                        echo "<hr><a class=deleteBtn onclick='return ConfirmDelete()' href=deleteComment.php?cid=$commentID&bid=$blogPostID>Delete</a>";
                    }

                    echo "</div>";
                }
            }
                ?>
            
        </div> 
    </div>  
</div>

<script src="main.js"></script>
</body>
</html>
