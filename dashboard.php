<?php
    session_start();
?>
<?php
    if(isset($_SESSION["email"])){
    
    }
    else {
        header("location: ./index.php")
    }
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

    <title>Profile Dashboard | Pi Community Open-Source Community</title>

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

    <!-- Start of the content section -->
    <div class="container_dashboard">
        <div class="biodata">
            <?php
                if($_SESSION["pimg"]==0){
                    echo "<img src='./images/profile_img.svg' alt='Profile Pic' id='profile_pic'>";
                }
                else{
                    echo "<img src='./uploads/".$_SESSION["email"].".jpg' alt='Profile Pic' id='profile_pic'>";
                }
            ?>
            
            <div id="biodata">
                <h3><?php echo $_SESSION["fname"]. " ".$_SESSION["lname"]; ?></h3>  
                <?php echo $_SESSION["bio"]; ?> <br>
            </div>

            <div id="social_media">
                <a href="<?php echo $_SESSION["github"]; ?>"><img src="images/github.svg" alt="GitHub Logo" width="30px"></a>
                <a href="<?php echo $_SESSION["linkedin"] ?>"><img src="images/linkedin.svg" alt="LinkedIn Logo" width="30px"></a>
            </div>
        </div>
        <div class="figures">
            <div id="projects">
                <span class="number">9</span><br>
                Projects
            </div>
            <div id="contributions">
                <span class="number">21</span><br>
                Contributions
            </div>
            <div id="Blogs">
                <span class="number">59</span><br>
                Blogs
            </div>
        </div>
    </div>
    <div class="footer_dashboard">
        
        <button><a href="./editprofile.php">Edit Profile</a> </button>
        <button><a href="./addblog.php">New Blog</a> </button>
    </div>
    <!-- Ent of the content section -->

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