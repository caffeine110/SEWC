<?php
    session_start();
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

 </head>

<body>
    
    <header>
        <div class="container">
            <div id="branding">
                <a href="index.php"><h1><span class="highlight">SEWC</span>PORTAL</h1></a>
            </div>
    
            <nav>
                <div class="nav-login">
 
                    <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<form action="/Development/SEWC/codebox/logout.php" method="POST">
                                <button class="button-one" type="submit" name="submit">Log-Out</button>
                                </form>
                            ' ;
                            
                        }else {
/*                            echo '
                                <form action="codebox/.php" method="POST">
                                    <input type="text" name="uid" Placeholder="Username / Gmail: ">
                                    <input type="password" name="pwd" Placeholder="password: ">
                                    <button class="button-one" type="submit" name="submit">Login</button>
                                    <a href="signup.php">Sign Up</a>
                                </form>
                            ';
*/
                            echo '
                                <a href="login_wr.php">Work Login</a>
                                <a href="login_hr.php">Hire Login</a>
                                <a href="about.php">About</a>
                                <a href="services.php">Services</a>
                                <a href="contact.php">Sontact Us</a>
                                <a href="help.php">Help</a>

                            ';

                        }

                    ?>
 

                </div>
            </nav>
        </div>
    </header>

    <section>
        <div class="container">
            <div class= "header-section">

<!--
                <a href="/Development/SEWC/signup_wr.php"><h1>Want to Work ||</h1></a>
                <a href="/Development/SEWC/signup_hr.php"><h1>Want to Hire</h1></a>
-->

                <h1><a href="/Development/SEWC/login_wr.php">Want to Work </a>||<a href="/Development/SEWC/login_hr.php"> Want to Hire</a></h1>



<!--

                <form action="/Development/SEWC/signup_wr.php" method="POST">
                    <button type="button" class="btn btn-primary"><h1>want to work</h1></button>            
                </form>

                <form action="/Development/SEWC/signup_hr.php" method="POST">
                    <button type="button" class="btn btn-primary"><h1>want to hire</h1></button>            
                </form>
-->  


            </div>
        </div>
    
    </section>


    <style>
        .header-section {
            width : 100%;
            height : 300px;
            text-align :center;
            margin-top: 100px;
        }
        .header-header a{
            text-decoration :none;
            display : inline;
        }
    
    </style>