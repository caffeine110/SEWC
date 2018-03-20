<?php

?>
<?php
    include 'codebox/header.php'
?>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/login.css">



<html>

<section id="login">
    <div class="container">
        <h2 style="text-align:center;">Sign in | WORK</h2>
        <form  style="text-align:center"  class="login-form" action="codebox/work/wr_login.php" method="POST">
            <input type="text" name="uid" Placeholder="Username / Gmail: ">
            <input type="password" name="pwd" Placeholder="password: ">
            <button class="button-one" type="submit" name="submit">Login</button>
        </form>

        <div>
            <h5>Open a new Account | <a href="signup_wr.php">Sign Up</a></h5>
        </div>
        

    </div>
</section>



</html>

<?php
    include 'codebox/footer.php'
?>
