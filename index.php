<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- java script animation plugin start -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- java script animation plugin end -->

    <!--Start of Meta Discrption-->
    <meta charset="UTF-8">
    <meta name="description" content="Open Source Community Site">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Deep Panchani, Yogesh Sewada">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--End of Meta Discrption-->

    <title>Pi Community Open-Source Community</title>

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

    <!--Start of home-->
    <section>
        <div class="landing">
            <div class="hero-content">
                <div class="hero-h">pi <span class="thin">COMMUNITY</span></div>
                <div class="hero-p"><span class="thin">An</span> Open-Sourse Community. <span class="thin">We promote</span> pi-based learning.</div>
                <div class="hero-p">Join Us <span class="thin">today and</span> start a new jorney <span class="thin">in field of </span> Open Source.</div>
                <button onclick="location.href='signup.php'" class="btn-submit" style="margin-left: 30px; margin-right: 30px;">Sign Up</button>
                <button onclick="location.href='signin.php'" class="btn-submit" style="margin-left: 30px; margin-right: 30px;">Sign In</button>
            </div>
        </div>
        <div class="groups">
            <div class="hero-h">Groups</div>
            <div class="grp-wrapper">
                <div class="grp-card" data-aos="fade-right">
                    <div class="grp-img">
                        <img src="images/web_dev.svg" alt="web development picture">
                    </div>
                    <div class="grp-name">
                        Web <span class="thin">Development</span>
                    </div>
                    <div>
                        <button class="grp-btn" onclick="location.href='webdev.php'">Click To Know More</button>
                    </div>
                </div>
                <div class="grp-card" data-aos="fade-left">
                    <div class="grp-img">
                        <img src="images/app_dev.svg" alt="app development picture">
                    </div>
                    <div class="grp-name">
                        App <span class="thin">Development</span>
                    </div>
                    <div>
                        <button class="grp-btn" onclick="location.href='appdev.php'">Click To Know More</button>
                    </div>
                </div>
                <div class="grp-card" data-aos="fade-right">
                    <div class="grp-img">
                        <img src="images/iot.svg" alt="Internet of Things picture">
                    </div>
                    <div class="grp-name">
                        Internet <span class="thin">of</span> Things
                    </div>
                    <div>
                        <button class="grp-btn" onclick="location.href='iot.php'">Click To Know More</button>
                    </div>
                </div>
                <div class="grp-card" data-aos="fade-left">
                    <div class="grp-img">
                        <img src="images/designing.svg" alt="Designing picture">
                    </div>
                    <div class="grp-name">
                        Designing
                    </div>
                    <div>
                        <button class="grp-btn" onclick="location.href='design.php'">Click To Know More</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="portfolio">
            <div class="detail-cards">
                <div class="detail-img">
                    <img src="images/project.svg" alt="Projects">
                </div>
                <div class="details">
                    <span class="num">50+</span>
                     Projects
                </div>
            </div>
            <div class="detail-cards">
                <div class="detail-img">
                    <img src="images/contributors.svg" alt="Projects">
                </div>
                <div class="details">
                    <span class="num">200+</span>
                     Contributors
                </div>
            </div>
            <div class="detail-cards">
                <div class="detail-img">
                    <img src="images/blog.svg" alt="Projects">
                </div>
                <div class="details">
                    <span class="num">300+</span>
                     Blogs
                </div>
            </div>
        </div>

        <div class="newsletter">
            <div class="text">
                <span class="thin">Subscribe to</span><br>Newsletter
            </div>
            <div class="letter-email">
                <form action="" method="post">
                    <input class="e-e" type="email" name="Email" id="email" placeholder="Enter your email address">
                    <input class="e-s" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
    <!--End of home-->

    <!--Start of Footer Section-->
    <div class="footer">
        <div>
            <a href="https://github.com/deeppanchani/pi_community"><img src="images/github.svg" alt="GitHub Logo" width="30px"></a>
            <a href="https://www.linkedin.com"><img src="images/linkedin.svg" alt="LinkedIn Logo" width="30px"></a>
        </div>
    </div>
    <!--End of Footer Section-->

    <!-- starting of js -->
    <script src="./scripts/scripts.js"></script>
    <!-- fade effect plugin -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
         AOS.init();
    </script>
    <!-- fade effect plugin -->
    <!-- ending of js -->
</body>
</html>