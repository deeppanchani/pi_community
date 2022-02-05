<?php

    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result=true;
        }
        else {
            $result=false;
        }
        return $result;
    }

    function emailExists($email,$conn){
        $sql = "SELECT * FROM users WHERE userEmail = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($conn,$fname,$lname,$email,$pwd){
        $sql = "INSERT INTO users (fName, lName, userEmail, userPwd, bio, userProfile, userGithub, userLinkedin) VALUES (?,?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $isphoto=0;
        $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        mysqli_stmt_bind_param($stmt,"sssssiss",$fname,$lname,$email,$hashpwd,$isphoto,$isphoto,$isphoto,$isphoto);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
        exit();
    }

    function loginUser($conn, $email, $pwd){
        $userexists = emailExists($email,$conn);

        if($userexists=== false){
            header("location: ../signin.php?error=nouser");
            exit();
        }       
        
        $hashpwd = $userexists["userPwd"];
        $checkpwd = password_verify($pwd, $hashpwd);

        if($checkpwd === false){
            header("location: ../signin.php?error=wrongpwd");
            exit();
        }
        else if($checkpwd === true){
            session_start(); 
            $_SESSION["email"]=$userexists["userEmail"];
            $_SESSION["fname"]=$userexists["fname"];
            $_SESSION["lname"]=$userexists["lname"];
            $_SESSION["bio"]=$userexists["bio"];
            $_SESSION["github"]=$userexists["userGithub"];
            $_SESSION["linkedin"]=$userexists["UserLinkedin"];
            $_SESSION["pimg"]=$userexists["userProfile"];
            header("location: ../index.php");
            exit();
        }
    }