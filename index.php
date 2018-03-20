<?php
    include 'codebox/header.php'
?>

<link rel="stylesheet" href="./assets/css/style.css">





<section id="signup">
    <div class="continer">
        <h2>HOME</h2>

        <?php
            if (isset($_SESSION['u_id'])){
                echo $_SESSION['u_fname'];
                echo $_SESSION['u_lname'];
                echo $_SESSION['u_email'];
                echo $_SESSION['u-uid'];
                echo "\nyou are logged in !";
            }
        ?>

        <p>hello</p>

    </div>
</section>





<?php
    include 'codebox/footer.php'
?>


