<?php

    if(isset($_POST["signin"])){
        $email = (isset($_POST['email']) ? $_POST['email'] : '');
        $pwd = (isset($_POST['pwd']) ? $_POST['pwd'] : '');

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(invalidEmail($email) !== FALSE){
            header("location: ../signin.php?error=invalidemail");
            exit();            
        }

        loginUser($conn, $email, $pwd);

    }
    else{
        header("location: ../signin.php");
        exit();
    }