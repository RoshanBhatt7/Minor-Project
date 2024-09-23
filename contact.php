<?php
$conn =mysqli_connect('localhost','root','contact_db');

if(isset($_POST['send']))
{

$name = $_POST['name'];
$email= $_POST['email'];
$number = $_POST['number'];
$plan = $_POST['plan'];
$address= $_POST['address'];
$message = $_POST['message'];


$insert ="INSERT INTO 'contact_form'('id','name','email','number','plan','message')
VALUES ('$name','$email','$number','$plan','$address','$message')";


mysqli_query($conn, $insert);

header('location:contact.php');


}






?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">

</head>

<body>





    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="contact">

            <h1 class="heading">Contact Us</h1>

            <form action="" method="post">

                <div class="flex">

                    <div class="inputBox">
                        <span>Your name</span>
                        <input type="text" placeholder="Enter Your Name" name="name" required>
                    </div>

                    <div class="inputBox">
                        <span>Your email</span>
                        <input type="text" placeholder="Enter Your Email" name="email" required>
                    </div>

                    <div class="inputBox">
                        <span>Your Number</span>
                        <input type="text" placeholder="Enter Your Number" name="Number" required>
                    </div>

                    <div class="inputBox">
                        <span>Choose Plan</span>
                        <select name="plan">
                            <option value="basic">Basic Plan</option>
                            <option value="premium">Premium Plan</option>
                            <option value="ultimate">Ultimate Plan</option>
                        </select>
                    </div>


                    <div class="inputBox">
                        <span>Your Address</span>
                        <textarea name="address" placeholder="Enter Your Address" required cols="30" rows="10"></textarea>
                    </div>

                    <div class="inputBox">
                        <span>Your Message</span>
                        <textarea name="message" placeholder="Enter Your Message" required cols="30" rows="10"></textarea>
                    </div>

                </div>
                <input type="submit" value="send mesage" name="send" class="btn">
            </form>

        </section>


        <?php @include 'footer.php'; ?>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>

</body>

</html>