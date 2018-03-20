<?php

    if (isset($_POST['submit'])){

        include_once 'dbconf.php';
        
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $midname = mysqli_real_escape_string($conn, $_POST['midname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        $mono_no1 = mysqli_real_escape_string($conn, $_POST['mono_no1']);
        $local_address = mysqli_real_escape_string($conn, $_POST['local_address']);
        $permanant_address = mysqli_real_escape_string($conn, $_POST['permanant_address']);
        $city  = mysqli_real_escape_string($conn, $_POST['city']);
        $distric  = mysqli_real_escape_string($conn, $_POST['distric']);
        $state  = mysqli_real_escape_string($conn, $_POST['state']);
        
      
        //Error check
        //check for empty filds

        if(empty($firstname) || empty($midname) || empty($lastname) || empty($email) || empty($uid) || empty($pwd) || empty($city) || empty($distric) || empty($state)) {
            header("Location: /Development/SEWC/signup_hr.php?signup=empty");
          
        }
        else {
            //check if input charectors are empty
            if (!preg_match("/^[a-zA-z]*$/", $firstname) || !preg_match("/^[a-zA-z]*$/", $midname) || !preg_match("/^[a-zA-z]*$/", $lastname)){
                header("Location: /Development/SEWC/signup_hr.php?signup=invalid");
                exit();
            }
            else{
                //continue
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: /Development/SEWC/signup_hr.php?signup=email");
                    exit();
                }
                else{
                    $sql= "SELECT * FROM user_hire WHERE username='$uid'";
                    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0){
                        header("Location: /Development/SEWC/signup_hr.php?signup=usertaken");
                        exit();
                    }
                    else{
                        //hashing password
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO user_hire (user_firstname, user_midname, user_lastname, user_email, user_mono1, username, user_pwd, local_address, permanant_address, city, distric ,u_state ) VALUES ('$firstname', '$midname', '$lastname', '$email', '$mono_no1', '$uid', '$hashedPwd', '$local_address', '$permanant_address', '$city','$distric', '$state');";
 
                        mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
                        exit();
                        #header("Location: SEWC/signup_hr.php?signup=success");
                        header("Location: /Development/SEWC/login_hr.php");

                        exit(); 
                    }


                }
            }
        }

    }
    else{
        header("Location: SEWC/signup_hr.php.php");
        exit();
    }




?>





<!--  
            <input type="text" name="firstname" Placeholder="Firstname">
            <input type="text" name="midname" Placeholder="Midname">
            <input type="text" name="lastname" Placeholder="Lastname">
            <input type="text" name="email" Placeholder="Email">
            <input type="text" name="mono_no1" Placeholder="Mono_no1">
            <input type="text" name="uid" Placeholder="Username">
            <input type="password" name="pwd" Placeholder="Password">
            <input type="text" name="local_address" Placeholder="Local_address">
            <input type="text" name="permanant_address" Placeholder="Permanant_address">
            <input type="text" name="city" Placeholder="City">
            <input type="text" name="distric" Placeholder="Distric">
            <input type="text" name="state" Placeholder="State">

-->