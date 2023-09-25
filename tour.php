<?php 
    require('./inc/loginlogic.php');
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - Tour Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">
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

            <div class="d-grid col-lg-4 col-md-6 mb-5 ">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/2.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>31/08/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">Flower and Sea Journey: Dalat - Nha Trang - Vietnam
                            National Day on September 2nd.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN5251-062-310823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>5,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">5,990,000₫</p>
                            <button class="btn btn-sm btn-danger">5% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/3.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>03/09/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">China: Zhangjiajie - Phoenix Ancient Town - Tianmen
                            Mountain - Yuanjiajie | 5-star hotel, 5 days 4 nights.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN381-031-030923VJ-H
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>15,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">14,990,000₫</p>
                            <button class="btn btn-sm btn-danger">6% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/4.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>13/09/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">Dubai - Abu Dhabi (Enjoy a buffet meal at a 5-star
                            hotel, complimentary tickets to Burj Khalifa & ice café).</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN937-080-130923EK-D
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>30,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">29,990,000₫</p>
                            <button class="btn btn-sm btn-danger">3% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/5.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>08/09/2023 - 6 days</p>
                        <h5 class="card-title note-font fw-bold">China: Chengdu - Jiuzhaigou - Huanglong Paradise on
                            Earth(5-star hotel stay).</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN352-019-0809233U-D
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>20,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">18,490,000₫</p>
                            <button class="btn btn-sm btn-danger">12% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/6.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>13/09/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">China: Shanghai - Hangzhou - Suzhou - Discounted price
                            reduced by 1,500,000 VND per person.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN312-010-130923CZ-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>16,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">14,490,000₫</p>
                            <button class="btn btn-sm btn-danger">15% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="my-4">Dometics Tour</h2>
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/2.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>31/08/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">Flower and Sea Journey: Dalat - Nha Trang - Vietnam
                            National Day on September 2nd.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN5251-062-310823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>5,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">5,990,000₫</p>
                            <button class="btn btn-sm btn-danger">5% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/3.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>03/09/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">China: Zhangjiajie - Phoenix Ancient Town - Tianmen
                            Mountain - Yuanjiajie | 5-star hotel, 5 days 4 nights.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN381-031-030923VJ-H
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>15,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">14,990,000₫</p>
                            <button class="btn btn-sm btn-danger">6% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/4.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>13/09/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">Dubai - Abu Dhabi (Enjoy a buffet meal at a 5-star
                            hotel, complimentary tickets to Burj Khalifa & ice café).</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN937-080-130923EK-D
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>30,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">29,990,000₫</p>
                            <button class="btn btn-sm btn-danger">3% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/5.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>08/09/2023 - 6 days</p>
                        <h5 class="card-title note-font fw-bold">China: Chengdu - Jiuzhaigou - Huanglong Paradise on
                            Earth(5-star hotel stay).</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN352-019-0809233U-D
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>20,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">18,490,000₫</p>
                            <button class="btn btn-sm btn-danger">12% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/6.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>13/09/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">China: Shanghai - Hangzhou - Suzhou - Discounted price
                            reduced by 1,500,000 VND per person.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN312-010-130923CZ-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>16,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">14,490,000₫</p>
                            <button class="btn btn-sm btn-danger">15% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top" style="height: 250px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <?php require('./inc/button.php') ?>

    <!-- Button regiter -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
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