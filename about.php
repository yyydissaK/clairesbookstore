<?php

include 'config.php';

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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
</div>



<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Our Story</h3>
         <p>Since 2009, Claire's Bookstore has been located in the heart of Cape Town. We began as an independent bookshop, founded by Bernice Botha, specializing in local contemporary fiction. The new books section began with a shelf of South African fiction books, which has since expanded to the point where we now specialize in works written by South African authors. There is still a fantastic assortment of international titles available.</p>
         
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>"This place has become my new go-to bookstore in the city! The staff is very friendly and knowledgable." </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cazmé Naidoo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpg" alt="">
         <p>"Wonderful place that combines new & old. All the latest in books but also a very extensive collection of books by local authors."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>William Murray</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>"This is a great store in an easily accessible location. The store has a huge variety of contemporary fiction."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lindsey Dumaguina</h3>
      </div>

      

   </div>

  <br>
</br>
  <br>
</br>
  <br>
</br>
  <br>
</br>
  <br>
</br>
  <br>
</br>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>