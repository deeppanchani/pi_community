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

    <title>Blogs | Pi Community Open-Source Community</title>

    <!--Start of External Files-->
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts/scripts.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <section class="blog">
        <div class="heading">Blog <span class="thin">Post</span></div>
            <form class="explore" action="" method="post">
                <span class="search">
                    <input class="search-bar" type="text" name="search" id="myInput" title="search" onkeyup="myFunction()" placeholder="Search">
                    <select class="drop-down" id="category" name="category">
                        <option value="all">All</option>
                        <option value="webdev">Web Development</option>
                        <option value="appdev">App Development</option>
                        <option value="iot">IoT</option>
                        <option value="design">Design</option>
                    </select>
                    <button class="search-button" type="submit"><img src="images/search.svg" alt="search icon"></button>
                </span>
            </form>
        <script>
            function myFunction() {
                const input = document.getElementById('myInput').value.toUpperCase();
                
                const cardContainer = document.getElementById('blog-list');
                const card = cardContainer.getElementsByClassName('blog-listing');

                for (let i = 0; i < card.length; i++) {
                    let title = card[i].querySelector(".info .b-head a.Heading");
                    console.log(title);

                    if(title.innerText.toUpperCase().indexOf(input) > -1) {
                        card[i].style.display = "";
                    } else {
                        card[i].style.display = "none";
                    }
                }
            }
        </script>

        <div id="blog-list">
            <div class="blog-listing" id="blog">
                <div class="date">1 January, 2022</h1>
                </div>
                <div class="info">
                    <div class="b-head"><a href="blogpost_0.php" class="Heading">How to center a div?</a></div>
                    <div class="b-info">Web Development, HTML, CSS</div>
                    <div class="b-peek">Quisque vel quam mi. Etiam euismod, orci sit amet blandit posuere, nunc urna porttitor lorem, ut faucibus quam dui viverra libero. Etiam nec auctor dui. Nullam sollicitudin lectus orci, ut gravida libero tempor in.</div>
                    <div class="b-profile">
                        <img src="images/profile_img.svg" alt="Profile Picture" width="50px">
                        <span class="b-auth">John Doe</span>
                    </div>
                </div>
            </div>
            <div class="blog-listing" id="blog">
                <div class="date">1 January, 2022</h1>
                </div>
                <div class="info">
                    <div class="b-head"><a href="blogpost_0.php" class="Heading">What is UX Design?</a></div>
                    <div class="b-info">Web Development, HTML, CSS</div>
                    <div class="b-peek">Quisque vel quam mi. Etiam euismod, orci sit amet blandit posuere, nunc urna porttitor lorem, ut faucibus quam dui viverra libero. Etiam nec auctor dui. Nullam sollicitudin lectus orci, ut gravida libero tempor in.</div>
                    <div class="b-profile">
                        <img src="images/profile_img.svg" alt="Profile Picture" width="50px">
                        <span class="b-auth">John Doe</span>
                    </div>
                </div>
            </div>
            <div class="blog-listing" id="blog">
                <div class="date">1 January, 2022</h1>
                </div>
                <div class="info">
                    <div class="b-head"><a href="blogpost_0.php" class="Heading">Learn GitHub</a></div>
                    <div class="b-info">Web Development, HTML, CSS</div>
                    <div class="b-peek">Quisque vel quam mi. Etiam euismod, orci sit amet blandit posuere, nunc urna porttitor lorem, ut faucibus quam dui viverra libero. Etiam nec auctor dui. Nullam sollicitudin lectus orci, ut gravida libero tempor in.</div>
                    <div class="b-profile">
                        <img src="images/profile_img.svg" alt="Profile Picture" width="50px">
                        <span class="b-auth">John Doe</span>
                    </div>
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