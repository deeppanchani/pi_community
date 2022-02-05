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

    <title>Edit Profile | Pi Community Open-Source Community</title>

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

    <!-- Start of the content section -->
    <div class="container_editProfile">
        <form action="./includes/editprofile.inc.php" method="POST">
            
            <div class="Edit_container">
                <div class="Edit_form">
                        <span class="form_lables">Bio</span>  <input name="bio" type="text" class="Square">
                        <span class="form_lables">Github Id</span>  <input name="github" type="url" class="Square">
                        <span class="form_lables">Linkedin Id</span>  <input name="linkedin" type="url" class="Square">                     
                        <span class="form_lables">Upload Your Image</span> <input class="btn-black" type="file" id="img" name="img" accept="image/*">
                </div>
            </div>
            <div class="footer_edit_dashboard">
                <button name="submit" type="submit">Submit</button>   
                <button name="cancel"><a href="./editprofile.php">Cancel</a> </button>
            </div>
        </form>
    </div>
    <!-- End of the content section -->

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