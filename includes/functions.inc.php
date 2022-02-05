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
        $sql = "SELECT * FROM users WHERE usersEmail = ?;";
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
        $sql = "INSERT INTO users (fullName, lastName, usersEmail, usersPwd, bio, userProfile, usersGithub, usersLinkedin) VALUES (?,?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $nullvar=NULL;
        $isphoto=0;

        $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

        echo $hashpwd;
        mysqli_stmt_bind_param($stmt,"sssssiss",$fname,$lname,$email,$hashpwd,$nullvar,$isphoto,$nullvar,$nullvar,);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none".$pwd);
        exit();
    }