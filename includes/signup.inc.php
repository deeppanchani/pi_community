<?php

    if(isset($_POST["signup"])){
        $fname = (isset($_POST['fname']) ? $_POST['fname'] : '');
        $lname = (isset($_POST['lname']) ? $_POST['lname'] : '');
        $email = (isset($_POST['email']) ? $_POST['email'] : '');
        $pwd = (isset($_POST['pwd']) ? $_POST['pwd'] : '');

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(invalidEmail($email) !== FALSE){
            header("location: ../signup.php?error=invalidemail");
            exit();            
        }

        if(emailExists($email,$conn) !== FALSE){
            header("location: ../signup.php?error=emailexists");
            exit();            
        }

        if(!preg_match("#.*^(?=.{8,20}).*$#",$pwd)){
            header("location: ../signup.php?error=passwordweak");
            exit();
        }

        createUser($conn,$fname,$lname,$email,$pwd);
    }
    else{
        header("location: ../signup.php");
        exit();
    }