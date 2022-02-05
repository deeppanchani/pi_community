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

    <title>Sign Up | Welcome to Pi Community Open-Source Community</title>

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
        <a class="active" href="index.html"><img src="images/logo_heading.svg" alt="pi community" height="40px" style="padding: 10px;"></a>
    </ul>
    <!--End of Nav Bar Section-->

    <!--Start of Form Section-->
    <div class="container_signup">
        <h2><span class="thin">Sign</span> <span class="bold">Up</span> </h2>
        <div class="signup_form">
            <form action="includes/signup.inc.php" method="POST">
               <span class="form_lables" >First Name</span>  <input type="text" name="fname" required>
                <br>
               <span class="form_lables" >Last Name</span>  <input type="text"name="lname" required>
                <br>
               <span class="form_lables" >Email</span>  <input type="email" name="email" required>
                <br>
               <span class="form_lables" >Password</span>  <input type="password" name="pwd" required>
                <br>
               <input type="button" value="Cancel" name="cancel"class="cancel_button">
               <input type="submit" value="Signup" name="signup" class="Sign_button">
            </form>
            <div class="form_footer">Already a member? <a href="./signin.php">Sign In</a></div>
        </div>


    </div>
    <!--End of Form Section-->
</body>
</html>