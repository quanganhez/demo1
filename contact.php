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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula tellus id nibh <br> venenatis
            tempor.
            Donec iaculis dui nunc, non blandit odio blandit et.
        </p>
    </div>

    <?php 

        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $value = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q,$value,'i'));

    ?>


    <div class="container">
        <div class="row  ">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
<<<<<<< HEAD
                <div class="bg-white rounded shadow p-4">
                    <iframe src="<?php echo $contact_r['iframe'] ?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5 class="mt-2">Address</h5>
                    <a href="<?php echo$contact_r['gmaps']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i> <?php echo$contact_r['address']?>
                    </a>
                    <h5 class="mt-2">Call Us</h5>
                    <a href="tel: +<?php echo$contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone"></i> +<?php echo$contact_r['pn1']?></a>
                    <br>
                    <?php
                        if($contact_r['pn2']!=''){
                            echo<<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone"></i> +$contact_r[pn2]</a>
                            data;
                        }
                    ?>
                    <h5 class="mt-2">Follow Us</h5>
                    <?php
                        if($contact_r['meta']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[meta]" class="d-inline-block mb-3 text-decoration-none text-dark">
                            <i class="bi bi-meta"></i> Meta</a>
                            <br>
                            data;
                        }
                    ?>
                       <?php
                        if($contact_r['ins']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[ins]" class="d-inline-block mb-3 text-decoration-none text-dark">
                            <i class="bi bi-instagram"></i> Instagram</a>
                            <br>
                            data;
                        }
                    ?>
                       <?php
                        if($contact_r['github']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[github]" class="d-inline-block mb-3 text-decoration-none text-dark">
                            <i class="bi bi-github"></i> Github</a>
                            <br>
                            data;
                        }
                    ?>
                       <?php
                        if($contact_r['linkedin']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[linkedin]" class="d-inline-block mb-3 text-decoration-none text-dark">
                            <i class="bi bi-linkedin"></i> Linkedin</a>
                            <br>
                            data;
                        }
                    ?>
=======
                <div class="bg-white rounded shadow p-4  ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.988211049866!2d105.8369637!3d21.022739599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1693039036148!5m2!1svi!2s"
                        width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h4 class="mt-2">Address</h4>

                    <a href="https://goo.gl/maps/RPFmhsk5iGP35XL79"
                        class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i> Ha Noi, Viet Nam
                    </a>

                    <br>
                    <i class="bi bi-geo-alt-fill"></i> <a>128C Dai La, Hai Ba Trung, Ha Noi</a>
                    <h4 class="mt-2 ">Call Us</h4>
                    <a href="tel: +84865958173" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +84865958173</a>
                    <br>
                    <a href="tel: +84865958173" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +84956859812</a>
                    <h4 class="mt-2">Follow Us</h4>
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
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
                        <i class="bi-youtube"></i> Youtube</a>
>>>>>>> d9f4d7ef5e8ac15ca91bf0f3b8b196c2803a8d6b
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 mb-5 px-4">
<<<<<<< HEAD
               <div class="bg-white rounded shadow p-4">
                <form method="POST">
                <h5 class="mt-2">Send a infomation</h5>
                    <div class="mt-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Tel</label>
                        <input type="number" name="tel" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control shadow-none">
=======
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
                        <input type="text" class="form-control shadow-none" placeholder="Vu Hoang A">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none" placeholder="Hugololo@gmail.com">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Tel</label>
                        <input type="number" class="form-control shadow-none" placeholder="+844239327">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control shadow-none"
                            placeholder="128C Dai La, Hai Ba Trung, Ha Noi ">
>>>>>>> d9f4d7ef5e8ac15ca91bf0f3b8b196c2803a8d6b
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                    </div>
<<<<<<< HEAD
                    <div class="text-center"> <!-- Add text-center class here -->
                        <button type="submit" disabled name="send" class="btn btn-primary text-white mt-3">
                            Send To
=======
                    <div class="text-center">
                        <!-- Add text-center class here -->
                        <button type="submit" class="btn btn-primary text-white mt-3">
                            Send
>>>>>>> d9f4d7ef5e8ac15ca91bf0f3b8b196c2803a8d6b
                            <i class="bi bi-airplane"></i>
                        </button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>


    <?php

    if(isset($_POST['send']))
    {
        $frm_data = filter($_POST);

        $q = "INSERT INTO `user_queries`(`name`, `email`, `tel`, `address`, `title`, `message`) VALUES (?,?,?,?,?,?)";

        $values = [$frm_data['name'],$frm_data['email'],$frm_data['tel'],$frm_data['address'],$frm_data['title'],$frm_data['message']];

        $res = insert($q,$values,'ssssss');

        if($res==1){
            echo 'Thanh cong';
        }
        else {
            echo 'That bai';
        }
    }

    ?>

    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <!-- Button Login -->
    <div class="modal fade" id="loginModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="summit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                                Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Button Register -->

    <div class="modal fade" id="registerModal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Register
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge text-bg-light mb-3 text-wrap lh-base note-font">
                            Note: Thông tin của bạn phải đúng với giấy tờ (CCCD, CMND, GPLX, etc...) vì sẽ được kiểm tra
                            lại lúc check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none" id="password"
                                        onchange="check_pass();">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none" id="retype_password"
                                        onchange="check_pass();">
                                </div>
                            </div>
                            <div class="text-center my-1">
                                <button type="summit" class="btn btn-dark shadow-none" id="submit" disabled
                                    value="registration">REGISTER</button>
                            </div>
                        </div>
                </form>
            </div>
        </div> 
    <?php require('./inc/button.php') ?>

    <!-- Button Regiter -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="./js/invalid.js"></script>
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