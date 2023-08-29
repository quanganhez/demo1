<?php 
    require('./inc/loginlogic.php');
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - Contact Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
  <body class="bg-light">

    <!-- Navigation -->
        
    <?php require('./inc/header.php') ?>

    <!-- Contact Page -->

    <div class="my-5 px-4">
        <h1 class="fw-bold header-font text-center">Contact Us</h1>
        <div class="header-line bg-dark"></div>
        <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula tellus id nibh <br> venenatis tempor. 
        Donec iaculis dui nunc, non blandit odio blandit et.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.988211049866!2d105.8369637!3d21.022739599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1693039036148!5m2!1svi!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5 class="mt-2">Address</h5>
                    <a href="https://goo.gl/maps/RPFmhsk5iGP35XL79" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i> HaNoi,VietNam
                    </a>
                    <h5 class="mt-2">Call Us</h5>
                    <a href="tel: +84865958173" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone"></i> +84865958173</a>
                    <br>
                    <a href="tel: +84865958173" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone"></i> +84956859812</a>
                    <h5 class="mt-2">Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
                    <i class="bi bi-meta"></i> Meta</a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
                    <i class="bi bi-instagram"></i> Instagram</a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
                    <i class="bi bi-github"></i> Github</a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
                    <i class="bi bi-linkedin"></i> Linkedin</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
               <div class="bg-white rounded shadow p-4">
                    <h5 class="mt-2">Send a infomation</h5>
                    <div class="mt-3">
                        <label class="form-label">Type of information</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Tour</option>
                            <option value="2">Customer service</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Tel</label>
                        <input type="number" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                    </div>
                    <div class="text-center"> <!-- Add text-center class here -->
                        <button type="submit" class="btn btn-primary text-white mt-3">
                            Send To
                            <i class="bi bi-airplane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <!-- Button Login -->

    
    <?php require('./inc/button.php') ?>

    <!-- Button Regiter -->
    
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