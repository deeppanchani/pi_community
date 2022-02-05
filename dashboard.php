<?php

if (isset($_POST["submit"])) {
    print_r($_POST);
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $bio = $_POST["bio"];
    $college = $_POST["college"];
    $github = $_POST["github"];
    $linkedin = $_POST["linkedin"];
    $img = $_POST["img"];
}else {
    $fname = "John";
    $lname = "Doe";
    $bio = "Web developer";
    $college = "IIIT nagpur";
    $github = "#";
    $linkedin = "#";
    $img = "./images/profile_img.svg";
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
        <li><a href="index.html">Home</a></li>
        <li><a href="blogs.html">Blogs</a></li>
        <li><a href="team.html">Team</a></li>
        <li style="float:right"></li>
        <li style="float:right"><a class="active" href="dashboard.php">Dashboard</a></li>
    </ul>
    <!--End of Nav Bar Section-->

    <!-- Start of the content section -->
    <div class="container_dashboard">
        <div class="biodata">
            <img src="./images/profile_img.svg" alt="Profile Pic" id="profile_pic">
            <!-- <img src="<?php echo $img; ?>" alt="Profile Pic" id="profile_pic"> -->
   
            <div id="biodata">
                <h3><?php echo $fname. " ". $lname; ?></h3>  
                <?php echo $bio; ?> <br>
                Student at <?php echo $college; ?>
            </div>

            <div id="social_media">
                <a href="<?php echo $github; ?>"><img src="images/github.svg" alt="GitHub Logo" width="30px"></a>
                <a href="<?php echo $linkedin ?>"><img src="images/linkedin.svg" alt="LinkedIn Logo" width="30px"></a>
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
        
        <button><a href="./editprofile.html">Edit Profile</a> </button>
        <button><a href="./addblog.html">New Blog</a> </button>
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