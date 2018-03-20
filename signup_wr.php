<?php
    include 'codebox/header.php'
?>

<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/form.css">



<section id="signup">
    <div class="continer">
        <h2 style="text-align:center;">Sign Up | Work</h2>
        <form class="signup-form" action="/Development/SEWC/codebox/work/wr_signup.php" method="POST">
            <input type="text" name="firstname" Placeholder="Firstname">
            <input type="text" name="lastname" Placeholder="Lastname">
            <input type="text" name="email" Placeholder="Email">
            <input type="text" name="uid" Placeholder="Username">
            <input type="password" name="pwd" Placeholder="Password">
            <button class="button-one"type="submit" name="submit" >Sign-Up</button>
        </form>



    </div>


</section>





<?php
    include 'codebox/footer.php'
?>