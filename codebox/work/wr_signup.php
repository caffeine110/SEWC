<?php

    if (isset($_POST['submit'])){

        include_once 'dbconf.php';
        
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


        //Error check
        //check for empty filds

        if(empty($firstname) || empty($lastname) || empty($email) || empty($uid) || empty($pwd)){
            header("Location: /Development/SEWC/signup_wr.php?signup=empty");
            exit();
        }
        else {
            //check if input charectors are empty
            if (!preg_match("/^[a-zA-z]*$/", $firstname) || !preg_match("/^[a-zA-z]*$/", $lastname)){
                header("Location: /Development/SEWC/signup_wr.php?signup=invalid");
                exit();
            }
            else{
                //continue
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: /Development/SEWC/signup_wr.php?signup=email");
                    exit();
                }
                else{
                    $sql= "SELECT * FROM user_work WHERE username='$uid'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0){
                        header("Location: /Development/SEWC/signup_wr.php?signup=usertaken");
                        exit();
                    }
                    else{
                        //hashing password
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO user_work (user_firstname, user_lastname, user_email, username, user_pwd) VALUES ('$firstname', '$lastname', '$email', '$uid', '$hashedPwd');";
 
                        mysqli_query($conn, $sql) or die(mysqli_error($conn));
                        #header("Location: /Development/SEWC/signup_wr.php?signup=success");
                        header("Location: /Development/SEWC/login_wr.php");

                        exit(); 
                    }

                }
            }
        }

    }
    else{
        header("Location: SEWC/signup_wr.php.php");
        exit();
    }


?>