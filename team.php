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

    <title>Our Team | Pi Community Open-Source Community</title>

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
<body style="background-color: #202020;">
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

    <!--Start of Team Section-->
    <section class="team">
        <div class="land-img" style="background-image: url('images/team.png');height: 700px;">
            <div class="center">
                <div class="team-h">Meet <span class="thin">Our</span> Team</div>
                <div class="team-h1">Transforming the Open Source Community.</div>
            </div>
        </div>
        <div class="member">
            <div class="member-card">
                <div class="member-img">
                    <img src="images/profile_img.svg" alt="Profile Picture" width="150px">
                </div>
                <div class="member-info-wrap">
                    <div class="member-name">Deep Pacnchani</div>
                    <div class="member-field">Web Development</div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/deep-panchani-7805861b5/"><img src="images/linkedin.svg" alt="LinkedIn Link" width="50px"></a>
                        <a href="https://github.com/deeppanchani"><img src="images/github.svg" alt="GitHub Link" width="50px"></a>
                    </div>
                </div>
            </div>
            <div class="member-card">
                <div class="member-img">
                    <img src="images/profile_img.svg" alt="Profile Picture" width="150px">
                </div>
                <div class="member-info-wrap">
                    <div class="member-name">Yogesh Sewada</div>
                    <div class="member-field">App Development</div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/yogesh-sewada-83aaa3201/"><img src="images/linkedin.svg" alt="LinkedIn Link" width="50px"></a>
                        <a href="https://github.com/deeppanchani"><img src="images/github.svg" alt="GitHub Link" width="50px"></a>
                    </div>
                </div>
            </div>
            <div class="member-card">
                <div class="member-img">
                    <img src="images/profile_img.svg" alt="Profile Picture" width="150px">
                </div>
                <div class="member-info-wrap">
                    <div class="member-name">Deep Pacnchani</div>
                    <div class="member-field">Web Development</div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/deep-panchani-7805861b5/"><img src="images/linkedin.svg" alt="LinkedIn Link" width="50px"></a>
                        <a href="https://github.com/deeppanchani"><img src="images/github.svg" alt="GitHub Link" width="50px"></a>
                    </div>
                </div>
            </div>
            <div class="member-card">
                <div class="member-img">
                    <img src="images/profile_img.svg" alt="Profile Picture" width="150px">
                </div>
                <div class="member-info-wrap">
                    <div class="member-name">Yogesh Sewada</div>
                    <div class="member-field">App Development</div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/yogesh-sewada-83aaa3201/"><img src="images/linkedin.svg" alt="LinkedIn Link" width="50px"></a>
                        <a href="https://github.com/deeppanchani"><img src="images/github.svg" alt="GitHub Link" width="50px"></a>
                    </div>
                </div>
            </div>
            <div class="member-card">
                <div class="member-img">
                    <img src="images/profile_img.svg" alt="Profile Picture" width="150px">
                </div>
                <div class="member-info-wrap">
                    <div class="member-name">Deep Pacnchani</div>
                    <div class="member-field">Web Development</div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/deep-panchani-7805861b5/"><img src="images/linkedin.svg" alt="LinkedIn Link" width="50px"></a>
                        <a href="https://github.com/deeppanchani"><img src="images/github.svg" alt="GitHub Link" width="50px"></a>
                    </div>
                </div>
            </div>
            <div class="member-card">
                <div class="member-img">
                    <img src="images/profile_img.svg" alt="Profile Picture" width="150px">
                </div>
                <div class="member-info-wrap">
                    <div class="member-name">Yogesh Sewada</div>
                    <div class="member-field">App Development</div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/yogesh-sewada-83aaa3201/"><img src="images/linkedin.svg" alt="LinkedIn Link" width="50px"></a>
                        <a href="https://github.com/deeppanchani"><img src="images/github.svg" alt="GitHub Link" width="50px"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Team Section-->

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