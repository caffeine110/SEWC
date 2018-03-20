<?php
    include 'codebox/header.php'
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color:gray;  
    }

        #contact-form {
            width:50%;
            margin: auto;
            background-color:gray;
        }
            
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: wheat;
            color: black;
            font-weight:bold;
            padding: 12px 20px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: goldenrod;
        }

        .container {
            border-radius: 5px;
            background-color: #4C4948;
            padding: 20px;
        }


    </style>

</head>
<body>

<h3>Contact Form</h3>
<section id="contact-form">
    <div class="container">
    <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
    </div>

</section>


</body>
</html>



<?php
    include 'codebox/footer.php'
?>
