<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suleiman's Portfolio - Sign In</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/portfolioLogo.png">
    </head>
    <body>
        <header class="top-bar">
            <div class="title">
                <a href="index.php"><img class="logo" src="img/portfolioLogo.png" alt="logo"></a>
                
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

                    <a href="login.html" class="login">Login</a>

                </ul>

            </nav>
            
                
        </header>
        <div class="main-container">
            <form class="login-form" action="ProcessLogin.php" method="POST">
                <legend>Sign in</legend>
                
                <?php
                if (isset($_GET['error'])) { ?>
                <p class="error">
                    <br>
                    <?php
                     echo $_GET['error'];
                     ?>
                </p>
                     <?php } ?>

                <input type="email" class="username" placeholder="Email" name="uname">
                <input type="password" class="password" placeholder="Password" name="password">
                <input type="submit" value="Login">

            </form>
            
            </div>
        </div>
    </body>
</html>
