<?php
    session_start();

    if(isset($_POST["submit"])){
        $bio = (isset($_POST['bio']) ? $_POST['bio'] : '');
        $github = (isset($_POST['github']) ? $_POST['github'] : '');
        $linkedin = (isset($_POST['linkedin']) ? $_POST['linkedin'] : '');
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';



        $sql = "UPDATE users SET bio=?, userGithub=?, userLinkedin=? WHERE userEmail=?";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("ssss", $bio,$github,$linkedin,$_SESSION["email"]);
        $stmt->execute();
        mysqli_stmt_close($stmt);
        $_SESSION["bio"]=$bio;
        $_SESSION["github"]=$github;
        $_SESSION["linkedin"]=$linkedin;
        header("location: ../dashboard.php"); 
        exit();
    }
    else{
        header("location: ../editprofile.php");
        exit();
    }