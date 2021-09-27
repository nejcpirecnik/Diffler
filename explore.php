<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Diffler - NFT Marketplace</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="main">
        <?php include 'header.php' ?>
        <!-- ***** Explore Area Start ***** -->
        <section class="explore-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-7">
                        <!-- Intro -->
                        <div class="intro text-center mb-4">
                            <span>Explore</span>
                            <h3 class="mt-3 mb-0">Exclusive Digital Assets</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-12">
                        <!-- Explore Menu -->
                        <div class="explore-menu btn-group btn-group-toggle flex-wrap justify-content-center text-center mb-4" data-toggle="buttons">
                            <label class="btn active d-table text-uppercase p-2">
                                <input type="radio" value="all" checked class="explore-btn">
                                <span>All</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="art" class="explore-btn">
                                <span>Art</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="music" class="explore-btn">
                                <span>Music</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="collectibles" class="explore-btn">
                                <span>Collectibles</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="sports" class="explore-btn">
                                <span>Sports</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row items explore-items">
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["art","sports"]'>
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
                                        <h5 class="mb-0">Walking On Air</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Richard</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.5 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["collectibles","sports"]'>
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
                                        <h5 class="mb-0">Domain Names</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">John Deo</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>2.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["art","music"]'>
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
                                        <h5 class="mb-0">Trading Cards</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Arham</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>2.3 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["sports","art","music"]'>
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
                                        <h5 class="mb-0">Industrial Revolution</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Yasmin</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.8 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["music","sports","collectibles"]'>
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
                                        <h5 class="mb-0">Utility</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Junaid</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["collectibles","sports"]'>
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
                                        <h5 class="mb-0">Sports</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">ArtNox</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["art","sports"]'>
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
                                        <h5 class="mb-0">Cartoon Heroes</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Junaid</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>3.2 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["music","sports","art","collectibles"]'>
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
                                        <h5 class="mb-0">Gaming Chair</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Johnson</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>0.69 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["music","sports","collectibles"]'>
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
                                        <h5 class="mb-0">Utility</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Junaid</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["art","music"]'>
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
                                        <h5 class="mb-0">Sports</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">ArtNox</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>1.7 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["sports","art","music"]'>
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
                                        <h5 class="mb-0">Cartoon Heroes</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Junaid</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>3.2 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item" data-groups='["music","sports","collectibles"]'>
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
                                        <h5 class="mb-0">Gaming Chair</h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <a href="author.php">
                                            <h6 class="ml-2 mb-0">Johnson</h6>
                                        </a>
                                    </div>
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>0.69 ETH</span>
                                        <span>1 of 1</span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.php"><i class="icon-handbag mr-2"></i>Place a Bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Explore Area End ***** -->

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
                                <div class="copyright-left">&copy;2021 Diffler, All Rights Reserved.</div>
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