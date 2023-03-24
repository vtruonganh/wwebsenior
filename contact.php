<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
 require"header.php";
?>
<div class="contact">
    <div class="contact-text">
        <h2>CONTACT</h2>
        <p>Share The details of your project – like scope, timeframes, or business challenges you’d like to
            solve.</p>
        <div class="mail">
            <div class="mail1">
                <p>Project inquiries:</p>
                <a href="#">devsenioredu@gmail.com</a>
            </div>
            <div class="mail1">
                <p>Careers:</p>
                <a href="#">devsenioredu@gmail.com</a>
            </div>
        </div>
        <h2>Our Offices</h2>
        <div class="address">
            <div class="address1">
                <div>
                    <h3>Viet Nam</h3>
                    <p>Louis City Đai Mỗ, Nam Từ Liêm, Hà Nội</p>
                </div>

            </div>
        </div>
    </div>

    <form class="form">
        <h2>Got an App in Mind? </h2>
        <p type="Name:"><input placeholder="Write your name here.."></input></p>
        <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
        <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
        <div class="btn">
            <button>Send Message</button>
        </div>

    </form>
</div>
<?php
require"footer.php";
?>
</body>
</html>