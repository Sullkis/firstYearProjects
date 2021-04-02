<?php

session_start();

include 'connection.php';
include 'sortBlogEntries.php';

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
                if (($_SESSION['login']) === true) {
                    echo '<a href="addPost.php" class="addPostBtn">Add to Post</a>';
                }
            ?>
            <?php
                $sqi = "SELECT * FROM BLOGPOSTS";
                $result = mysqli_query($conn,$sqi);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)){
                        $blogDatas[] = $row;
                    }
                }
				if(!empty($blogDatas)){
					$sorted = sortarray($blogDatas,'datePosted');
					
					for ($i=0; $i < count($sorted); $i++) {
                    $toPrintTime = $sorted[$i]['datePosted']; 
                    $toPrintTitle = $sorted[$i]['postTitle'];
                    $toPrintPost = $sorted[$i]['postCont'];
						echo '<div class="userPosts">
                    <p class="timeforblog"><img class="clock" src="img/—Pngtree—vector clock icon_3785539.png" alt="logo">'
                    ."$toPrintTime</p>"
                    .'<br>'
                    .'<h3 class="userPosttitles">'
                    ."$toPrintTitle</h3>"
                    .'<br><p class="userPostCont">'
                    ."$toPrintPost"
                    .'</p> 
					</div>
                    <hr>';
                	}
				}
				else{
					echo '<div class="userPosts">
                    <p class="timeforblog"> '
                    ."</p>"
                    .'<br>'
                    .'<h3 class="userPosttitles">'
                    ."</h3>"
                    .'<br><p class="userPostCont">'
                    .' </p></div>';
				}   
            ?>
            </div>
        </div>
        <script src="main.js"></script>
    </body>
</html>
