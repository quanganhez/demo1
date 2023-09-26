<?php
require_once('connection.php');

$sql = "SELECT * FROM ql_tour ";

$data = mysqli_query($con, $sql); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - Tour Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-light">

    <!-- Navigation -->

    <?php require('./inc/header.php') ?>

    <!-- Facilities Page -->

    <div class="my-5 px-4">
        <h1 class="fw-bold header-font text-center">Tours</h1>
        <div class="header-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula tellus id nibh <br> venenatis
            tempor.
            Donec iaculis dui nunc, non blandit odio blandit et.
        </p>
    </div>

    <div class="container">
        <h2 class="my-4">Foreign Tour</h2>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($data)) {  ?>
            <div class="d-grid col-lg-4 col-md-6 mb-5 ">

                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">





                    <img src="<?php echo $row['avatar'] ?>" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">

                        <h5 class="card-title note-font fw-bold"><?php echo $row['name_tour'] ?></h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> <?php echo $row['code_tour'] ?>
                        </p>
                        <p class="card-text"><?php echo $row['start'] ?></p>

                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2"><?php echo $row['price'] ?></p>

                        </div>

                        <button type="button" href="#" class="btn btn-primary w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#tour_payment" id="<?php echo $row['id'] ?>">Booking now</button>
                    </div>
                </div>

            </div>

            <?php

            }
            ?>
            <script>
            $(document).ready(function() {
                $('button').click(function() {
                    id_emp = $(this).attr('id')
                    $.ajax({
                        url: "select.php",
                        method: 'post',
                        data: {
                            emp_id: id_emp
                        },
                        success: function(result) {
                            $(".modal-body").html(result);
                        }
                    });


                    $('#tour_payment').modal("Booking now");
                })
            })
            </script>
        </div>
    </div>
    <div class="container">
        <h2 class="my-4">Dometics Tour</h2>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($data)) {  ?>
            <div class="d-grid col-lg-4 col-md-6 mb-5 ">

                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">





                    <img src="<?php echo $row['avatar'] ?>" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">

                        <h5 class="card-title note-font fw-bold"><?php echo $row['name_tour'] ?></h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> <?php echo $row['code_tour'] ?>
                        </p>
                        <p class="card-text"><?php echo $row['start'] ?></p>

                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2"><?php echo $row['price'] ?></p>

                        </div>

                        <button type="button" href="#" class="btn btn-primary w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#tour_payment" id="<?php echo $row['id'] ?>">Booking now</button>
                    </div>
                </div>

            </div>
            <?php
                }
                ?>
        </div>
        <script>
        $(document).ready(function() {
            $('button').click(function() {
                id_emp = $(this).attr('id')
                $.ajax({
                    url: "select.php",
                    method: 'post',
                    data: {
                        emp_id: id_emp
                    },
                    success: function(result) {
                        $(".modal-body").html(result);
                    }
                });


                $('#tour_payment').modal("Booking now");
            })
        })
        </script>
    </div>
    <!-- Payment -->

    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <!-- Button Login -->

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <input type="text" class="form-control shadow-none" id="emailaddress"
                                onchange="check_pass_login()">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" id="password_login"
                                onchange="check_pass_login()">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="summit" class="btn btn-dark shadow-none" disabled
                                id="button_login">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none ">Forgot
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
                            Note: Thông tin của bạn phải đúng với giấy tờ (CCCD, CMND, GPLX, etc...) vì sẽ được
                            kiểm tra
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
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
        <script src="./js/invalid.js"></script>
</body>

</html>