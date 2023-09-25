<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Travel - News Page</title>
=======
    <title>Sale Page</title>
>>>>>>> d9f4d7ef5e8ac15ca91bf0f3b8b196c2803a8d6b
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php require_once('./inc/header.php'); ?>
    <div class="container-fluid" id="news">
        <p class="fw-bold  fs-3">News </p>
        <div id="" class="d-flex flex-row gap-3">
            <img class="border rounded" src="./images/Tours/4.jpg" alt="" width="800px" height="550px">
            <div class="d-flex justify-content-between flex-column">
                <div class="d-flex flex-row">
                    <img class="border rounded" src="./images/Tours/2.jpg" alt="" width="210px" height="144px">
                    <div class="mx-3 d-flex flex-column">
                        <a class="fs-4 text-danger fw-bold  ">Tin tức dữ liệu </a>
                        <p class="fs-6 fw-normal">Tour Đài Loan 2023: Mùa Thu Trọn Vẹn Và Hấp Dẫn Đang Chờ Đón Bạn</p>
                        <p class="fs-6">22/09/2023</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <img class="border rounded" src="./images/Tours/2.jpg" alt="" width="210px" height="144px">
                    <div class="mx-3 d-flex flex-column">
                        <a class="fs-4 text-danger fw-bold ">Tin tức dữ liệu </a>
                        <p class="fs-6 fw-normal">Tour Đài Loan 2023: Mùa Thu Trọn Vẹn Và Hấp Dẫn Đang Chờ Đón Bạn</p>
                        <p class="fs-6">22/09/2023</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <img class="border rounded" src="./images/Tours/3.jpg" alt="" width="210px" height="144px">
                    <div class="mx-3 d-flex flex-column">
                        <a class="fs-4  text-danger fw-bold   "> Tin tức dữ liệu </a>
                        <p class="fs-6 fw-normal">Tour Đài Loan 2023: Mùa Thu Trọn Vẹn Và Hấp Dẫn Đang Chờ Đón Bạn</p>
                        <p class="fs-6">22/09/2023</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="container-fluid my-4" id="guide">
        <p class="fw-bold fs-3">Travel guide</p>
        <div class="row">
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/6.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/5.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/4.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/3.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/2.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/1.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
        </div>

    </div>

    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

<<<<<<< HEAD
      <!-- Button Login -->

      <?php require('./inc/button.php') ?>

    <!-- Button Reginter -->
=======
    <!-- Button Login -->

    <div class="modal fade" id="loginModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
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

    <div class="modal fade" id="registerModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Register
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                            <div class="text-center my-1">
                                <button type="summit" class="btn btn-dark shadow-none">REGISTER</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
>>>>>>> d9f4d7ef5e8ac15ca91bf0f3b8b196c2803a8d6b

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
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

</body>

</html>