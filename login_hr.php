<?php
    include 'codebox/header.php'
?>

<link rel="stylesheet" href="./assets/css/style.css">


<?php

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <meta name="description" content="professional web design">
    <meta name="keywords" content="affordable web design">
    <meta name="author" content="Gaurav Gahukar">
    
    <title>SEWC | WEB Portal</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/login.css">

 </head>



<body>

<section id="login">
    <div class="container">
        <h2 style="text-align:center;">Sign In | HIRE</h2>
        <form class="login-form" action="codebox/hire/hr_login.php" method="POST">
            <input type="text" name="uid" Placeholder="Username / Gmail: ">
            <input type="password" name="pwd" Placeholder="password: ">
            <button class="button-one" type="submit" name="submit">Login</button>
        </form>

        <div>
            <h5>Open a new Account | <a href="signup_hr.php">Sign Up</a></h5>
        </div>
        

    </div>

</section>

    
</body>

</html>








<?php
    include 'codebox/footer.php'
?>
