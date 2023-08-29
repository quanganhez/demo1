<?php 
    require('./inc/loginlogic.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - About Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
  <body class="bg-light">

    <!-- Navigation -->
        
    <?php require('./inc/header.php') ?>

    <!-- Facilities Page -->

    <div class="my-5 px-4">
        <h1 class="fw-bold header-font text-center">About Us</h1>
        <div class="header-line bg-dark"></div>
        <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula tellus id nibh <br> venenatis tempor. 
        Donec iaculis dui nunc, non blandit odio blandit et.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h2 class="mb-3">Leader</h2>
                <p>
                "I commit to providing an excellent experience for customers
                when booking tours on our website. We will ensure that detailed 
                and accurate information about the tours is updated regularly. 
                We will provide a user-friendly interface that allows customers to easily search, 
                compare, and book tours according to their preferences."
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1 tour-item rounded">
                <img src="./images/About/learder.png" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4 text-center">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/About/1.png" width="80px">
                    <h3 class="mt-3">500+ Tours</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 text-center">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/About/2.png" width="80px">
                    <h3 class="mt-3">300+ Customer</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 text-center">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/About/3.png" width="80px">
                    <h3 class="mt-3">100+ Reviews</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 text-center">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/About/4.png" width="80px">
                    <h3 class="mt-3">200+ Staff</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <!-- Button Login -->

    
    <?php require('./inc/button.php') ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnIteraction: false,
        }
        });
        var swiper = new Swiper(".swiper-comment", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "2",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 2,
                }
            }
        });
    </script>

  </body>
</html>