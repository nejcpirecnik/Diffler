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
        <!-- ***** Wallet Connect Area Start ***** -->
        <section class="wallet-connect-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-7">
                        <!-- Intro -->
                        <div class="intro text-center">
                            <span>Wallet Connect</span>
                            <h3 class="mt-3 mb-0">Connect your Wallet</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <!-- Single Wallet -->
                        <div class="card single-wallet">
                            <a class="d-block text-center" href="login.php">
                                <img class="avatar-lg" src="assets/img/content/metamask.png" alt="">
                                <h4 class="mb-0">MetaMask</h4>
                                <p>A browser extension with great flexibility. The web's most popular wallet</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <!-- Single Wallet -->
                        <div class="card single-wallet">
                            <a class="d-block text-center" href="login.php">
                                <img class="avatar-lg" src="assets/img/content/authereum.png" alt="">
                                <h4 class="mb-0">Authereum</h4>
                                <p>A user-friendly wallet that allows you to sign up with your phone number on any device</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <!-- Single Wallet -->
                        <div class="card single-wallet">
                            <a class="d-block text-center" href="login.php">
                                <img class="avatar-lg" src="assets/img/content/walletconnect.png" alt="">
                                <h4 class="mb-0">WalletConnect</h4>
                                <p>Pair with Trust, Argent, MetaMask &amp; more. Works from any browser, without an extension</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <!-- Single Wallet -->
                        <div class="card single-wallet">
                            <a class="d-block text-center" href="login.php">
                                <img class="avatar-lg" src="assets/img/content/dapper.png" alt="">
                                <h4 class="mb-0">Dapper</h4>
                                <p>A security-focused cloud wallet with pin codes and multi-factor authentication</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <!-- Single Wallet -->
                        <div class="card single-wallet">
                            <a class="d-block text-center" href="login.php">
                                <img class="avatar-lg" src="assets/img/content/kaikas.png" alt="">
                                <h4 class="mb-0">Kaikas</h4>
                                <p>A simple-to-use wallet that works on both mobile and through a browser extension</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Wallet Connect Area End ***** -->
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