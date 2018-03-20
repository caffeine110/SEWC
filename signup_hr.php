<?php
    include 'codebox/header.php'
?>

<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/form.css">



<section id="signup">
    <div class="continer">
        <h2 style="text-align:center;">Sign Up | Hire</h2>
        <form class="signup-form" action="/Development/SEWC/codebox/hire/hr_signup.php" method="POST">
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

<!--            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

-->

            <button class="button-one"type="submit" name="submit" >Sign-Up</button>
        </form>



    </div>


</section>

<style>
    .container h2{
        

    }
</style>



<?php
    include 'codebox/footer.php'
?>