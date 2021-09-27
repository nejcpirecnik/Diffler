<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Diffler - NFT Marketplace </title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="main">
        <?php include 'header.php' ?>
        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="m-0">Item Details</h2>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Explore</a></li>
                                <li class="breadcrumb-item active">Item Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Item Details Area Start ***** -->
        <section class="item-details-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-5">
                        <div class="item-info">
                            <div class="item-thumb text-center">
                                <img src="assets/img/content/auction_2.jpg" alt="">
                            </div>
                            <div class="card no-hover countdown-times my-4">
                                <div class='countdown d-flex justify-content-center' data-date="2022-03-30"></div>
                            </div>
                            <!-- Netstorm Tab -->
                            <ul class="netstorm-tab nav nav-tabs" id="nav-tab">
                                <li>
                                    <a class="active" id="nav-home-tab" data-toggle="pill" href="#nav-home">
                                        <h5 class="m-0">Bids</h5>
                                    </a>
                                </li>
                                <li>
                                    <a id="nav-profile-tab" data-toggle="pill" href="#nav-profile">
                                        <h5 class="m-0">History</h5>
                                    </a>
                                </li>
                                <li>
                                    <a id="nav-contact-tab" data-toggle="pill" href="#nav-contact">
                                        <h5 class="m-0">Details</h5>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab Content -->
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home">
                                    <ul class="list-unstyled">
                                        <!-- Single Tab List -->
                                        <li class="single-tab-list d-flex align-items-center">
                                            <img class="avatar-sm rounded-circle mr-3" src="assets/img/content/avatar_1.jpg" alt="">
                                            <p class="m-0">Bid listed for <strong>14 ETH</strong> 4 hours ago <br>by <a href="author.php">@arham</a></p>
                                        </li>
                                        <!-- Single Tab List -->
                                        <li class="single-tab-list d-flex align-items-center">
                                            <img class="avatar-sm rounded-circle mr-3" src="assets/img/content/avatar_2.jpg" alt="">
                                            <p class="m-0">Bid listed for <strong>10 ETH</strong> 8 hours ago <br>by <a href="author.php">@junaid</a></p>
                                        </li>
                                        <!-- Single Tab List -->
                                        <li class="single-tab-list d-flex align-items-center">
                                            <img class="avatar-sm rounded-circle mr-3" src="assets/img/content/avatar_3.jpg" alt="">
                                            <p class="m-0">Bid listed for <strong>12 ETH</strong> 3 hours ago <br>by <a href="author.php">@yasmin</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="nav-profile">
                                    <ul class="list-unstyled">
                                        <!-- Single Tab List -->
                                        <li class="single-tab-list d-flex align-items-center">
                                            <img class="avatar-sm rounded-circle mr-3" src="assets/img/content/avatar_6.jpg" alt="">
                                            <p class="m-0">Bid listed for <strong>32 ETH</strong> 10 hours ago <br>by <a href="author.php">@hasan</a></p>
                                        </li>
                                        <!-- Single Tab List -->
                                        <li class="single-tab-list d-flex align-items-center">
                                            <img class="avatar-sm rounded-circle mr-3" src="assets/img/content/avatar_7.jpg" alt="">
                                            <p class="m-0">Bid listed for <strong>24 ETH</strong> 6 hours ago <br>by <a href="author.php">@artnox</a></p>
                                        </li>
                                        <!-- Single Tab List -->
                                        <li class="single-tab-list d-flex align-items-center">
                                            <img class="avatar-sm rounded-circle mr-3" src="assets/img/content/avatar_8.jpg" alt="">
                                            <p class="m-0">Bid listed for <strong>29 ETH</strong> 12 hours ago <br>by <a href="author.php">@meez</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="nav-contact">
                                    <!-- Single Tab List -->
                                    <div class="owner-meta d-flex align-items-center mt-3">
                                        <span>Owner</span>
                                        <a class="owner d-flex align-items-center ml-2" href="author.php">
                                            <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                            <h6 class="ml-2">Themeland</h6>
                                        </a>
                                    </div>
                                    <p class="mt-2">Created : 15 Jul 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <!-- Content -->
                        <div class="content mt-5 mt-lg-0">
                            <h3 class="m-0">Walking On Air</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <!-- Owner -->
                            <div class="owner d-flex align-items-center">
                                <span>Owned By</span>
                                <a class="owner-meta d-flex align-items-center ml-3" href="author.php">
                                    <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                    <h6 class="ml-2">Themeland</h6>
                                </a>
                            </div>
                            <!-- Item Info List -->
                            <div class="item-info-list mt-4">
                                <ul class="list-unstyled">
                                    <li class="price d-flex justify-content-between">
                                        <span>Current Price 1.5 ETH</span>
                                        <span>$500.89</span>
                                        <span>1 of 5</span>
                                    </li>
                                    <li>
                                        <span>Size</span>
                                        <span>14000 x 14000 px</span>
                                    </li>
                                    <li>
                                        <span>Volume Traded</span>
                                        <span>64.1</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="row items">
                                <div class="col-12 col-md-6 item px-lg-2">
                                    <div class="card no-hover">
                                        <div class="single-seller d-flex align-items-center">
                                            <a href="author.php">
                                                <img class="avatar-md rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                            </a>
                                            <!-- Seller Info -->
                                            <div class="seller-info ml-3">
                                                <a class="seller mb-2" href="author.php">@ArtNoxStudio</a>
                                                <span>Creator</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 item px-lg-2">
                                    <div class="card no-hover">
                                        <div class="single-seller d-flex align-items-center">
                                            <a href="author.php">
                                                <img class="avatar-md rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                            </a>
                                            <!-- Seller Info -->
                                            <div class="seller-info ml-3">
                                                <a class="seller mb-2" href="explore.php">Virtual Worlds</a>
                                                <span>Collection</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 item px-lg-2">
                                    <div class="card no-hover">
                                        <h4 class="mt-0 mb-2">Highest Bid</h4>
                                        <div class="price d-flex justify-content-between align-items-center">
                                            <span>2.9 BNB</span>
                                            <span>1 of 5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="d-block btn btn-bordered-white mt-4" href="wallet-connect.php">Place a Bid</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Item Details Area End ***** -->

        <!-- ***** Live Auctions Area Start ***** -->
        <section class="live-auctions-area pt-0">
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
                                                <h5 class="mb-0">Virtual Worlds</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="author.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                                <span class="ml-2">@Richard</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>1.5 BNB</span>
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
                                            <a class="seller d-flex align-items-center my-3" href="author.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_2.jpg" alt="">
                                                <span class="ml-2">@JohnDeo</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>2.7 BNB</span>
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
                                                <div class='countdown d-flex justify-content-center' data-date="2021-09-15"></div>
                                            </div>
                                            <a href="item-details.php">
                                                <h5 class="mb-0">Arts</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="author.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_3.jpg" alt="">
                                                <span class="ml-2">@MKHblots</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>2.3 BNB</span>
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
                                                <h5 class="mb-0">Robotic Arts</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="author.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_4.jpg" alt="">
                                                <span class="ml-2">@RioArham</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>1.8 BNB</span>
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
                                                <h5 class="mb-0">Design Illusions</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="author.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_5.jpg" alt="">
                                                <span class="ml-2">@ArtNox</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>1.7 BNB</span>
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
                                                <h5 class="mb-0">Design Illusions</h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3" href="author.php">
                                                <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_6.jpg" alt="">
                                                <span class="ml-2">@ArtNox</span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span>1.7 BNB</span>
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

        <!--====== Footer Area Start ======-->
        <footer class="footer-area">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3 res-margin">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Logo -->
                                <a class="navbar-brand" href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis non, fugit totam vel laboriosam vitae.</p>
                                <!-- Social Icons -->
                                <div class="social-icons d-flex">
                                    <a class="facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="google-plus" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                    <a class="vine" href="#">
                                        <i class="fab fa-vine"></i>
                                        <i class="fab fa-vine"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 res-margin">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h4 class="footer-title">Useful Links</h4>
                                <ul>
                                    <li><a href="#">All NFTs</a></li>
                                    <li><a href="#">How It Works</a></li>
                                    <li><a href="#">Create</a></li>
                                    <li><a href="#">Explore</a></li>
                                    <li><a href="#">Privacy &amp; Terms</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 res-margin">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h4 class="footer-title">Community</h4>
                                <ul>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">Suggestions</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h4 class="footer-title">Subscribe Us</h4>
                                <!-- Subscribe Form -->
                                <div class="subscribe-form d-flex align-items-center">
                                    <input type="email" class="form-control" placeholder="info@yourmail.com">
                                    <button type="submit" class="btn"><i class="icon-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">&copy;2021 NetStorm, All Rights Reserved.</div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">Made with <i class="fas fa-heart"></i> By <a href="#">Themeland</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->

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