<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/istyle.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="index.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="img/f2.jpeg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>At Pesto, we prioritize natural ingredients, expert-backed formulas, and sustainable practices to deliver exceptional hair care tailored to every hair type. Our commitment to quality and customer satisfaction ensures that you experience refined beauty, one strand at a time. Trust us for a healthier, more beautiful hair journey.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>At Pesto, we care about your hair's health and beauty. We offer a curated selection of premium hair products, each designed to meet your unique needs. Not sure which product is right for you? Our expert guides and personalized recommendations make it easy to choose the perfect solution for your hair type and goals. We're here to support you every step of the way.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="img/f3.png" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="img/f1.jpeg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Our mission is to create products that not only enhance your hair's health and appearance but also make you feel confident and cared for. At Pesto, we believe in refined beauty, one strand at a time.</p>
            <a href="index.php" class="btn">back to home</a>
        </div>

    </div>

</section>



<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>