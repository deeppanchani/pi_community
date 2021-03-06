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

    <title>Blogpost | Pi Community Open-Source Community</title>

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

    <!--Start of Blog Section-->
    <section class="blog-post">
        <div class="blog-image">
            <img src="images/blog_banner.png" alt="Photo" width="966px">
        </div>

        <div class="blog-body">
            <div class="blog-head">
                <div class="blog-h">How To Center A Div?</div>
                <div class="blog-info">
                    <span>1 January, 2021</span>
                    <span>Web Development, HTML, CSS</span>
                </div>
                <div class="blog-auth">
                    <img src="images/profile_img.svg" alt="Profile Picure" width="50px">
                    <span class="auth">John Doe</span>
                </div>
            </div>
            <div class="blog-content">
                <p>Suspendisse molestie orci non tortor consectetur, nec varius ex commodo. Morbi vestibulum tincidunt erat sit amet feugiat. Praesent vestibulum ornare ultricies. Curabitur porttitor molestie felis nec tristique. Curabitur congue, ipsum at varius malesuada, metus dolor lacinia nisi, quis aliquam lorem nulla id diam. In posuere eu tellus a tempus. Sed eu risus interdum urna auctor elementum a ut quam. Curabitur sit amet mattis justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <p>Nam non lacus risus. Maecenas vulputate maximus dolor, eget viverra ipsum fermentum eget. Mauris a magna quis tellus facilisis mattis eu nec nisl. Curabitur nec enim egestas, bibendum massa eu, accumsan lectus. Maecenas egestas luctus pulvinar. Sed pulvinar pulvinar ex at sollicitudin. Duis vel erat eu nunc aliquet congue. Ut vitae leo condimentum, ultrices sapien non, tincidunt dui. Ut non ornare ligula. Suspendisse eu arcu et ipsum ornare vestibulum nec ornare felis. Pellentesque et elit hendrerit mi suscipit pellentesque at quis ex. In nec scelerisque tellus. Donec eget risus viverra, iaculis libero pellentesque, facilisis felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc cursus neque at ultrices pellentesque. Proin vel congue tellus.</p>
                <p>Mauris lorem turpis, tristique nec lorem et, eleifend gravida odio. Pellentesque pulvinar rhoncus velit. Nulla ac odio suscipit ligula elementum efficitur ac nec nisi. Ut consequat nisl quis magna eleifend, in varius nisl vulputate. Donec fermentum mollis feugiat. Donec lacinia lobortis purus, vel fermentum neque hendrerit id. Phasellus commodo suscipit felis, id sollicitudin magna imperdiet non. Phasellus auctor sapien quis rutrum sagittis. In congue vestibulum sem. Duis fringilla, ligula nec viverra euismod, quam neque tincidunt tellus, ultricies luctus risus justo non tortor. Sed quis tortor ut massa porttitor blandit. Vestibulum semper sem et sapien efficitur, eu iaculis felis porttitor. Sed congue est risus, ac sagittis sem fermentum sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
        </div>

        <div class="blog-h1">Blog <span class="thin">Recommendation</span></div>
        <div class="blog-recommendation">
            <div class="blog-small">
                <div class="blog-h2"><a href="blogpost_1.php">How To Center A Div?</a></div>
                <div class="blog-info">
                    <span>1 January, 2021</span><br>
                    <span>Web Development, HTML, CSS</span>
                </div>
                <div class="blog-auth">
                    <img src="images/profile_img.svg" alt="Profile Picure" width="50px">
                    <span class="auth">Jane Doe</span>
                </div>
            </div>
            <div class="blog-small">
                <div class="blog-h2"><a href="blogpost_1.php">How To Center A Div?</a></div>
                <div class="blog-info">
                    <span>1 January, 2021</span><br>
                    <span>Web Development, HTML, CSS</span>
                </div>
                <div class="blog-auth">
                    <img src="images/profile_img.svg" alt="Profile Picure" width="50px">
                    <span class="auth">Jane Doe</span>
                </div>
            </div>
            <div class="blog-small">
                <div class="blog-h2"><a href="blogpost_1.php">How To Center A Div?</a></div>
                <div class="blog-info">
                    <span>1 January, 2021</span><br>
                    <span>Web Development, HTML, CSS</span>
                </div>
                <div class="blog-auth">
                    <img src="images/profile_img.svg" alt="Profile Picure" width="50px">
                    <span class="auth">Jane Doe</span>
                </div>
            </div>
        </div>
    </section>
    <!--End of Blog Section-->

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