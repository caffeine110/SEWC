<?php
    session_start();


    if (isset($_POST['submit'])){
    include_once 'dbconf.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


    //errors handlers
    if( empty($uid) || empty($pwd)){
        header("Location: /Development/SEWC/index.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM user_hire WHERE username='$uid' OR user_email='$uid' ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
            header("Location: /Development/SEWC/index.php?login=user-not-found");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)) {
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);

                if($hashedPwdCheck == False) {
                    //incorrect password
                    header("Location: /Development/SEWC/index.php?login=incorrect_pwd");
                    exit();
                    
                }elseif($hashedPwdCheck == TRUE) {
                    // login succesfull
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_fname'] = $row['user_firstname'];
                    $_SESSION['u_mname'] = $row['user_midname'];
                    $_SESSION['u_lname'] = $row['user_lastname'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u-mono1'] = $row['user_mono1'];
                    $_SESSION['u-username'] = $row['user_uid'];
                    #$_SESSION['u-uid'] = $row['user_uid'];
                    #$_SESSION['u-uid'] = $row['user_uid'];
                    

                    header("Location: /Development/SEWC/index.php?login=success");
                    exit();
                }
            }
        }
    }

}else{
    header("Location: /Development/SEWC/index.php?login=error");
    exit();
}