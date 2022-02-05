<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Start of Meta Discrption-->
    <meta charset="UTF-8">
    <meta name="description" content="Open Source Community Site">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Deep Panchani, Yogesh Sewada">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--End of Meta Discrption-->

    <title>App Development | Pi Community Open-Source Community</title>

    <!--Start of External Files-->
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts/scripts.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap">
    <!--End of External Files-->

    <!--Adding Favicon-->
    <link rel="icon" type="image/svg" href="images/favicon.svg">
</head>
<body>
    <!--Start of Nav Bar Section-->
    <ul>
        <li></li>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="blogs.php">Blogs</a></li>
        <li><a href="team.php">Team</a></li>
        <li style="float:right;"></li>
        <?php

            if(isset($_SESSION["email"])){
                echo "<li style='float:right;'><a href='./includes/logout.inc.php'> Logout </a></li>";
                echo "<li style='float:right;'><a href='dashboard.php'>".$_SESSION["fname"]." ".$_SESSION["lname"]."</a></li>";
            }
            else{
                echo "<li style='float:right;'><a href='signup.php'>Sign Up</a></li>";
                echo "<li style='float:right;'><a href='signin.php'>Sign In</a></li>";
            }

        ?>
    </ul>
    <!--End of Nav Bar Section-->

    <!--Start of Content Section-->
    <section class="content">
        <div class="heading">App <span class="thin">Development</span></div>
        <div class="heading2">Project <span class="thin">List</span></div>
        <div class="project">
            <div class="project-card">
                <a href="https://github.com/deeppanchani/pi_community"><span class="heading3">Project Name</span></a>
                <div class="heading4">App Development, Java, XML</div>
                <p>Quisque vel quam mi. Etiam euismod, orci sit amet blandit posuere, nunc urna porttitor lorem, ut faucibus quam dui viverra libero. Etiam nec auctor dui. Nullam sollicitudin lectus orci, ut gravida libero tempor in.</p>
            </div>
            <div class="project-card">
                <a href="https://github.com/deeppanchani/pi_community"><span class="heading3">Project Name</span></a>
                <div class="heading4">App Development, Flutter, Dart</div>
                <p>Quisque vel quam mi. Etiam euismod, orci sit amet blandit posuere, nunc urna porttitor lorem, ut faucibus quam dui viverra libero. Etiam nec auctor dui. Nullam sollicitudin lectus orci, ut gravida libero tempor in.</p>
            </div>
            <div class="project-card">
                <a href="https://github.com/deeppanchani/pi_community"><span class="heading3">Project Name</span></a>
                <div class="heading4">App Development, Java, XML</div>
                <p>Quisque vel quam mi. Etiam euismod, orci sit amet blandit posuere, nunc urna porttitor lorem, ut faucibus quam dui viverra libero. Etiam nec auctor dui. Nullam sollicitudin lectus orci, ut gravida libero tempor in.</p>
            </div>
            <div class="project-card">
                <a href="https://github.com/deeppanchani/pi_community"><span class="heading3">Project Name</span></a>
                <div class="heading4">App Development, Flutter, Dart</div>
                <p>Quisque vel quam mi. Etiam euismod, orci sit amet blandit posuere, nunc urna porttitor lorem, ut faucibus quam dui viverra libero. Etiam nec auctor dui. Nullam sollicitudin lectus orci, ut gravida libero tempor in.</p>
            </div>
        </div>
        <div class="heading2">Contributors</div>
        <div class="contributors">
            <div class="contributors-card">
                <a href="https://github.com/deeppanchani">
                    <img src="images/profile_img.svg" alt="Profile Photo" width="70px">
                    <p>Deep Panchani</p>
                </a>
            </div>
            <div class="contributors-card">
                <a href="https://github.com/deeppanchani">
                    <img src="images/profile_img.svg" alt="Profile Photo" width="70px">
                    <p>Deep Panchani</p>
                </a>
            </div>
            <div class="contributors-card">
                <a href="https://github.com/deeppanchani">
                    <img src="images/profile_img.svg" alt="Profile Photo" width="70px">
                    <p>Deep Panchani</p>
                </a>
            </div>
            <div class="contributors-card">
                <a href="https://github.com/SakataGintoki0">
                    <img src="images/profile_img.svg" alt="Profile Photo" width="70px">
                    <p>Yogesh Sewada</p>
                </a>
            </div>
            <div class="contributors-card">
                <a href="https://github.com/SakataGintoki0">
                    <img src="images/profile_img.svg" alt="Profile Photo" width="70px">
                    <p>Yogesh Sewada</p>
                </a>
            </div>
            <div class="contributors-card">
                <a href="https://github.com/SakataGintoki0">
                    <img src="images/profile_img.svg" alt="Profile Photo" width="70px">
                    <p>Yogesh Sewada</p>
                </a>
            </div>
        </div>
    </section>
    <!--End of Content Section-->

    <!--Start of Footer Section-->
    <div class="footer">
        <div>
            <a href="https://github.com/deeppanchani/pi_community"><img src="images/github.svg" alt="GitHub Logo" width="30px"></a>
            <a href="https://www.linkedin.com"><img src="images/linkedin.svg" alt="LinkedIn Logo" width="30px"></a>
        </div>
    </div>
    <!--End of Footer Section-->
</body>
</html>