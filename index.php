<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Diffler - NFT Marketplace</title>
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(assets/img/Preloader.gif) center no-repeat #000000;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>

        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
</head>

<body>
<!-- Paste this code after body tag -->
<div class="se-pre-con"></div>
<!-- Ends -->
    <div class="main">
        <?php include 'header.php' ?>
        <!-- ***** Hero Area Start ***** -->
        <section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-7">
                        <span>Diffler by Nejc Pirečnik</span>
                        <h1 class="mt-4">Discover, collect, and sell extraordinary NFTs</h1>
                        <p>Explore on the world's first & largest NFT marketplace</p>
                        <!-- Buttons -->
                        <div class="button-group">
                            <a class="btn btn-bordered-white" href="explore.php"><i class="icon-rocket mr-2"></i>Explore</a>
                            <a class="btn btn-bordered-white" href="create.php"><i class="icon-note mr-2"></i>Create</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 465" version="1.1">
                    <defs>
                        <linearGradient x1="49.7965246%" y1="28.2355058%" x2="49.7778147%" y2="98.4657689%" id="linearGradient-1">
                            <stop stop-color="rgba(69,40,220, 0.15)" offset="0%" />
                            <stop stop-color="rgba(87,4,138, 0.15)" offset="100%" />
                        </linearGradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="" fill="url(#linearGradient-1)">
                            <animate id="graph-animation" xmlns="http://www.w3.org/2000/svg" dur="2s" repeatCount="" attributeName="points" values="0,464 0,464 111.6,464 282.5,464 457.4,464 613.4,464 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,323.3 282.5,373 457.4,423.8 613.4,464 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,336.6 457.4,363.5 613.4,414.4 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,323.3 613.4,340 762.3,425.6 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,290.4 762.3,368 912.3,446.4 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,329.6 912.3,420 1068.2,427.6 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,402.4 1068.2,373 1191.2,412 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,336.6 1191.2,334 1328.1,404 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,282 1328.1,314 1440.1,372.8 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,254 1440.1,236 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,164 1440.1,144.79999999999998 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,164 1440.1,8 1440.1,464 0,464;" fill="freeze" />
                        </polygon>
                    </g>
                </svg>
            </div>
		</section>
        <!-- ***** Hero Area End ***** -->

        <!-- ***** Live Auctions Area Start ***** -->
        <section class="live-auctions-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Intro -->
                        <div class="intro d-flex justify-content-between align-items-end m-0">
                            <div class="intro-content">
                                <span>Auctions</span>
                                <h3 class="mt-3 mb-0">Live Auctions</h3>
                            </div>
                            <div class="intro-btn">
                                <a class="btn content-btn" href="auctions.php">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="auctions-slides">
                    <div class="swiper-container slider-mid items">
                        <div class="swiper-wrapper">
                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <a href="item-details.php">
                                            <img class="card-img-top" src="assets/img/content/auction_1.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center' data-date="2021-12-09"></div>
                                            </div>
                                            <a href="item-details.php">
                                                <h5 class="mb-0">Collectibles</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="item-details.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                                <span class="ml-2">@nejc26</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>1.5 ETH</span>
                                                <span>1 of 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <a href="item-details.php">
                                            <img class="card-img-top" src="assets/img/content/auction_2.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center' data-date="2021-10-05"></div>
                                            </div>
                                            <a href="item-details.php">
                                                <h5 class="mb-0">Collectibles</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="item-details.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_2.jpg" alt="">
                                                <span class="ml-2">@luvinreal</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>2.7 ETH</span>
                                                <span>1 of 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <a href="item-details.php">
                                            <img class="card-img-top" src="assets/img/content/auction_3.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center' data-date="2021-11-23"></div>
                                            </div>
                                            <a href="item-details.php">
                                                <h5 class="mb-0">Collectibles</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="item-details.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_3.jpg" alt="">
                                                <span class="ml-2">@hojnik15</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>2.5 ETH</span>
                                                <span>1 of 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <a href="item-details.php">
                                            <img class="card-img-top" src="assets/img/content/auction_4.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center' data-date="2021-12-29"></div>
                                            </div>
                                            <a href="item-details.php">
                                                <h5 class="mb-0">Collectibles</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="item-details.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_4.jpg" alt="">
                                                <span class="ml-2">@venja_balazic</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>1.8 ETH</span>
                                                <span>1 of 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <a href="item-details.php">
                                            <img class="card-img-top" src="assets/img/content/auction_5.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center' data-date="2022-01-24"></div>
                                            </div>
                                            <a href="item-details.php">
                                                <h5 class="mb-0">Collectibles</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="item-details.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_5.jpg" alt="">
                                                <span class="ml-2">@kkkukec</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>1.7 ETH</span>
                                                <span>1 of 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <a href="item-details.php">
                                            <img class="card-img-top" src="assets/img/content/auction_6.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center' data-date="2022-03-30"></div>
                                            </div>
                                            <a href="item-details.php">
                                                <h5 class="mb-0">Collectibles</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="item-details.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_6.jpg" alt="">
                                                <span class="ml-2">@zan3110</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>1.7 ETH</span>
                                                <span>1 of 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Live Auctions Area End ***** -->

        <!-- ***** Top Sellers Area Start ***** -->
        <section class="top-seller-area p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Intro -->
                        <div class="intro m-0">
                            <div class="intro-content">
                                <span>Creative Artist</span>
                                <h3 class="mt-3 mb-0">Top Sellers</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row items">
                    <div class="col-12 col-sm-6 col-lg-4 item">
                        <!-- Single Seller -->
                        <div class="card no-hover">
                            <div class="single-seller d-flex align-items-center">
                                <a href="author.php">
                                    <img class="avatar-md rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                </a>
                                <!-- Seller Info -->
                                <div class="seller-info ml-3">
                                    <a class="seller mb-2" href="author.php">@nejc26</a>
                                    <span>56.6 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 item">
                        <!-- Single Seller -->
                        <div class="card no-hover">
                            <div class="single-seller d-flex align-items-center">
                                <a href="author.php">
                                    <img class="avatar-md rounded-circle" src="assets/img/content/avatar_2.jpg" alt="">
                                </a>
                                <!-- Seller Info -->
                                <div class="seller-info ml-3">
                                    <a class="seller mb-2" href="author.php">@luvinreal</a>
                                    <span>42.2 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 item">
                        <!-- Single Seller -->
                        <div class="card no-hover">
                            <div class="single-seller d-flex align-items-center">
                                <a href="author.php">
                                    <img class="avatar-md rounded-circle" src="assets/img/content/avatar_3.jpg" alt="">
                                </a>
                                <!-- Seller Info -->
                                <div class="seller-info ml-3">
                                    <a class="seller mb-2" href="author.php">@hojnik15</a>
                                    <span>35.3 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 item">
                        <!-- Single Seller -->
                        <div class="card no-hover">
                            <div class="single-seller d-flex align-items-center">
                                <a href="author.php">
                                    <img class="avatar-md rounded-circle" src="assets/img/content/avatar_4.jpg" alt="">
                                </a>
                                <!-- Seller Info -->
                                <div class="seller-info ml-3">
                                    <a class="seller mb-2" href="author.php">@venja_balazic</a>
                                    <span>32.7 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 item">
                        <!-- Single Seller -->
                        <div class="card no-hover">
                            <div class="single-seller d-flex align-items-center">
                                <a href="author.php">
                                    <img class="avatar-md rounded-circle" src="assets/img/content/avatar_5.jpg" alt="">
                                </a>
                                <!-- Seller Info -->
                                <div class="seller-info ml-3">
                                    <a class="seller mb-2" href="author.php">@kkkukec</a>
                                    <span>21.8 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 item">
                        <!-- Single Seller -->
                        <div class="card no-hover">
                            <div class="single-seller d-flex align-items-center">
                                <a href="author.php">
                                    <img class="avatar-md rounded-circle" src="assets/img/content/avatar_6.jpg" alt="">
                                </a>
                                <!-- Seller Info -->
                                <div class="seller-info ml-3">
                                    <a class="seller mb-2" href="author.php">@zan3110</a>
                                    <span>23.5 ETH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Top Sellers Area End ***** -->

        <!-- ***** Popular Collections Area Start ***** -->
        <section class="popular-collections-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Intro -->
                        <div class="intro d-flex justify-content-between align-items-end m-0">
                            <div class="intro-content">
                                <span>Most Popular</span>
                                <h3 class="mt-3 mb-0">Popular Collections</h3>
                            </div>
                            <div class="intro-btn">
                                <a class="btn content-btn text-left" href="explore.php">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row items">
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_1.jpg" alt="">
                                </a>
                                <!-- Seller -->
                                <a class="seller" href="item-details.php">
                                    <div class="seller-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <a href="item-details.php">
                                        <h5 class="mb-2">Bizarro #2356</h5>
                                    </a>
                                    <span>ERC-729</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_2.jpg" alt="">
                                </a>
                                <!-- Seller -->
                                <a class="seller" href="item-details.php">
                                    <div class="seller-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_2.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <a href="item-details.php">
                                        <h5 class="mb-2">Bizarro #2865</h5>
                                    </a>
                                    <span>ERC-729</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_3.jpg" alt="">
                                </a>
                                <!-- Seller -->
                                <a class="seller" href="item-details.php">
                                    <div class="seller-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_3.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <a href="item-details.php">
                                        <h5 class="mb-2">Bizarro #1265</h5>
                                    </a>
                                    <span>ERC-729</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_4.jpg" alt="">
                                </a>
                                <!-- Seller -->
                                <a class="seller" href="item-details.php">
                                    <div class="seller-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_4.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <a href="item-details.php">
                                        <h5 class="mb-2">Bizarro #8234</h5>
                                    </a>
                                    <span>ERC-729</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_5.jpg" alt="">
                                </a>
                                <!-- Seller -->
                                <a class="seller" href="item-details.php">
                                    <div class="seller-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_5.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <a href="item-details.php">
                                        <h5 class="mb-2">Bizarro #8756</h5>
                                    </a>
                                    <span>ERC-729</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_6.jpg" alt="">
                                </a>
                                <!-- Seller -->
                                <a class="seller" href="item-details.php">
                                    <div class="seller-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_6.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <a href="item-details.php">
                                        <h5 class="mb-2">Bizarro #6436</h5>
                                    </a>
                                    <span>ERC-729</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_1.jpg" alt="">
                                </a>
                                <!-- Seller -->
                                <a class="seller" href="item-details.php">
                                    <div class="seller-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_7.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <a href="item-details.php">
                                        <h5 class="mb-2">Bizarro #3654</h5>
                                    </a>
                                    <span>ERC-729</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_2.jpg" alt="">
                                </a>
                                <!-- Seller -->
                                <a class="seller" href="item-details.php">
                                    <div class="seller-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_8.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <a href="item-details.php">
                                        <h5 class="mb-2">Bizarro #0326</h5>
                                    </a>
                                    <span>ERC-729</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Popular Collections Area End ***** -->

        <!-- ***** Explore Area Start ***** -->
        <section class="explore-area load-more p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Intro -->
                        <div class="intro d-flex justify-content-between align-items-end m-0">
                            <div class="intro-content">
                                <span>Exclusive Assets</span>
                                <h3 class="mt-3 mb-0">Explore</h3>
                            </div>
                            <div class="intro-btn">
                                <a class="btn content-btn" href="explore.php">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row items">
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_1.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #3462</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">lanamurko</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.5 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_2.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #9349</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">luvinreal</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>2.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_3.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #1245</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">hojnik15</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>2.3 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_4.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #7423</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">venja_balazic</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.8 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_5.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #9843</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">kkkukec</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_6.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #0134</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">zan3110</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_7.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #8234</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">kkkukec</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>3.2 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_8.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #3462</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">valjarh</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>0.69 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_9.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #7323</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">kkkukec</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_10.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #1952</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">zan3110</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_11.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #4623</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">kkkukec</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>3.2 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="item-details.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php">
                                    <img class="card-img-top" src="assets/img/content/auction_12.jpg" alt="">
                                </a>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <a href="item-details.php">
                                        <h5 class="mb-0">Bizarro #5482</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">valjarh</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>0.69 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a id="load-btn" class="btn btn-bordered-white mt-5" href="#">Load More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Explore Area End ***** -->

        <!-- ***** Work Area Start ***** -->
        <section class="work-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Intro -->
                        <div class="intro mb-4">
                            <div class="intro-content">
                                <span>How It Works</span>
                                <h3 class="mt-3 mb-0">Create and sell your NFTs</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row items">
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Single Work -->
                        <div class="single-work">
                            <i class="icons icon-wallet text-effect"></i>
                            <h4>Set up your wallet</h4>
                            <p>Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT Marketplace in the top right corner. Learn about the wallets we support.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Single Work -->
                        <div class="single-work">
                            <i class="icons icon-grid text-effect"></i>
                            <h4>Create your collection</h4>
                            <p>Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Single Work -->
                        <div class="single-work">
                            <i class="icons icon-drawer text-effect"></i>
                            <h4>Add your NFTs</h4>
                            <p>Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats, and unlockable content.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Single Work -->
                        <div class="single-work">
                            <i class="icons icon-bag text-effect"></i>
                            <h4>List them for sale</h4>
                            <p>Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Work Area End ***** -->
    <?php include 'footer.php'?>
        <!--====== Modal Search Area Start ======-->
        <div id="search" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 align-self-center">
                                <div class="row">
                                    <div class="col-12 pb-3">
                                        <h2 class="search-title mt-0 mb-3">What are you looking for?</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group mt-4">
                                        <input type="text" placeholder="Enter your keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group align-self-center">
                                        <button class="btn btn-bordered-white mt-3">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Search Area End ======-->

        <!--====== Modal Responsive Menu Area Start ======-->
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Responsive Menu Area End ======-->
    </div>
    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/vendor/all.min.js"></script>
    <script src="assets/js/vendor/slider.min.js"></script>
    <script src="assets/js/vendor/countdown.min.js"></script>
    <script src="assets/js/vendor/shuffle.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/main.js"></script>
</body>
</html>